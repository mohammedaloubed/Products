@extends('product.layout')

@section('content')

<div class="container"   style="padding-top: 12%">
    <div class="card ">

        <div class="card-body">

          <p class="card-text">  <span><a href="{{ route('products.index')}}"> back</a> </span>     Product name : {{ $product->name  }}  </p>
        </div>
      </div>
</div>

<div class="container" style="padding-top: 2%">

        <div class="form-group">
          <label for="exampleFormControlInput1"> Name Product: {{ $product->name  }} </label>
         
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> Price :{{ $product->price  }}</label>
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"> {!! $product->detail  !!}  </label>
        </div>


</div>





@endsection