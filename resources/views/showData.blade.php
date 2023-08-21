<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .student-info {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }
        .student-info span {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <h1>User List</h1>
    @foreach ($students as $student)
        <div class="student-info">
            <span>Student Name:</span> {{$student->name }}<br>
            <span>Student Age:</span> {{$student->age }}<br>
            <span>Student City:</span> {{$student->City }}
        </div>
    @endforeach
</body>

</html>