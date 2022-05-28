@extends('navbar')

@section('anothers-styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('index-content')
<div class="w-3/6 mx-auto mt-11 ">
    <h3 class="font-light text-2xl">Ultimos autos</h3>
</div>
<div class="w-3/6 mx-auto  relative border-t pt-3">

    <div class=" w-[100%] h-[500px] flex flex-col relative">
    <img src="/img/redcar.jpg" alt="" class="object-fill w-[100%] h-[500px] shadow-black shadow-sm absolute img-carrusel" >
    <img src="/img/greencar.jpg" alt="" class="object-fill w-[100%] h-[500px] shadow-black shadow-sm absolute img-carrusel" >
    <img src="/img/yellowcar.jpg" alt="" class="object-fill w-[100%] h-[500px] shadow-black shadow-sm absolute img-carrusel" >

    </div>

    <div class="w-[100%] flex mt-2 ">
        <button class="w-1/4 bg-slate-50" id="prevbutton">Prev</button>
        <button class=" w-1/4 ml-auto bg-slate-50 " id="nextbutton">Next</button>
    </div>

</div>



<div class="mt-16  w-4/6 mx-auto">
    <h1 class="text-white pl-5 text-2xl font-light bg-slate-500"> 🚗🚙BIENVENIDOS🚐</h1>
    <div class="w-[100%] mb-10 mt-10 flex flex-row space-x-10 justify-center" >
        <div class="w-1/4 h-80 bg-slate-100">
                

            
        </div>
        <div class="w-1/4 h-80 bg-slate-100">
                
        </div>
        <div class="w-1/4 h-80 bg-slate-100">
                
        </div>

        
    </div>

</div>




@endsection


@section('scripts')
    <script src="/js/carrusel.js"></script>
@endsection