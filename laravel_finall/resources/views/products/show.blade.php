
@extends('layouts.master')

@section('content')
        <div class="col-md-12">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5 class="mb-0">{{ $product ->title }}</h5>
              <div class="mb-1 text-muted"></div>
              <p class="mb-auto">{{ $product ->description }}</p>
              <strong class="mb-auto">{{ $product ->price }}$</strong>

              <form action="#" method="POST">
                <button type="button" class="btn btn-dark" onClick="buy('{{$product -> id}}','{{$product -> title}}','{{$product -> price}}')">Ajouter au panier</button>
                </form>
                <br>
                @if (auth()->user()->admin == 1)
              <a href="{{ route('supre', ['id' => $product->id]) }}"> <button type="submit" class="btn btn-dark">Suprimer</button></a> 
                @endif
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src ="{{ asset('image/'. $product ->image) }}" width="200px" height="250px">
            </div>
          </div>
        </div>
        <script src="{{asset('js/cart.js')}}"></script>
@endsection