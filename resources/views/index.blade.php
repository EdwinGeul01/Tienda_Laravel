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
    <h1 class="text-white pl-5 text-2xl font-light bg-slate-500"> 🚗🚙BIENVENIDOS ( ultimos 6 productos )🚐</h1>
    <div class="w-4/5 mb-10  flex flex-row  flex-wrap mx-auto " >
    
    
 @php
     $a = 0;
 @endphp

@foreach ($products as $product)
    
@if ($a >= 6 )
@break
@endif

<div class="w-[30%] h-40 bg-slate-100 relative mt-3 ml-2 flex flex-col justify-center ">
    <a href="#" class="img-link-product">
        <p class="z-[1] text-black text-center text-3xl select-none" >{{ $product->name}}</p>
        <img src="{{ $product->imgurl}}" alt="" class="object-fill w-[100%] h-[100%] shadow-black shadow-sm absolute z-0  top-0 img-product" >
    
    </a>
</div>

@php
$a += 1;
@endphp  

@endforeach    
  




        {{-- <div class="w-1/4 h-40 bg-slate-100">
                
        </div> --}}

        
    </div>

</div>




@endsection


@section('scripts')
    <script src="/js/carrusel.js"></script>
@endsection