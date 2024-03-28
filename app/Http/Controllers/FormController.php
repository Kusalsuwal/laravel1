<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Storage;


use App\Models\Test;
use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index()
    {

        $test = Test::all();
        return view('profile', compact('test'));
    }
    public function create()
    {
        return view('form.index');
    }
    public function store(StoreRequest $request)
{
    // Create new student record
    $student = new Test;
    $student->name = $request->input('name');
    $student->number = $request->input('number');
    $student->address = $request->input('address');
    $student->email = $request->input('email');
    $student->pan = $request->input('pan');
    $student->username = $request->input('username');
    $student->password = Hash::make($request->password);

    // Save student image if provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/students/', $filename);
        $student->image = $filename;
    }

    // Save student record
    $student->save();


    return redirect()->route('form.index')->with('success', 'Form submitted successfully!');
}

    public function edit($id)
    {
        $data = Test::where('id',$id)->first();
        return view('edit', compact('data'));
    }
    public function view($id)
    {
        $data = Test::where('id',$id)->first();
        return view('view', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = Test::findOrFail($id);
        
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->number = $request->number;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->pan = $request->pan;
    
        if ($request->hasFile('new_image')) {
            if ($data->image) {
                Storage::delete('uploads/students'. $data->image);
            }

            $file = $request->file('new_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students', $filename);
            $data->image = $filename;
        }

    
        $data->save();

        return redirect()->route('form.index')->with('success', 'Data updated successfully.');
    }

   
    public function restores($id)
    {

        $deletedData = Test::onlyTrashed()->find($id);



        if ($deletedData) {

            $deletedData->restore();


            return redirect()->route('form.restore');
        } else {
            return redirect()->route('form.restore');
        }
    }
    public function home()
    {
        return view('home');
    }
    public function product()
    {
        return view('products');
    }
 

public function delete($id)
{
    $data = Test::findOrFail($id);
    $data->delete();


    return redirect()->route('form.index')->with('success', 'Record deleted successfully.');

}
public function restore()
{
    $deletedData = Test::onlyTrashed()->get();

    return view('restore', compact('deletedData'));
}


public function logins(Request $request){
    return view('logins');

}



public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
    
        $test = Test::where('username', $username)->first();
       
        if ($test && Hash::check($password, $test->password)) {
            return redirect()->route('homes');

            // return view('home');
            // return $this->index();
        } else {
            // dd($request->all());
                return redirect()->route('logins')->with('error', 'Invalid password .');
    
            // Authentication failed
            // return redirect()->back()->withErrors(['username' => 'Invalid username or password.']);
        }

}

public function logout(Request $request)
{
    
    Auth()->logout();

    $request->session()->flush();

    $request->session()->regenerate();

    return redirect()->route('form.index');
}


}





