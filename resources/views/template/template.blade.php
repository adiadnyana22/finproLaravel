<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  Import Tailwind CSS  --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{--  Import Boxicons  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        #scroll-home::-webkit-scrollbar {
            background-color: transparent;
            height: 5px;
        }

        #scroll-home::-webkit-scrollbar-button {
            display: none;
        }

        #scroll-home::-webkit-scrollbar-thumb {
            background-color: rgb(186, 186, 192, 0.5);
            border-radius: 16px;
        }

        #scroll-home::-webkit-scrollbar-track {
            background-color: transparent;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    @include('template.navbar')
    <main class="pt-20 h-screen">
        <div class="container mx-auto h-full">
            @yield('content')
        </div>
    </main>
</body>
</html>
