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
                    welcome <b style="color: greenyellow">{{ auth()->user()->name }} </b>your premission is <b
                        style="color: red">{{ auth()->user()->premission }}</b>
                </div>
                <nav class="navbar navbar-light bg-light">


                    <form class="form-inline" method="GET" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" name='query' type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>


                </nav>
            </div>
        </div>
    </div>
</x-app-layout>
