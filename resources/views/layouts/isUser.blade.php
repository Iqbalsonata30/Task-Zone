<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body>
    {{ $slot }}
    <script src="script.js"></script>
</body>

</html>
