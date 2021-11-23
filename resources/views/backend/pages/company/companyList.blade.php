@extends('backend.master')

@section('contents')

<hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style=" margin-left: 15px; !important;">
    Add Company Name
</button>

<br> <br>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Company Name list</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Company Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->description}}</td>
                                <td>{{$company->address}}</td>
                                <td>{{$company->status}}</td>
                                
                                <td>
                                    <a href="{{route('company.edit',$company->id)}}"><i class="material-icons">edit</i></a>
                                    @if (!empty($company->deleted_at))
                                        <a href="{{route('company.restore',$company->id)}}"><i class="material-icons">settings_backup_restore</i></a>
                                    
                                    @else
                                    <a href="{{route('company.delete',$company->id)}}"><i class="material-icons">delete</i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Company name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('company.add')}}", method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Company Name</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Company name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Company Discription</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Company Address</label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Company Contact</label>
                        <input name="contact" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Company contact">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="1">Sallable</option>
                            <option value="0">Not-Sallable</option>
                        </select>
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
                    <hr>
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
