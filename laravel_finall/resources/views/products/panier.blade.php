@extends('layouts.master')

@section('content')
<head>
      <meta charset="UTF-8">
    <link rel="stylesheet" href="css/panier.css" />

</head>
        <strong class="titre">PANIER</strong>

<table id = "cart_logoo" >        
    <tr>
     <th>ID</th>
     <th>Titre</th>
     <th>Prix</th>
     <th>Quantitée</th>
    </tr>
</table>

<tbody>
    <script src="{{asset('js/cart.js')}}"></script>
    <script>display_cart_name();</script>
</tbody>

</table>
<div class="boutonnn">
    <button type="submit" class="btn btn-dark">Ajouter au panier</button>
</div>
@endsection