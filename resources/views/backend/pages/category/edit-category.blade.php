@extends('backend.master')

@section('contents')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Edit Category</h3>
            <p></p>
        </div>
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="card-body">
                <form action="{{route('admin.category.update',$category->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Category Name</label>
                        <input value="{{$category->name}}" name="name" id="inputText3" type="text" class="form-control" placeholder="Company Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail">Description</label>
                        <input value="{{$category->description}}" name="description" id="inputEmail" type="text" placeholder="Description" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="">select one</option>

                            <option value="0" @if ($category->status === "0")
                                selected @endif>Not-Sallable
                            </option>

                            <option value="1" @if ($category->status === "1")
                                selected @endif>Sallable
                            </option>

                            
                            
                        </select>
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