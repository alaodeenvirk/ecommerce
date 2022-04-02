@extends('master')
@section("content")
 
 <div class="custom-products">
 
    
    <div class="col-sm-10">
    
    
    <div class="wrapper-trending">
      <h2>Cart list Products</h2>
      <a class="btn btn-success" href="ordernow">Order now</a>
      @foreach($products as $item)
       <div class="row searched-item cart-list-devider" >
       <div class="col-sm-3">
       <a href="detail/{{$item->id}}">
       <img class="trending-image" src="{{$item->gallery}}">
       <div class="">
       <h2>{{$item->name}}</h3>
      <h2>{{$item->price}}</h2>
      <h5>{{$item->descryption}}</h3>
       <div class="col-sm-3">
       <a href="removecart/{{$item->cart_id}}" class="btn btn-warning">remove to cart</button>
       </div>
      
        </div>
       
       </a>  
       </div>
       </div>
            
      @endforeach
    
    
    </div>
  
    </div>
    @endsection
    

  
    
   
     
 

   







    
    
      
      
    
     
        
    
           
 
   
    

  
    
    
     
 
<!-- 
      <img class="trending-image" src="{{$item->gallery}}">
      <h2>{{$item->name}}</h3>
      <h2>{{$item->price}}</h2>
      <h5>{{$item->descryption}}</h3> -->

