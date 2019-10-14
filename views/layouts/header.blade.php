<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- for auto dropdown -->
<style>


  .dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
body{
    background-color: rgba(32, 58, 80, 0.72);   
}
</style>


</head>
<body>
    


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     


<div class=''style="background: rgba(5, 127, 7, 0.51); border-top-style: solid;    
  border-top-right-radius: 50px;">
<nav class="navbar navbar-dark">

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-secondary " type="submit">Search</button>
  </form>
  <form class="form-inline">
    <a href="/sign_up" class="navbar-brand  ">signup</a>
<a href="/sign_up" class="navbar-brand ">Login</a>
</form>
</nav>
</div>
@yield('header_str')