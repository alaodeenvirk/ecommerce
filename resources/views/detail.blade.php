@extends('master')
@section("content")
 <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <img class="detail-img"  src="{{$products['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h2>{{$products['name']}}</h2>
        <h3>price:{{$products['price']}}</h3>
        <h3>detail:{{$products['descryption']}}</h3>
        <h3>detail:{{$products['category']}}</h3>
    <br> <br>
     <form action="/add_to_cart" method ="POST">
          @csrf
     <input type="hidden" name="product_id" value="{{$products['id']}}">
     <button class="btn btn-primary">Add to Cart</button>
     </form>
     
    <br> <br>

    <button class="btn btn-success">Buy now</button>
      </div>
        </div>
    
    </div>
     

   

@endsection


