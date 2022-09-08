@extends('master')

@section("content")
<br><br>
<h4 class="cart-header"><i class="fab fa-opencart"></i>Your Shopping Cart</h4>

<div class="custom-product cart-page">

  <table>
    <tr>
      <th>Products</th>
      <th class="line-beg">Quantity</th>
      <th>SubTotal</th>

    </tr>
    @foreach($products as $item)
    <tr>
      <td>
        <div class="cart-info">
          <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}">
          </a>
          <div>
            <h2>{{$item->name}}</h2>
            <h5>{{$item->description}}</h5>
            <h5 style="color:green">price: {{$item->price}} $</h5>
          </div>        
        </div>
      </td>
      <td class="line"><a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove</a></td>
      <td style="color:green">{{$item->price}} $</td>
      

    </tr>

    @endforeach
  </table>
  <div class="order-btn">
    
  <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
 </div>
 
</div>

<!---   STYLES    ---->
<style>
  body
  {
    background: #fffefe;
  }
 .cart-header
 {
   text-align: center;
   font-size: 2em;
   margin-top: 20px;
 }
.cart-page
{
  margin: 80px 120px ;
}
table
{
  width: 100%;
  border-collapse: collapse;
}
.cart-info
{
  display: flex;
  flex-wrap: wrap;
  
}
.line
{
  margin-top:5px;
  border-left : 1px solid grey ;
  padding-left:30px !important; 
 
}
.line-beg
{
  padding-left: 30px !important;
}
th
{
  color:#e5dede;
  background: black;
  text-align: left;
  padding:8px;
  font-weight: normal;
}
td
{
  padding: 10px 5px ;
}
td img
{
  width: 130px;
  height: 130px !important;
  margin-right: 10px;
}
.btn-warning{
  background: #1c1c1c !important ;
  border: none ;
  color: #e5dede ;
  padding :7px ;
  font-size: 16px;
}
.btn-warning:hover
{
background: #f08000 !important;
}
.order-btn{
  display: flex ;
  justify-content: flex-end;
  width:120px;
  margin-right: 0 !important;
  margin-top: 20px !important;

  
}
</style>
@endsection 