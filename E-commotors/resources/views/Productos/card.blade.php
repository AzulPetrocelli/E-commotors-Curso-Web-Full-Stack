@include('header')

<section class="d-flex mt-5 mx-2 pt-5 gap-3 container-card-view">
    <div class="container-images-card-view">
        <img src="{{ asset('images/' . $moto->foto_moto) }}" class="card-image" alt="{{ $moto->nombre }}">
    </div>
    <div>
        <h1 class="jaro fs-1">{{ $moto->nombre }}</h1>
        <h2 class="jaro fs-2">{{ $moto->descripcion_node }}</h2>
        <p class="varela">{{ $moto->knowledge_node }}</p>
        <p class="jaro fs-2">Precio ${{ $moto->precio_base }}</p>
        <div class="d-flex justify-content-end">
            <a href="{{ route('message') }}" class="boton-principal m-2">Enviar Mensaje</a>
            <a href="#" class="boton-principal m-2">Comprar</a>
        </div>
    </div>
</section>

@include('footer')
