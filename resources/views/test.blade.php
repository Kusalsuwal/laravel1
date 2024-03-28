@extends('nav')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
        }

        button[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Registration form</h1>
    <a href="{{ route('form.index') }}" style="margin-right: -76px;margin-left: 351px;">
        <button style="margin-left:-20px">Back</button></a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data">
        @csrf
      

        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
   
        

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="number">Number:</label>
        <input type="text" id="number" name="number">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="pan">PAN:</label>
        <input type="text" id="pan" name="pan">

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
@endsection
