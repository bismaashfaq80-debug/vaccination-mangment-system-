@extends('hospital.hlayout')
@section('hospital')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <body>
        <div class="container">
        <h3 class="text-center">Add vaccine</h3>
        <hr>
        <form action="/addvaccine" method="post">
            @csrf
            <input type="text" name="vaccinename" class="form-control" placeholder="Enter vaccine Name">
            <br>
            <br>
            <select name="hospitallist" id="">
                @foreach($hospitalupload as $h)
                <option value="{{$h->id}}">{{$h->hospitalname}}</option>

                @endforeach
            </select>
            <button type="submit" class="btn btn-dark">Add vaccine</button>
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
</html>
<br>
<br>
<br>
@endsection
