<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
<h1 class="text-center h1 mb-4">Add Catgory</h1>

<form action="/add-catgory" method="post" class="w-50 m-auto">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="name"><br><br>
    <input type="text" name="description" class="form-control" placeholder="description"><br><br>
    <input type="submit" class="btn btn-primary">

</form>