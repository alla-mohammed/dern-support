<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">

</head>

<body>
    <x-app-layout>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"  style="padding:50px;">
                    
                     
                    <nav class="nav nav-pills nav-fill w-50 m-auto ">
                        <a class="nav-link" href="/category">Catgories</a>
                        <a class="nav-link active" aria-current="page" href="/services">Services</a>
                        <a href="/requsts" class="nav-link ">All Requests</a>

                    </nav>
                    <div class="mt-5">
                        <h1 class="text-center mt-3 h1 mb-4">Services data</h1>
                        <div class="text-center mt-2 mb-4">
                        <a href="/add-service" class="btn btn-dark ">Add Service</a>
                        </div>
                        <table class="table text-center ">
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>action</th>
                            </tr>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $Catgories[$service->category_id-1]->name }}</td>


                                    <td>
                                        <a class="btn btn-success" href="/service-edit/{{ $service->id }}">update</a>
                                        <a class="btn btn-primary" href="/show-service/{{ $service->id }}">show</a>

                                        <form action="/form-delete/{{ $service->id }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="submit" value="delete" class="btn btn-danger">
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>

</html>
