@extends('product.layout')
@section('content')



<div class="jumbotron container">

    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('product.create') }}" role="button">Create  </a>
    <a class="btn btn-primary btn-lg" href="" role="button">Trash  </a>
  </div>



  <div class="container">
    @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
        {{$message}}

        </div>
        @endif



  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>


            @php
                $i=0;
            @endphp

            @foreach ( $products as $item )
        <tr>
             <th scope="row">{{++$i}}</th>
              <td>{{$item->product_name}}</td>
               <td>{{$item->product_price}}$</td>

               <td>

                 <div class="row">
                        <div class="col-sm">
                <a class="btn btn-success" href="{{ route('product.edit', $item->id) }}">Edit</a>
                </div>
                  <div class="col-sm">
                <a class="btn btn-primary" href="{{ route('product.show', $item->id) }}">Show</a>
                 </div>
               <div class="col-sm">
                <form action="{{route('product.destroy',$item->id)}}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >  Delete</button>

                </form>
                </div>
               </td>

        </tr>
            @endforeach
{{--
            <tr>
                <th scope="row"></th>
                <td></td>
                <td> IQD  </td>
                <td>

                    <div class="row">
                        <div class="col-sm">
                            <a  class="btn btn-success" href=""> Edit </a>

                        </div>
                        <div class="col-sm">
                            <a  class="btn btn-primary" href=""> Show</a>

                        </div>

                        <div class="col-sm">
                            <a  class="btn btn-warning" href=""> Soft delete </a>

                        </div>
                      </div>


                </td>
             </tr> --}}


        </tbody>
      </table>
      {!!$products->links()!!}

  </div>
@endsection
