@extends('backend.master')

@section('contents')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Edit a product</h3>
            <p></p>
        </div>
        <div class="card">
            {{-- <h5 class="card-header"></h5> --}}
            <div class="card-body">
                <form action="{{route('admin.product.update',$product->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Product name</label>
                        <input value="{{$product->name}}" name="name" id="inputText3" type="text" class="form-control" placeholder="Company Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail">Product category</label>
                        <input value="{{$product->category}}" name="description" id="inputEmail" type="text" placeholder="Description" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Product price</label>
                        <input value="{{$product->price}}" name="contact" id="inputText3" type="text" class="form-control" placeholder="Company Name">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Product quentity</label>
                        <input value="{{$product->quantity}}" name="address" id="inputEmail" type="text" placeholder="quentity" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Product description</label>
                        <input value="{{$product->description}}" name="address" id="inputEmail" type="text" placeholder="Description" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
            {{-- <div class="card-body border-top">
                <h3>Sizing</h3>
                <form>
                    <div class="form-group">
                        <label for="inputSmall" class="col-form-label">Small</label>
                        <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="inputDefault" class="col-form-label">Default</label>
                        <input id="inputDefault" type="text" value="Default input" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputLarge" class="col-form-label">Large</label>
                        <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                    </div>
                </form>
            </div> --}}
        </div>
    </div>
</div>
@endsection