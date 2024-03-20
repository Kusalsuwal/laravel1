<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration List</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<style>
    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .close-btn {
        float: right;
        cursor: pointer;
        font-weight: bold;
    }
</style>

@if (session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
        <span class="close-btn" onclick="closeAlert()">&times;</span>
    </div>
@endif

<h1>Registration List</h1>

<a href="{{ route('test') }}" style="margin-right: -76px;margin-left: 525px;">
    <button>Create</button>
</a>
<a href="{{ route('form.restore') }}" style="margin-right: 1px; margin-left: -50px;">
    <button>Restore</button>
</a>

<table border="1">
    <thead>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Number</th>
        <th>Address</th>
        <th>Email</th>
        <th>Pan</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($test as $key=> $co)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $co->name }}</td>
            <td>{{$co->number}}</td>
            <td>{{$co->address}}</td>
            <td>{{$co->email}}</td>
            <td>{{$co->pan}}</td>
            <td>
                <a href="{{ route('form.edit', $co->id) }}" style="background-color: yellow; padding: -1px 10px;">Edit</a>
                <a href="{{ route('form.view', $co->id) }}" style="background-color: blue; padding: -1px 10px;">View</a>
                <a href="{{ route('form.delete', $co->id) }}" style="background-color: Red; padding: -1px 10px;" onclick="deleteConfirmation(event)">Delete</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

<script src="/bootstrap-5.3.3-dist/js/bootstrap.js" ></script>

<script>

    function deleteConfirmation(event) {
        event.preventDefault();
        const deleteUrl = event.target.href;


        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            }
        });
    }

    function closeAlert() {
        document.getElementById("successMessage").style.display = "none";
    }
</script>
</body>
</html>
