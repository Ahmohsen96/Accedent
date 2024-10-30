<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Accident Investigation Report</title> --}}
    <!-- Include Bootstrap CSS or any other CSS framework -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <a class="navbar-brand" href="#">Dania Air Control System Factory</a> --}}
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Include Bootstrap JS and jQuery (Optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @livewireScripts
</body>
</html>
