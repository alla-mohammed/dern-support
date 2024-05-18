<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
<h1 class="text-center h1 mb-4">Add Service</h1>

<form action="/add-service" method="post" class="w-50 m-auto">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="name" required><br><br>
    <input type="text" name="description" class="form-control" placeholder="description" required><br><br>
    <input type="text" name="category_id" class="form-control" placeholder="category_id" required><br><br>
    <input type="submit" class="btn btn-primary">

</form>