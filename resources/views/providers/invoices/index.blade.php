@extends('providers.layout')

@section('content')
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Invoice ID</th>
                    <th>Product/Service</th>
                    <th>Quantity</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>#001001</td>
                    <td>Led Facial</td>
                    <td>02</td>
                    <td>Timmy</td>
                
                    <td>$10.00</td>
                    <td ><span class="badge badge-success">Completed</span></td>
                    <td>
                    <a href="invoicedetail.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>#34536786</td>
                    <td>Oxygen Facial</td>
                    <td>05</td>
                    <td>Alex</td>
                    
                    <td>$10.00</td>
                    <td ><span class="badge badge-warning">Pending</span></td>
                    <td>
                    <a href="invoicedetail.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>#567657</td>
                    <td>Anti-Aging Facial</td>
                    <td>08</td>
                    <td>Emma</td>
                    
                    <td>$10.00</td>
                    <td ><span class="badge badge-success">Completed</span></td>
                    <td>
                    <a href="invoicedetail.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
