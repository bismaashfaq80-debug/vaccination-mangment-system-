@extends('admin.adminlayout')
@section('admincontent')
<br>
    <body>
        <div class="container">
        <h3 class="text-center">
            Add Hospital</h3>
        <hr>
        <br>
        <form action="/addhospital" method="post">
            @csrf
            <input type="text" name="hospitalname" class="form-control" placeholder="Enter Hospital Name">
            <br>
            <button type="submit" class="btn btn-dark">Add Hospital</button>
        </form>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
    <br>
    <br>
    <br>

@endsection
