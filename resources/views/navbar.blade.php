
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
        <div class="lg:w-[100%] xl:w-5/6 mx-auto h-[100%] flex flex-row">
            <div class="w-2/6 text-white flex flex-col justify-center items-center h-[100%] bg-blue-800">
                <h1 class="font-light  text-[1vh] sm:text-[2vh] md:text-[3vh]">TIENDA NORMAL</h1>
            </div>
            <div class="md:w-4/6 xl:w-3/6 mr-5  text-white justify-end h-[100%] flex flex-row space-x-8 items-center  text-[1vh] sm:text-[1.2vh] md:text-[2vh] ">
                <a href="/" class="font-light ">inicio</a>
                <a href="" class="font-light">productos</a>
                <a href="/addproduct" class="font-light ">Agregar  productos</a>
                <a href="/addproduct" class="font-light ">Contactanos</a>

            </div>
        </div>

    </nav>

    @yield('index-content')
</body>

@yield('scripts')

</html>