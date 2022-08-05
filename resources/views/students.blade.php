@extends('common.layout')
@section('content')

     <h3>student management </h3>

     <div class="container-fluid">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
          
            <form action="/my-students" method="POST">
              @csrf
              <div class="mb-3">
                <label for="pwd" class="form-label">Name:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
              </div>
              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3">
                <label for="pwd" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
              </div>
    
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
     </div>
     @foreach ($students as $student)
         <div class="card m-2">
           <p>name : {{ $student["name"] }} -- age {{ $student["age"] }}</p>
         </div>
     @endforeach
@endsection