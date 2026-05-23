@extends('product.layout')
@section('content')



<div class="jumbotron container">

    <p>trached products</p>
    <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role="button">back  </a>

  </div>



  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
             <th scope="col">image</th>
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
                <td>{{$item->image}}$</td>
               <td>


                  <div class="col-sm">
                <a class="btn btn-primary" href="{{ route('back.softdelete', $item->id) }}">back</a>
                 </div>
               <div class="col-sm">


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
             </tr>
             <td>
             <div class="col-sm">
                            <a  class="btn btn-warning" href=""> Soft delete </a>

                        </div>
                      </div>


                </td>
--}}
        </tbody>
      </table>


  </div>
@endsection
