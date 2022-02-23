@extends('Home.Layouts.static')
@section('content')
<!DOCTYPE HTML>
<html>
<head>
</head>
<title> Page One </title>
<h1>Page One</h1>

<body>
Search: <input type="text" id="search" mame="search" value="{{$k}}" ><br>
<p>{{$k}}</p>
<ol>
@for($i=0;$i<count($ani);$i++)
<li>{{$ani[$i]}}</li>
@endfor
</ol>


<ul>
    @foreach ($ani as $a)
    <li>{{$loop->iteration}}{{$a}}</li>
    @endforeach
</ul>

</body>
</html>
@endsection