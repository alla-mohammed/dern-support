<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user.css') }}" rel="stylesheet">

</head>

<body>
    <x-app-layout>

        <div class="mt-5">
            <div class="text-center">
                <a href="/requsts" class=" btn text-light btn-primary mt-3 ">All requsts</a>
            </div>
            <div class="container my-4">
                <h1 class="text-center mb-4 h1">Categories</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach ($catgories as $catgory)
                        <div class="col">
                            <div class="card h-100 ">
                                <div class="card-body">
                                    <h5 class="card-title h4">{{ $catgory->name }}</h5>
                                    <p class="card-text">{{ $catgory->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container my-4">
                <h1 class="text-center mb-4 h1">Services</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach ($services as $service)
                        <div class="col">
                            <div class="card h-100 ">
                                <div class="card-body">
                                    <h5 class="card-title h4">{{ $service->name }}</h5>
                                    <p class="card-text">{{ $service->description }}</p>
                                    <p class="card-text">{{ $catgories[$service->category_id - 1]->name }}</p>
                                    <a href="/form-request/{{ $service->id }}"
                                        class="card-link btn btn-primary mt-3 ">Request</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

                <footer class=" text-center text-white" style="background-color: #3b5998;">
                    

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
                         <section class="mb-3 pt-2">
                            <!-- Facebook -->
                            <a class="btn text-light " style="background-color: #3b5998;"
                                href="#!" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M8.027 0C3.72 0 0 3.72 0 8.027c0 3.993 2.92 7.303 6.75 7.93v-5.626H4.897V8.027H6.75V6.205c0-1.847 1.097-2.872 2.774-2.872.797 0 1.646.148 1.646.148v1.806h-.928c-.915 0-1.204.572-1.204 1.153v1.406h2.014l-.323 2.304H9.038V15.957C12.826 15.316 16 11.983 16 8.027 16 3.72 12.28 0 8.027 0z" />
                                </svg>
                            </a>

                            <!-- Twitter -->
                            <a class="btn text-light text-light" style="background-color: #55acee;"
                                href="#!" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.001 9.341-9.334 0-.14-.003-.282-.01-.422A6.687 6.687 0 0 0 16 3.542a6.56 6.56 0 0 1-1.889.518 3.302 3.302 0 0 0 1.444-1.817 6.573 6.573 0 0 1-2.084.797A3.28 3.28 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.28 3.28 0 0 0 1.015 4.381A3.27 3.27 0 0 1 .64 6.575v.045a3.284 3.284 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.862.115 3.23 3.23 0 0 1-.615-.057 3.284 3.284 0 0 0 3.066 2.277 6.588 6.588 0 0 1-4.862 1.365A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </a>

                           

                            <!-- Github -->
                            <a class="btn text-light " style="background-color: #333333;"
                                href="#!" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-1.78.39-2.22-.86-2.36-1.65-.09-.23-.48-.96-.82-1.15-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.01.08-2.12 0 0 .67-.22 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.11.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.19 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg>
                            </a>
                        </section>
                        © 2020 Copyright:
                        <a class="text-white" href="https://mdbootstrap.com/">Dern-Support.com</a>
                    </div>
                </footer>


        </div>
    </x-app-layout>
</body>
