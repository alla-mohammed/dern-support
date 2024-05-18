<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <nav class="nav nav-pills nav-fill">
                       <a class="nav-link" href="/category">Catgories</a>
                        <a class="nav-link active" aria-current="page" href="/services">Services</a>
                        <a href="/requsts" class="nav-link ">All Requests</a>
                    </nav>
                    <div class="mt-5">
                        <div class="card m-auto " style="width: 18rem;">
                            <div class="card-header">
                                {{ $services->name }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $services->id }}</li>
                                <li class="list-group-item">{{ $services->description }}</li>
                                <li class="list-group-item">{{ $Catgories[$services->category_id-1]->name }}</li>

                            </ul>
                        </div>
                        
                    </div>
                    <div class="text-center mt-4 mb-4">
                    <a href="/services" class="btn btn-dark ">go back</a>
                    </div>

                </div>
            </div>
        </div>
    </x-app-layout>

</body>

</html>
