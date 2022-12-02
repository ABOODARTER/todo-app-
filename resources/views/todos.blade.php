@extends('layout')
@section('title','todos')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width: 80% ">
    <!-- the title -->
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 ">
                <h1>todo </h1>  
                </div>            
    <!--  end the title -->

    <!--  begin the contant of  bage -->
        <div class="mt-2  dark:bg-gray-200   overflow-hidden ">
                <p> those are our todos </p>
        </div>
        <!-- table to show todos  -->
        <table class="table" >
            <!-- header for table  -->
            <tr class="table-primary"> 
                <th> id </th>
                <th> title </th>
                <th> comint </th>
                <th> descreption </th>
                <th> compleat statue </th>
            </tr>
            <!-- for loop for get info from database-->
            <!--      {{ $counter = 1 }}  -->
            @foreach ($todos as $todo) 
            <tr > 
                <td> {{ $counter   }}        </td>
                <td> {{ $todo->title}}  </td>
                <td> {{ $todo->comint}}       </td>
                <td> {{ $todo->descreption  }}      </td>    
                @if ($todo->completed)
                <td> <a href="{{ Route('todos.compleat_statue',[ 'id'=>$todo->id ]) }}">    <button type="button" class="btn btn-outline-success"> completed </button>                    
                @else
                <td> <a href="{{ Route('todos.compleat_statue',[ 'id'=>$todo->id ]) }}"> <button type="button" class="btn btn-outline-danger"> not-completed </button>
                @endif
            </tr>
       <!--     {{ $counter = ($counter + 1) ;}}  --> 
            @endforeach
        </table> 
    <!--  end the contant of bage -->
</div>
@endsection
