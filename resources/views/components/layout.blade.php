<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>{{ $title ?? 'My Website' }}</title>
</head>
<body>
     <nav>
        <x-dlink href="/">Home</x-dlink>
        <x-dlink href="/about">About</x-dlink>
        <x-dlink href="/contact">Contact</x-dlink>
    </nav>
    {{ $slot }}
</body>
</html>
