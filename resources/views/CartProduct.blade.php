@extends('Master')
@section('content')

    <div class="container ">

        <div class="row">
            <h1>
                Cart List
            </h1>


            <div class="col-sm-10">
                <a class="btn btn-success" href="/OrderProduct">Order</a>
                <br>
                <br>
                @foreach($CartProducts as $item)
                    <div class="row Searched-items Cart-list-devider">
                        <div class="col-sm-3">
                            <a href="ProductDetail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallary}}">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <form method="post" action="/RemoveFromCart">
                                @csrf
                                <input type="hidden" name="HiddenCartProductId" value="{{$item->cart_id}}">
                                <button class="btn btn-info" name="RemoveFromCartButton">Remove From Cart</button>
                            </form>
                        </div>
                    </div>
                <br>
                <br>

                @endforeach
                <a class="btn btn-success" href="/OrderProduct">Order</a>
            </div>


        </div>

    </div>

@endsection
