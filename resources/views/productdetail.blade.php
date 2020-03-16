@extends('template')
@section('content')
@foreach($products as $product)
                    <div class="row">
                        <div class="col-md-6"><img src="{{asset('image/')}}/{{$product->image}}" width="250" height="200"  alt="" class="img-fluid">                        </div>
                        <div class="col-md-6">
                        <form action="{!! URL::to('paypal') !!}" method="post">
                        {{csrf_field()}}
                            <h5 class="card-title"> {{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            <div style="height: 100px">Quantity <input type="number" id="qty" value="1" min="1" max="10">Available stock: {{$product->quantity}}
                            </div>
                            <input type="hidden" id="price" value="{{$product->price}}">
                            <input type="hidden" id="amount" name="amount" value="">
                            <script>
                            function cal(){
                                document.getElementById("amount").value=document.getElementById("qty").value*document.getElementById("price").value;
                            }
                            </script>
                            <div style="height: 100px">RM{{$product->price}} <button type="submit" onClick="cal()" style="float:right" class="btn btn-danger btn-xs">Buy Now</button>
                            </form></div>
                            <div ><form target="paypal"  style="float:right; height: 250px"  action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HMJC5GMB3PS8A">
<table>
<tr><td><input type="hidden" name="on0" value="Cart">Cart</td></tr><tr><td><select name="os0">
	<option value="Yangnyeom Chikin">Yangnyeom Chikin $4.68 USD</option>
	<option value="Chijeu Chikin">Chijeu Chikin $4.68 USD</option>
	<option value="Maekju">Maekju $3.51 USD</option>
	<option value="Ddukbokki">Ddukbokki $1.64 USD</option>
	<option value="Bulgogi">Bulgogi $2.81 USD</option>
	<option value="Samgyeopsal">Samgyeopsal $11.70 USD</option>
	<option value="Hoeddeok">Hoeddeok $2.34 USD</option>
	<option value="Gimbap">Gimbap $2.34 USD</option>
	<option value="Naengmyeon">Naengmyeon $3.74 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
                        </div>
                    </div> 
@endforeach
@endsection   
               