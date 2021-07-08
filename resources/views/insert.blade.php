<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="text-center"> Add blogs</h1>
<form method="POST" action="/store">
@csrf
<div class="mb-3">
<label><b> Blog title:</b></label>
<input type="text" name="title" class="form-control">
<br>
<span style="color: red"> @error('title'){{$message}}@enderror</span>
<span style="color:red">
<br>
</div>
<div class="mb-3">
<label><b> Blog:</b></label>
<input type="text" name="blog" class="form-control">
<br>
<span style="color: red"> @error('blog'){{$message}}@enderror </span>
<br>
</div>
<input type="submit" name="insert" value="insert" class="btn btn-primary">


</form>

</body>
</html>