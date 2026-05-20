
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
<form action="{{ route('product.update', $product->id) }}" method="POST">
    @method('put')
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name</label>
          <input type="text" name="product_name" value="{{$product->product_name}} " class="form-control"  placeholder="product name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  Price</label>
            <input type="text" name="product_price" value="{{$product->product_price}}" class="form-control"  placeholder="product price">
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Details  </label>
          <textarea class="form-control" name="detail"   rows="3"> {!!$product->detail!!}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">update</button>

        </div>



    </form>
</div>
@endsection
