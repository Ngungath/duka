@extends('layouts.app')

@section('content')
 @include('includes.errors')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
       <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
      
        {{csrf_field()}}
        <div class="form-group">
            <label class="label-control"><b>Product Name</b></label>
            <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label class="label-control"><b>Product Image</b></label>
            <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
            <label class="label-control"><b>Product Price</b></label>
            <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
        </div>
        <div class="form-group">
            <label class="label-control"><b>Product Description</b></label>
           <textarea name="description" cols="5" rows="5" class="form-control"></textarea>
        </div>
      
        <div class="text-center">
       <button type="submit" class="btn btn-primary">Store Product</button>    
      </div>
      
      </div>

       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
