
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">{{ Auth::user()->name }}</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/" style =font-size :50px>Brique a Braque</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      @if (auth()->user()->admin == 1)
      <div class="oui"><a href="{{ route('form') }}">Ajouter des produits</a></div>
      @endif
      <div class="non"><a href="{{ route('panier') }}">Panier</a></div><div id="cart_logo">(0)</div>
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link class="oui" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </x-dropdown-link>
                </form>
      </div>
    </div>
  </header>

  <p>

  <div class="row mb-2">

    @yield('content')

  </div>
</div>
  <script src="{{asset('js/cart.js')}}"></script>
</body>
</html>
