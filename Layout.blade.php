<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta charset="UTF-8">
    <link href="/public/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    @yield('header')

</head>
<body>
<div class="container">
    @yield('content')
</div>

    @yield('footer')

    @yield('script')
</body>
</html>
