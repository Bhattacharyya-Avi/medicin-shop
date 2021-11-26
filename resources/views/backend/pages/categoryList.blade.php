@extends('backend.master')

@section('contents')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Product Category
</button>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Product Category list</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key=>$category)
                            <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->status}}</td>
                            <td>
                                <a href="{{route('admin.category.edit',$category->id)}}"><i class="material-icons">edit</i></a>
                                @if (!empty($category->deleted_at))
                                    <a href="{{route('category.restore',$category->id)}}"><i class="material-icons">settings_backup_restore</i></a>
                                
                                @else
                                <a href="{{route('product.category.delete',$category->id)}}"><i class="material-icons">delete</i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Product Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.add.category')}}", method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Category name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Discription</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    {{-- <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="Active">Active</option>
                            <option value="Deactive">Deactive</option>
                        </select>
                    </div> --}}
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
