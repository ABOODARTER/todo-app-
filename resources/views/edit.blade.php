@extends('layout')
@section('title','edit')
@section('content')
<form action="/todo/{{$todo->id}}" method="post">
    @csrf
<div class="card jsutify-content ">
    <div class="card-header"><h1>edti todo </h1> </div>
    <div class="card-body">
        <!--// لعرض الاخطاء -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
     <!--   //نهاية قسم عرض الاخطاء  -->
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="enter the title" name="todotitle" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="enter the comint "name="todocomint" value="{{$todo->comint }}">
        </div>
    {{--  // طريقة ثانية لعرض الخطأ ولكن هذه طريقة لكل حقل على حدى و تعمل باعطاء كلاس معين للحقل 
            @error('todocomint')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    --}}
        <div class="form-group">
            <textarea class="form-control" rows="1" name="tododescreption" > {{$todo->descreption }} </textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success  ">update </button>
        </div>
    </div>
    </form>
@endsection