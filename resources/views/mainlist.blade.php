
@extends('template')
@section('content')
                    @foreach($products as $product)
                        <div class="col-sm-2"> <!-- 3 for 4 item in 1 row-->
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <a href="{{route('product.detail',['id'=>$product->id])}}"><img src="{{asset('image/')}}/{{$product->image}}" alt="" class="img-fuild" width="150px" height="150px"></td></a>
                                    <div class="card-heading">RM{{$product->price}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
@endsection
