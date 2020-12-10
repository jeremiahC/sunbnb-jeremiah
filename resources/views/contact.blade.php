<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- There is html validation also --}}
    <div class="container">
        <div class="row card p-4 mt-5">
            <div class="co-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
hello
                        </ul>
                    </div>
                @endif
            </div>
            <form action="/user/store" method="POST" class="form col-12">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id=name"" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone_no">Phone no.:</label>
                    <input type="text" name="phone_no" id="phone_no" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS Should be loaded first because priority is user can see the design and colors first --}}
    {{-- Also css is light so it can load faster --}}
    <link rel="stylesheet" href="">
</head>
<body>
    {{-- Browser then will load the elements --}}
    <div class="">
        <p></p>
    </div>
    
    {{-- Usually javascript is loaded last because most script have logic and it's more heavier to process compared to css so that's why it's last --}}
    <script src=""></script>
</body>
</html>
