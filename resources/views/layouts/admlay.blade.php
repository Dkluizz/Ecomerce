<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!--Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"> 

<title>LuckyShopp</title>
</head>

<body style="background-image: url('/storage/images/bg-s.jpg');">
<div>
 <nav class="navbar navbar-expand-lg bg-light px-1 ">
   <div class="container-fluid">
     <a class="navbar-brand" href="{{route('users.index')}}"><img src="{{url('/storage/images/logo.png')}}" alt="LuckyShopp"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{route('products.create')}}">Cadastrar Produtos</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{route('categories.create')}}">Cadastrar Categorias</a>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="{{route('home')}}">Pagina Inicial</a>
         </li>
                
       </ul>
       <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Ex: Mouse" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Buscar</button>
       </form>
     </div>
   </div>
 </nav>
</div>

<div>
 @yield('content')
</div>

</body>

<footer>
@yield('footer')
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>