@extends('layout')

@section('content')
    <section class="row no-gutters">
        @foreach($products as $product)
            <div class="col-md-4">
                <a href="#" class="d-block p-1">
                    <img
                        src="https://placehold.co/400/{{ $colors[array_rand($colors)] }}/white/?text={{ $product->name }}&font=source-sans-pro"
                        class="img-fluid"
                        alt="{{ $product->name }}"
                    />
                </a>
            </div>
        @endforeach
    </section>
@endsection
