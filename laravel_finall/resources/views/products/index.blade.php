@extends('layouts.master')

@section('content')
      @foreach ($products as $product)
        
        <div class="col-md-6" id = "boite">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5 class="mb-0">{{ $product ->title }}</h5>
              <div class="mb-1 text-muted"></div>
              <p class="mb-auto">{{ $product ->subtitle }}</p>
              <strong class="mb-auto">{{ $product ->price }}$</strong>
              <a href="{{ route('products.show', $product->slug) }}" class="stretched-link btn btn-primary">Voir l'article</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src ="{{ asset('image/'. $product ->image) }}" width="200px" height="250px">
            </div>
          </div>
        </div>
      @endforeach
@endsection