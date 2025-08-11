@extends('backend.layout')

@section('content')
  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Order List</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

            {{-- success code --}}
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            


    <div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
        <a href="{{ route('orders.create')}}" class="btn btn-primary">Add Orders</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Voucher</th>
                        <th>Phone</th>
                        <th>Shipping Addres</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody> 
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->orderno}}</td>
                        <td>{{ $order->phone}}</td>
                        <td>{{ $order->shipping_address}}</td>
                        <td>{{ $order->payment_type}}</td>
                        <td>{{ $order->total}}</td>
                       
                       
                        <td>
                            <a href="{{ route('orders.show',$order->id)}}" class="btn btn-sm btn-primary">View</a>
                            {{-- {{-- <a href="{{ route('orders.edit', $order->id)}}" class="btn btn-sm btn-primary">Edit</a>
                         
                            <form action="{{ route('orders.destroy',$order->id)}}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                
                                {{-- Delete condition --}}
                                {{-- @if($order->books->count()==0)
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger" onclick="alert('You cannot delete this category coz it has books')">Delete</button>
                                @endif 


                                
                            </form> --}}
                        </td>
                    
                    </tr>
                   
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection