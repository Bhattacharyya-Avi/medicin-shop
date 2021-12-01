@extends('backend.master')

@section('contents')
<hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style=" margin-left: 15px; !important;">
    Add Contents
</button>
<br> <br>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Slider Content list</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $key=>$slider)
                            <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <img width="120px" src="{{url('/uploads/slider/'.$slider->image)}}" alt="Slider image">
                            </td>
                            <td>{{$slider->details}}</td>
                            <td>
                                <a href=""><i class="material-icons">edit</i></a>
                                @if (!empty($slider->deleted_at))
                                    <a href=""><i class="material-icons">settings_backup_restore</i></a>
                                
                                @else
                                <a href=""><i class="material-icons">delete</i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add slider content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.slider.contents.add')}}", method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Image</label>
                        <input name="image" type="file" class="form-control" id="exampleFormControlInput1"
                            placeholder="Category name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Details</label>
                        <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
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
