<!DOCTYPE HTML>
<html>
<head>
</head>
<title> List </title>
<h1>Student List</h1>

<body>

<table border="2">
<tr><th>ID</th><th>Serial</th><th>Department</th></tr>
@foreach($student as $s)
<tr><td text-align="center">{{$s->id}}</td><td>{{$s->Name}}</td><td>{{$s->Department}}</td></tr>
    @endforeach
</table>



 


</body>
</html>