@extends('layout')

@section('content')
    <div class="container-fluid1">
        <div class="row no-gutters">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-4">
                    <a
                        href="{{ route('product', ['category' => $product->category, 'product' => $product]) }}"
                        class="d-block p-1"
                        title="{{ $product->name }}">
                        <img
                            src="https://placehold.co/800/{{ $colors[array_rand($colors)] }}/white/?text={{ $product->name }}&font=source-sans-pro"
                            class="img-fluid"
                            alt="{{ $product->name }}"
                        />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
