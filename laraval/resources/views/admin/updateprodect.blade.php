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
    <h3>Admin - Product Uploading</h3>
    <div
        class="table-responsive"
    >
      <form action="/submitprodect" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="productname" placeholder="Enter Product Name" class="form-control">
        <br>
        <input type="number" name="productprice" placeholder="Enter Product Price" class="form-control">
        <br>
        <input type="number" name="productstock" class="form-control" placeholder="Stock Available">
        <br>
        <input type="file" name="productfile" class="form-control">
        <br>
        <button type="submit" class="btn btn-dark">Upload product</button>
      </form>
    </div>
    
</div>
</div>
@endsection