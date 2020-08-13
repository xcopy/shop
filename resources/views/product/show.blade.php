@extends('layout')

@section('content')
    <figure>
        <img
            src="https://placehold.co/1200x400/{{ $colors[array_rand($colors)] }}/white/?text={{ $product->name }}&font=source-sans-pro"
            class="img-fluid w-100"
            alt="{{ $product->name }}"
        />
    </figure>
    <div class="text-center m-5">
        <div class="display-2">{{ $product->title }}</div>
        <p class="my-5">{{ $product->description }}</p>
        <button class="btn btn-primary btn-lg">Buy {{ $product->name }}</button>
    </div>
@endsection
