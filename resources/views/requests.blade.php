<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <x-app-layout>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                    <div class="mt-5">
                        <h1 class="text-center mt-3 h1 mb-4">Requests data</h1>
                        <div class="text-center">
                        <a href="/home" class="btn btn-dark ">back</a>
                        </div>
                        <div class="text-center mt-2 mb-4">
                        </div>
                        <table class="table text-center">
                            <tr>
                                <th>id</th>
                                <th>customer_name</th>
                                <th>Description</th>
                                <th>service_id</th>
                                <th>state</th>
                                <th>action</th>
                            </tr>

                            @foreach ($requsts as $requst)
                                <tr>
                                    <td>{{ $requst->id }}</td>
                                    <td>{{ $requst->customer_name }}</td>
                                    <td>{{ $requst->description }}</td>
                                    <td>{{ $requst->service_id }}</td>
                                    <td>{{ $requst->state }}</td>



                                    <td>
                                        <a class="btn btn-success" href="/requsts-update-form/{{ $requst->id }}">update</a>

                                        <form action="/requsts-delete/{{ $requst->id }}" method="post" class="d-inline">
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
