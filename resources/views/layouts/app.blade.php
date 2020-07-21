<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Todo List</title>
</head>
<body>

  @include('inc.navbar')

  <div class="container">
    @include('inc.messages')
    @yield('content')
  </div>

  <footer class="text-center mt-4 mb-5">
    <small class="font-weight-lighter">&copy; TodoList 2020. Powered by Amkam.</small>
  </footer>

  
</body>
</html>