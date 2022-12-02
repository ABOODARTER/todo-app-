@extends('layout')
@section('title','show')
@section('content')
<div class="container">
<h1 class="mt-5 text-center"> {{  $showtodo->title }}</h1>
<div class="card ">
    <div class="card-header">
        <span class="badge badge-warning float-right"> 
        {{ boolval($showtodo->completed)?'completed':'non completed' }}   
        </span>
        todo {{$showtodo->id}}
    </div>  
    
    <div class="card-body">
        <h5 class="card-title text-success"> descreption:</h5>
        <p class="card-text">{{ $showtodo->descreption}}</p>

        <h5 class="card-title text-success">created at :</h5>
        <p class="card-text">{{ $showtodo->created_at}}</p>

        <h5 class="card-title text-success">updated at :</h5>
        <p class="card-text">{{ $showtodo->updated_at}}</p>
    <!--   <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
</div> 
</div>
@endsection