@extends('backend.master')

@section('contents')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Basic Form Elements</h3>
            <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
        </div>
        <div class="card">
            <h5 class="card-header">Basic Form</h5>
            <div class="card-body">
                <form action="{{route('company.update',$company->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">company Name</label>
                        <input value="{{$company->name}}" name="name" id="inputText3" type="text" class="form-control" placeholder="Company Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail">Description</label>
                        <input value="{{$company->description}}" name="description" id="inputEmail" type="text" placeholder="Description" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Company Contact</label>
                        <input value="{{$company->contact}}" name="contact" id="inputText3" type="text" class="form-control" placeholder="Company Name">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Address</label>
                        <input value="{{$company->address}}" name="address" id="inputEmail" type="text" placeholder="Address" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option @if ($company->status === "1")
                                selected @endif>Sallable
                            </option>

                            <option @if ($company->status === "0")
                                selected @endif>Not-Sallable
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