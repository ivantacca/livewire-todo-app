<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To-Do</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;300;600&display=swap" rel="stylesheet">


        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Hanken Grotesk', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body class="flex justify-center pt-10">
        <div class="w-full max-w-2xl px-7">
            <livewire:todo />
        <div>

        @livewireScripts
    </body>
</html>
