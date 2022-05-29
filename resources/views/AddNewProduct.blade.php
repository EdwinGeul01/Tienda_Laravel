@extends('navbar')

@section('anothers-styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('index-content')
<div class="w-3/6 mx-auto mt-11 ">
    <h3 class="font-light text-2xl">FORMULARIO</h3>
</div>
<div class="w-3/6 mx-auto  relative border-t pt-3">
    <form action="{{route('add')}}" method="POST">
        @csrf

        @if(session('success'))
            <h6> Datos ingresados correctamente  </h6>
        @endif

        @error('error')
            <h6> Ha ocurrido un fallo {{$message }}</h6>
        @enderror
            

        <span>name</span>
        <input type="text" class="bg-slate-200 h-10 w-[100%] rounded-lg px-3 text-slate-800" name="name">
        <span>description </span>
        <input type="text" class="bg-slate-200 h-10 w-[100%] rounded-lg px-3 text-slate-800" name="description">
        <span>img url</span>
        <input type="text" class="bg-slate-200 h-10 w-[100%] rounded-lg px-3 text-slate-800" name="imgurl">

        <input type="submit" value="INGRESAR DATOS" class="bg-blue-900 text-white px-5 mt-5 h-12" id="btn_data_submit">

    </form>

        
    </div>

</div>




@endsection


@section('scripts')
    <script src="/js/carrusel.js"></script>
@endsection