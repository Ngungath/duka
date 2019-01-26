@extends('layouts.app')

@section('content')
 @include('includes.errors')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products
                 <a href="{{route('products.create')}}" class="btn btn-primary float-right">Add new Product</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <th>SN</th>
                         <th>Name</th>
                          <th>Price</th>
                          <th>Action</th>  
                        </thead>
                        <tbody>
                           @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                 <td>{{$product->price}}</td>
                                 <td>
                                     <a href="" class="badge badge-primary">Upadte</a>
                                     <a href="" class="badge badge-danger">Trash</a>
                                     <a href="" class="badge badge-danger">View</a>

                                 </td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                   <div class="text-center" style="padding-top: 10px; padding-left: 250px;">
                  {{$products->links()}}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><b>New Product</b></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
       <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
      <div class="modal-body">

       
      
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
      

      
      </div>
   
      <!-- Modal footer -->
      <div class="modal-footer">
         <button type="submit" class="btn btn-primary text-centre" style="margin-right: 100px;">Store Product</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

       </form>
   
    </div>
  </div>
</div>
@endsection
