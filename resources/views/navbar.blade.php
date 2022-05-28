
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('anothers-styles')
    <title>Document</title>
</head>
<body> 
    <nav class="h-[70px] bg-blue-900 ">
        <div class="w-5/6 mx-auto h-[100%] flex flex-row">
            <div class="w-2/6 text-white flex flex-col justify-center items-center h-[100%] bg-blue-800">
                <h1 class="font-light text-3xl">TIENDA NORMAL</h1>
            </div>
            <div class="w-3/6 text-white justify-end h-[100%] flex flex-row space-x-8 items-center">
                <a href="" class="font-light text-[2vh]">inicio</a>
                <a href="" class="font-light text-[2vh]">productos</a>
                <a href="" class="font-light text-[2vh]">contactanos</a>
            </div>
        </div>

    </nav>

    @yield('index-content')
</body>

@yield('scripts')

</html>