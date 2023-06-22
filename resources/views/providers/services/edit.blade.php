<!-- resources/views/products/create.blade.php -->

@extends('providers.layout')

@section('content')

<div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Services</h6>
                        </div>
                        <div class="card-body">
                           
                            <div class="basic-form">
                                <form>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Service Images</label>
                                                <input class="form-control input-default" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Currency</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Currency">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                                                <input type="time" class="form-control input-default p-2" placeholder="Enter Start Time">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">End Time</label>
                                                <input type="time" class="form-control input-default p-2" placeholder="Enter End Time">
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Category</label>
                                                <select id="multiple-checkboxes" class=" p-2" multiple="multiple" style="width: 100%;">
                                                    <option class="p-2" value="php">PHP</option>
                                                    <option class="p-2" value="javascript">JavaScript</option>
                                                    <option class="p-2" value="java">Java</option>
                                                    <option class="p-2" value="sql">SQL</option>
                                                    <option class="p-2" value="jquery">Jquery</option>
                                                    <option class="p-2" value=".net">.Net</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Subcategory</label>
                                                <select id="multiple-checkboxes2" class=" p-2" multiple="multiple" style="width: 100%;">
                                                    <option class="p-2" value="php">PHP</option>
                                                    <option class="p-2" value="javascript">JavaScript</option>
                                                    <option class="p-2" value="java">Java</option>
                                                    <option class="p-2" value="sql">SQL</option>
                                                    <option class="p-2" value="jquery">Jquery</option>
                                                    <option class="p-2" value=".net">.Net</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Zip/Poztel Code</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Zip/Poztel Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Unit Of Measure</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Unit Of Measure">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Website</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Website">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                                                <input type="text" class="form-control input-default p-2" placeholder="Enter Facebook">
                                            </div>
                                        </div>
                                       
                                        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
</div>
                           
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <a href="#" class="btn btn-outline-secondary">Submit</a>
                                </div>
                            </div>
                                </form>
                            </div>
                        </div>
                        </div>
    
@endsection
