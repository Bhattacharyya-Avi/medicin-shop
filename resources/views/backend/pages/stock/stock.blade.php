@extends('backend.master')

@section('contents')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Category list</h5>
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
                                
                                @if (!empty($category->deleted_at))
                                    <a href="#"><i class="material-icons">settings_backup_restore</i>Deleted</a>
                                
                                @else
                                <a href="{{route('category.details',$category->id)}}"><i class="material-icons"></i>view</a>
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




{{-- </div> --}}

@endsection
