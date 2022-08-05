@extends('common.layout')
@section('content')

     <h3>students from controller </h3>
     @foreach ($students as $student)
         <div class="card m-2">
           <p>name : {{ $student["name"] }} -- age {{ $student["age"] }}</p>
         </div>
     @endforeach
@endsection