@extends('providers.layout')

@section('content')
<div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
        </div>
        <div class="card-body">
        <section >
            <div id="invoice-template" class="card-body">
                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">
                <div class="col-md-6 col-sm-12 text-center text-md-left">
                    <div class="media">
                    <img src="img/vip-logo.png" width="50" alt="company logo" class="invoice-logo">
                    <div class="media-body my-auto">
                        <ul class="ml-2 px-0 list-unstyled">
                        <li class="fw-600 black">Spa Marketing</li>
                        <li class="black">5000 8909</li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                    <p class="m-0 black"><span class="fw-600 black">Invoice No:</span> # INV-001001</p>
                    <ul class="px-0 list-unstyled">
                    <li class="black"><span class="fw-600 black">Order Date: </span> 02-06-2023 10:00 AM</li>
                    </ul>
                </div>
                </div>
            
                <div id="invoice-learner-details" class="row pt-2">
                
                <div class="col-md-6 col-sm-12 text-md-left">
                        <div class="col-sm-12 text-center text-md-left p-0">
                    <p class="black fw-600">Company Details</p>
                </div>
                    <ul class="px-0 list-unstyled">
                    <li class="black"><span class="black fw-600">Company Name: </span> Emma Redshaw</li>
                    <li class="black"><span class="black fw-600">Company Email: </span> emma@user.com</li>
                    <li class="black"> <span class="black fw-600">Address: </span> 1253 Melrose Street, Wenatchee,<br> 98801, United States</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                        <div class="col-sm-12 text-center text-md-right ">
                    <p class="black fw-600 ">Customer Details</p>
                </div>
                    <ul class="px-0 list-unstyled">
                    <li class="black"><span class="black fw-600">Name: </span>Will Smith</li>
                    <li class="black"><span class="black fw-600">Email: </span> smith@email.com</li>
                    <li class="black"> <span class="black fw-600">Phone: </span> 098098876</li>
                    <li class="black"> <span class="black fw-600">Address: </span> 1253 Melrose Street, Wenatchee,<br> 98801, United States</li>
                    </ul>
                </div>
                </div>
            
                <div id="invoice-items-details" class="pt-2">
                    <div class="col-sm-12  text-md-left p-0">
                    <p class="black fw-600">Order Items</p>
                </div>
                <div class="row">
                    <div class="table-responsive col-sm-12">
                    <table class="table invoice-table">
                        <thead >
                        <tr class="black">
                            <th>#</th>
                            <th>Product/Service</th>
                            <th >Price</th>
                            <th >Qunatity</th>
                            <th >Date</th>
                            <th >Total</th>
                        </tr>
                        </thead>
                        <tbody class="black">
                        <tr>
                            <th scope="row">1</th>
                            <td>
                            <p>Led Facial</p>
                            </td>
                            <td >$10.00</td>
                            <td >01</td>
                            <td >02-06-0203</td>
                            <td >$10.00</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 text-center text-md-left">
                    </div>
                    <div class="col-md-5 col-sm-12">
                    <p class="lead fw-600 black">Total due</p>
                    <div class="table-responsive">
                        <table class="table">
                        <tbody class="black">
                            <tr>
                            <td class="fw-600 black">Sub Total Amount</td>
                            <td class="text-right">$10</td>
                            </tr>
                            
                            <tr>
                            <td class="fw-600 black">Grand Total</td>
                            <td class="text-right">$10</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Invoice Footer -->
                <div id="invoice-footer">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-right">
                    <button type="button" class="btn btn-sm btn-outline-theme-blue btn-primary"> Print</button>
                    </div>
                </div>
                </div>
                <!--/ Invoice Footer -->
            </div>
            </section>
        </div>
    </div>
@endsection
