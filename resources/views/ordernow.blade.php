@extends('master')
@section("content")
 
 <div class="custom-products">
 
    
    <div class="col-sm-10">
    <table class="table">
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>${{$total}}</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>$0</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td> $10</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Total amount</td>
      <td>${{$total+10}}</td>
      
    </tr>
  </tbody>
</table>
    <div>
    <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    
    <textarea type="text"name="address" placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label> <br> <br>
    <input type="radio" value="cash" name="payment">  <span>onlinePayment</span> <br> <br>
    <input type="radio"  value="cash" name="payment">  <span>OndeliveryPayment</span> <br> <br>
    <input type="radio"  value="cash" name="payment">  <span>EMIPayment</span> <br> <br>
</div>
  
  <button type="submit" class="btn btn-default">Order now</button>
</form> 
    </div>
  
    </div>
    @endsection
    

  
    
   
     
 

   







    
    
      
      
    
     
        
    
           
 
   
    

  
    
    
     
