@extends('backend.master')

@section('contents')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Product
</button>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Product list</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Company</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                                <img style="width: 100px; height: 50px; " src="{{url('/uploads/'.$product->image)}}" alt="product image">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->company->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                {{-- <a href="{{route('admin.product.edit',$product->id)}}"><i class="material-icons">remove_red_eye</i></a> --}}
                                <a href="{{route('admin.product.edit',$product->id)}}"><i class="material-icons">edit</i></a>
                                @if (!empty($product->deleted_at))
                                    <a href="{{route('product.restore',$product->id)}}"><i class="material-icons">settings_backup_restore</i></a>
                                
                                @else
                                <a href="{{route('product.delete',$product->id)}}"><i class="material-icons">delete</i></a>
                                @endif

                                
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.add.product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="product name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Product Company Name</label>
                        <select name="company" class="form-control" id="exampleFormControlSelect1">
                            <option>Select One Category</option>
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Product Category</label>
                        <select name="category" class="form-control" id="exampleFormControlSelect1">
                            <option>Select One Category</option>
                            @foreach ($category as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product price</label>
                        <input name="price" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="product price">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product quantity</label>
                        <input name="quantity" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="product quantity">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="product price">
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">product description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>



{{-- </div> --}}

@endsection
