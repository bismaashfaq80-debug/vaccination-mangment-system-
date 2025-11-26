@extends('admin.adminlayout')
@section('admincontent')
<br>
<hr>
<form action="/appointmenth" method="post">
    @csrf
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
                Appointment Hospital
            </h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Name</th>
                        <th scope="col" style="text-align: center;">Email</th>
                        <th scope="col" style="text-align: center;">phone number</th>
                        <th scope="col" style="text-align: center;">month</th>
                        <th scope="col" style="text-align: center;">hospital</th>
                        <th scope="col" style="text-align: center;">vaccination</th>
                        <th scope="col" style="text-align: center;">message</th>
                        <th scope="col" style="text-align: center;">rejected</th>
                    </tr>
                </thead>
            </table>
        </div>    
    </div>
@endsection