<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
<table class="table table-border shadow text-center table-striped">
<tr>
<th> blog id</th>
<th> blog title</th>
<th> blog </th>
<th>delete blog</th>
<th>edit blog</th>
</tr>
@foreach($blogs as $blog)
<tr>
<td> {{$blog->id}}</td>
<td> {{$blog->blog_title}}</td>
<</td>
<td><a href="/delete/{{$blog->id}}" class="btn btn-danger">delete</a></td>
<td><a href="/edit/{{$blog->id}}" class="btn btn-success">edit</a></td>
</tr>
@endforeach
</table>
</div>
    
</body>
</html>