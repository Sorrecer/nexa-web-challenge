<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beanie Coffee</title>
    @vite('resources/css/app.css') <!-- Ensure Tailwind is set -->
</head>

<body class="bg-white text-gray-800 font-sans">

    {{-- Navigation --}}
    @include('sections.nav')

    {{-- Home Section --}}
    @include('sections.home')

    {{-- Shop Section --}}
    @include('sections.shop')

    {{-- Blogs Section --}}
    @include('sections.blogs')

    {{-- Pages Section --}}
    @include('sections.pages')

    {{-- Footer --}}
    @include('sections.footer')

</body>

</html>