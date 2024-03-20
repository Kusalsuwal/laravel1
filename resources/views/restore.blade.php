<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restored Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

    </style>
</head>
<body>
<a href="{{ route('form.index') }}" style="margin-right: -76px;margin-left: 250px;margin-top: 50px">
    <button>Back</button></a>
<h1>Restored Data</h1>


<table>

    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>Address</th>
        <th>Email</th>
        <th>PAN</th>
        <th>Deleted At</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($deletedData as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->number }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->pan }}</td>
            <td>{{ $data->deleted_at }}</td>
            <td>
                <form method="POST" action="{{ route('form.restores', $data->id) }}">
                    @csrf
                    <button type="submit" class="restore-button">Restore</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
