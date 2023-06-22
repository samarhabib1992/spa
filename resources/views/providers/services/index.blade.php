<!-- resources/views/products/index.blade.php -->

@extends('providers.layout')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Services List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Main Image</th>
                                            <th>Title</th>
                                            <th>Quantity</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Main Image</th>
                                            <th>Title</th>
                                            <th>Quantity</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td><img class="img-profile" width="100px" src="img/Pixi.jpg"></td>
                                            <td>Led Facial</td>
                                            <td>03</td>
                                            <td>05:00:00 AM</td>
                                            <td>09:00:00 PM</td>
                                            <td>$54</td>
                                            <td>
                                    <a href="servicedetails.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                                      <a  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">Delete</i></a>
                                  </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td><img class="img-profile" width="100px" src="img/Pixi.jpg"></td>
                                            <td>Led Facial</td>
                                            <td>03</td>
                                            <td>05:00:00 AM</td>
                                            <td>09:00:00 PM</td>
                                            <td>$54</td>
                                            <td>
                                    <a href="servicedetails.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                                      <a  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">Delete</a>
                                  </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td><img class="img-profile" width="100px" src="img/Pixi.jpg"></td>
                                            <td>Led Facial</td>
                                            <td>03</td>
                                            <td>05:00:00 AM</td>
                                            <td>09:00:00 PM</td>
                                            <td>$54</td>
                                            <td>
                                    <a href="servicedetails.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                                      <a  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">Delete</a>
                                  </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><img class="img-profile" width="100px" src="img/Pixi.jpg"></td>
                                            <td>Led Facial</td>
                                            <td>03</td>
                                            <td>05:00:00 AM</td>
                                            <td>09:00:00 PM</td>
                                            <td>$54</td>
                                            <td>
                                    <a href="servicedetails.html" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Detail"><i class="far fa-eye"></i></a>
                                      <a  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">Delete</a>
                                  </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
