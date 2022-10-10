@extends('layouts.app')

@section('content')
<style>
   body{
    background:url('https://wallpapercave.com/wp/wp7728194.jpg') no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size: cover;
    background-size: cover;
} </style>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive">
                

                    <table class="table table-bordered table-dark">
  <thead class="thead-dark">
    <tr class= "table-dark">
      
      <th scope="col">Details Requested</th>
      <th scope="col">Details Given</th>
     
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th>Name</th>
      <td>{{ Auth::user()->name }}</td>
      
    </tr>
    <br>
    <tr class="table-light">
      <th>Employee ID</th>
      <td>{{ Auth::user()->employee_id }}</td>
      
    </tr>
    <br>
    <tr class="table-light">
      <th>Email</th>
      <td>{{ Auth::user()->email }}</td>
      
    </tr>
    <tr class="table-light">
      <th>Age</th>
      <td>{{ Auth::user()->age }}</td>
      
    </tr class="table-light">
    <tr class="table-light">
      <th>Date Of Birth</th>
      <td>{{ Auth::user()->dob }}</td>
      
    </tr>
    <tr class="table-light">
      <th>Stage</th>
      <td>{{ Auth::user()->stage }}</td>
      
    </tr>
    <tr class="table-light">
      <th>City</th>
      <td>{{ Auth::user()->city }}</td>
      
    </tr>
    <tr class="table-light">
      <th>Education</th>
      <td>{{ Auth::user()->education }}</td>
      
    </tr>
    <tr class="table-light">
      <th>Degree Information</th>
      <td>{{ Auth::user()->degree }}</td>
      
    </tr>
    <tr class="table-light">
      <th>Experience</th>
      <td>{{ Auth::user()->experience }}</td>
      
    </tr>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
