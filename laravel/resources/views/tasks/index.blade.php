<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>Task Management</h1>
    <hr>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>dedline</th>
            <th>status</th>
            <th>action</th>
        </tr>

        @foreach ($tasks as $t)
            <tr>
                {{-- auto increament mnggunakan $loop->iteration --}}
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t['name']}}</td>
                <td>{{ $t['dedline']}}</td>
                <td>{{ $t['status']}}</td>
                <td>
                    <a href="/task/{{ $t['id'] }}" class="btn btn-info">View</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
