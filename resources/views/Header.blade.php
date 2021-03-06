<?php

use App\Http\Controllers\productController;
$TotalCart = 0;
if (Session::has('User')){
    $TotalCart = productController::CartItem();
}

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">E-Commerce</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"> Home </a></li>
                <li class=""><a href="ShowMyOrders"> Orders </a></li>

            </ul>
            <form action="/SearchProduct" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="SearchQuery" class="search-box form-control" placeholder="Search">
                </div>
                <button type="submit" name="SearchSubmit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/ShowCartProduct">Show Cart ({{$TotalCart}})</a></li>

                @if(Session::has('User'))

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       {{Session::get('User')['Name']}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Logout">Logout</a></li>
                    </ul>
                </li>

                @else
                    <li><a href="/Login">Login</a></li>
                    <li><a href="/UserRegistration">Register</a></li>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
