<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">

<h1 class="text-center h1 mb-4 mt-5">Update Catgory</h1>
<form action="/update-catgory/{{$id}}" method="post" class="w-50 m-auto">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="name"><br><br>
    <input type="text" name="description" class="form-control" placeholder="description"><br><br>
    <input type="submit" value="update" class="btn btn-primary">
    @method('PUT')
</form>