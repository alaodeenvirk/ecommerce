@extends('master')
@section("content")
 
 <div class="searched-products">
 <div class="container custom-product">
    
    <div class="col-sm-4">
    <a href="#">Filter</a>
    <div class="col-sm-4">
    <div class="wrapper-trending">
      <h2>Searched Products</h2>
      @foreach($products as $item)
       <div class="searched-item" >
       <a href="detail/{{$item['id']}}">
       <img class="trending-image" src="{{$item['gallery']}}">
       <div class="">
      <h2>{{$item['name']}}</h3>
      <h2>{{$item['price']}}</h2>
      <h5>{{$item['descryption']}}</h3>
      
        </div>
       </div>
       </a>  
              
            </div>
            
      @endforeach
      </div>
    
    </div>
  
 
   
    </div>

  
    
    </div>
     
 </div>

   

@endsection




