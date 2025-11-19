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
            <h3 style="text-align: center;">
              HOSPITAL RECORDS
            </h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">ID</th>
                        <th scope="col" style="text-align: center;">Name</th>
                        <th scope="col" style="text-align: center;">Email</th>
                        <th scope="col" style="text-align: center;">Subject</th>
                        <th scope="col" style="text-align: center;">Message</th>
                        <th scope="col" style="text-align: center;">Delete</th>
                        <th scope="col" style="text-align: center;">Update</th>
                        <th scope="col" style="text-align: center;">Trash</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            <form action="/delete/{{$item->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete records</button>
                            </form>
                        </td>

                        <td>
                            <form action="/update/{{$item->id}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-primary">Update records</button>
                            </form>
                        </td>
                        <td>
                            <form action="/trash/{{$item->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-info">Trash records</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>    
    </div>
@endsection 