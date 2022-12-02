@extends('layout')
@section('title','Home')
@section('content')
    

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="mx-auto" style="width:50%;">
            <!--countener for card -->
                <div  style="width:100%">
                    <div class="card " style="width:100%">
                        <h1 class="card-header text-center bg-secondary ">all todos </h1>
                        @if ( session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success'); }}
                        </div>
                        @endif

                        <div class="card-body" style="width:100%">
                            <div class="card" style="width:100%">
                            <ul class="list-group list-group-flush">
                                @forelse($todos_list as $todo )
                                <li class="list-group-item"> 
                                    <div class="float-left">
                                    <!-- title of todo -->
                                    {{ $todo->title  }} 
                                    </div>
                                    <!-- icon dev -->
                                    <div  class="float-right">
                                    <!-- delet icons -->
                                    <a href=" {{ Route('todos.delet', ['id' =>$todo->id ])}} ">
                                        <svg class="float-right red-font mr- 2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </a>
                                    <!-- edit icon-->
                                    <a href=" {{ route('todos.edit', ['id' =>$todo->id])}} ">
                                        <svg class="float-right blue-font mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                    <!-- view icon-->
                                    <a href="{{ route('todos.show', ['id' =>$todo->id ])}}">
                                        <svg class=" float-right green-font  mr-2 " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!-- end do icon dev -->
                                </li> 
                                @empty
                                <li class="list-group-item"> 
                                    <h3 class="float-left"> no todos </h3>
                                    <a href="{{ Route('todos.create') }}">
                                    <div class="fs-2 mt-2  float-right red-font text-center">  
                                    <h5 class="float-left pr-1"> Add new</h5> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle float-right mt-1 text-center" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>  
                                    </div>
                                    </a>
                                </li>
                                @endforelse
                            <li class="list-group-item"> Don't postpone today's work for tomorrow</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection