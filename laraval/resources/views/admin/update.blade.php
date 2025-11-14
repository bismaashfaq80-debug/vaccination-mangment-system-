<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <br>
       <h4 class="text-center">USER UPDATE</h4>
        <hr>
    <form action="/updaterecord" method="post">
        @csrf
        <div class="mb-3">

          <label for="name">Full Name</label>

        <input type="hidden" name="contactid" value="{{$data->id}}">

        <input type="text" class="form-control mt-2" id="name" name="name" value="{{$data->name}}" placeholder="Enter your full name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control mt-2" id="email" name="email" value="{{$data->email}}" placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">message</label>
          <input type="text" class="form-control mt-2" id="message" name="message" value="{{$data->message}}" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-info">update</button>
    </form>
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
