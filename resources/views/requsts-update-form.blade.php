<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
<h1 class="text-center h1 mb-4">Update Requests</h1>

<form action="/update-requsts/{{$id}}" method="post" class="w-50 m-auto">
    @csrf
    <input type="text" name="customer_name" class="form-control" placeholder="customer_name" required><br><br>
    <input type="text" name="service_id" value="{{$id}}" class="form-control" placeholder="service_id" required><br><br>
    <input type="text" name="description" class="form-control" placeholder="description" required><br><br>
    <input type="text" name="price" class="form-control" placeholder="price" required><br><br>

    <input type="submit" class="btn btn-primary">
    
        @method('PUT')

</form>