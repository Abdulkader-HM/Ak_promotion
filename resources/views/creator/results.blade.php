{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
<x-app-layout>

    <center>
        <h1>Creator page</h1>
    </center>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    welcome {{ auth()->user()->name }} as a {{ auth()->user()->premission }}
                </div>
                <nav class="navbar navbar-light bg-light">


                    <form class="form-inline" method="GET" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" name='query' type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>


                </nav>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">results</th>
                            <th scope="col">submit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <h2 style="color: red">Search Results</h2>
                        @php
                            $i = 1;
                        @endphp

                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $product->products }}</td>
                                    <td>
                                        <form method="GET">
                                            <button type="submit" name='chose' class="btn btn-success">chose</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>No products found.</p>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
