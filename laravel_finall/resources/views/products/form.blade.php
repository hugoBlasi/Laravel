@extends('layouts.master')

@section('content')

<head>
      <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.css" />
  <title> Paint Aspect </title>
</head>

<div id="all-form">
  <br>
<form  method="POST" action="{{ route('form.create') }}">

@csrf

    <input class="addpic" type="file" name="image">

<br>
 <br>
    <div class="title">
    <label for="title">Titre :</label>
    <input name=title type="text">
   </div>
   <br>
   <div class="slug">
    <label for="slug">Description :</label>
    <input name=slug type="text">
   </div>
   <br>
   <div class="subtitle">
    <label for="subtitle">Sous-titre :</label>
    <textarea name=subtitle type="text" ></textarea>
   </div>
   <br>
   <div class="description">
    <label for="description">Aperçu :</label>
    <textarea name=description type="text" ></textarea>
   </div>
   <br>
   <div class="price">
    <label for="price">Prix :</label>
    <input name=price type="number" >
   </div>
<br>
<button href = "{{ route('products.index') }}"class="publish" type="submit">Publier</button>


</form> 

@endsection

<div>