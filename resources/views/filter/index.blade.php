<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @yield('css')
</head>
<body>
    {{-- Filter Input fields --}}
    @include('filter._fields')

    {{-- Filter list --}}
    @foreach ($listings as $listing)
        <div class="row">
            <div class="card col-12">
                <p>{{ $listing->name }}</p>
                <p>{{ $listing->summary }}</p>
                <p>${{ $listing->price }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>