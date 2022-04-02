@extends('master')
@section("content")
 
 <div class="custom-products">
 
    
    <div class="col-sm-10">
    
    
    <div class="wrapper-trending">
      <h2>orders list Products</h2>
      <a class="btn btn-success" href="ordernow">Order now</a>
      @foreach($myorders as $item)
       <div class="row searched-item cart-list-devider" >
       <div class="col-sm-3">
       <a href="detail/{{$item->id}}">
       <img class="trending-image" src="{{$item->gallery}}">
       <div class="">
       <h2>Name:{{$item->name}}</h3>
      <h2>Delivery status:{{$item->status}}</h2>
      <h2>Address:{{$item->address}}</h2>
      <h3>Payment_status{{$item->payment_status}}</h3>
      <h5>Payment_method{{$item->payment_method}}</h3>
       <div class="col-sm-3">
      
       </div>
      
        </div>
       
       </a>  
       </div>
       </div>
            
      @endforeach
      
    
    </div>
  
    </div>
    @endsection
    

  
    
   
     
 

   







    
    
      
      
    
     
        
    
           
 
   
    

  
    
    
     
 



