@extends('master')
@section("content")
<div class="container">
   <div class="row"> 
        <div class="col-sm-6">
            <br><br>
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}} $</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST"> 
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">Add to Cert</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br><br><br>
            <a href="/">Go Back</a>
        </div>
   </div>
</div>
@endsection