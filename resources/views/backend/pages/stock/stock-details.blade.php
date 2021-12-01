@extends('backend.master')

@section('contents')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Category list</h5>
        <div class="card-body">
            <div class="table-responsive">
                @php
                     $stock = 0;
                    // dd($stock);
                @endphp
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>quantity</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key=>$product)
                            <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>

                            @php 
                                $total = $product->quantity;
                                $stock= $total+$stock; 
                            @endphp
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
                <table>
                        <thead>
                            <th>Total Quantity</th>
                        </thead>
                        <tbody>
                            <td>{{$stock}}</td>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>




{{-- </div> --}}

@endsection
