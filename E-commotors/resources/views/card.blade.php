@include('header')

<section class="container-card-view">
    <div class="container-images-card-view">
        <img src="{{ asset('images/' . $moto->foto_moto) }}" class="card-image img-fluid" alt="{{ $moto->nombre }}">
    </div>
    <div class="p-2 w-50">
        <h1 class="jaro fs-1">{{ $moto->nombre }}</h1>
        <h2 class="jaro fs-2">Descripcion</h2>
        <p class="varela">
            {{ $moto->descripcion_moto }}
        </p>
        <p class="jaro fs-2">Precio ${{ $moto->precio_moto }}</p>
        <div class="d-flex justify-content-end">
            <a href="{{ route('message') }}" class="boton-principal m-2">Enviar Mensaje</a>
            <a href="#" class="boton-principal m-2">Comprar</a>
        </div>
    </div>
</section>

@include('footer')
