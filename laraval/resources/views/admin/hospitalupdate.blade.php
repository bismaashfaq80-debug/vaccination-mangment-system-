@extends('admin.adminlayout')
@section('admincontent')

<div class="body-wrapper-inner">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<div class="container">
    <h3>Hospitals Available</h3>
      <form action="/hospitalupdate" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="hospitalname" placeholder="Enter hospital name " class="form-control">
        <br>
         <input type="text" name="location" placeholder="location" class="form-control">
        <br>
        <input type="file" name="hospitalfile" class="form-control">
        <br>
        <button type="submit" class="btn btn-dark">submit</button>
      </form>
    
</div>
</div>
@endsection