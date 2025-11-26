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
              TRASHED RECORDS FROM CONTACT FORM
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
                        <th scope="col" style="text-align: center;">restore</th>
                        <th scope="col" style="text-align: center;">Delete</th>
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
                        
                        <form action="/restore/{{$item->id}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success mx-2">Restore records</button>
                        </form>
                    </td>
                    <td>
                        <form action="/delete/{{$item->id}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn mx-2">Delete records Permanently</button>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>    
    </div>
@endsection