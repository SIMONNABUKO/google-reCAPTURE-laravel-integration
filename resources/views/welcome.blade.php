<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h3>Register Form</h3>
                <form action="{{route('register')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        <span class="help-block">
                            <strong class="text-danger">@error('name') {{$message}} @enderror</strong>
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        <span class="help-block">
                            <strong class="text-danger">@error('email') {{$message}} @enderror</strong>
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                        <span class="help-block">
                            <strong class="text-danger">@error('password') {{$message}} @enderror</strong>
                        </span>
                    </div><br>
                    {!! NoCaptcha::display() !!}

                    <span class="help-block">
                        <strong class="text-danger">@error('g-recaptcha-response') {{$message}} @enderror</strong>
                    </span><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    {!! NoCaptcha::renderJs() !!}
</body>

</html>