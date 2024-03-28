<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #421919;
            text-align: left;
            padding: 8px;
        }

    </style>
</head>

<a href="{{ route('form.index') }}" style="margin-right: -76px;margin-left: 5px;">
    <button>Back</button>
</a>
<body>



<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>Address</th>
        <th>Email</th>
        <th>PAN</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    <tr>
    @php
        $data = json_decode($data, true);
    @endphp
    <td>{{ $data['id'] }}</td>
    <td>{{ $data['name'] }}</td>
    <td>{{ $data['number'] }}</td>
    <td>{{ $data['address'] }}</td>
    <td>{{ $data['email'] }}</td>
    <td>{{ $data['pan'] }}</td>
    <td>
    <img src="{{ $data['image'] }}" alt="Image" /> 
    </td>
    <td>{{ $data['created_at'] }}</td>
    <td>{{ $data['updated_at'] }}</td>
</tr>

</table>
</body>
</html>
