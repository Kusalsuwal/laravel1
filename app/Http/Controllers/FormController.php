<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;


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


    public function store(Request $request)
    {
        $data = Test::create([
            'name' => $request->name,
            'number' => $request->number,
            'address' => $request->address,
            'email' => $request->email,
            'pan' => $request->pan,


        ]);

        return redirect()->route('form.index')->with('success', 'Form submitted successfully!');
    }



    //

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
        $data = Test::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('form.index')->with('success', 'Form updated successfully!');
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

//    public function restores($id)
//    {
//        dd($id);
////        $deletedData = Test::onlyTrashed()->get();
////
////        return view('restore', compact('deletedData'));
//    }
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


}
