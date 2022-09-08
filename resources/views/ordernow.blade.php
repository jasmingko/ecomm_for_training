@extends('master')
@section("content")
<br><br>
<div class="custom-product container">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>{{$total}} $</td>
              </tr>
              <tr>
                <td>Tax 2%</td>
                <td>{{$tax=$total*2/100}} $</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>10 $</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>{{$total+10+$tax}} $</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 