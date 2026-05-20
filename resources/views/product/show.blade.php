
@extends('product.layout')
@section('content')

 <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role="button">show products  </a>

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

 <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role="button">Back  </a>
          <p class="card-text"> product name: {{ $product->product_name }}</p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">


        <div class="form-group">
          <label for="exampleFormControlInput1">{{$product->product_name}}</label>

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  {{$product->product_price}}</label>

          </div>

        <div class="form-group">

      {!!$product->detail!!}
        </div>




</div>
@endsection
