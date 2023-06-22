<!-- resources/views/products/edit.blade.php -->

@extends('providers.layout')

@section('content')
    <h1>Edit Product</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <img id="blah" src="{{asset('/provider_assets/img/default_product.png')}}" alt="your image" width="200" class="p-2 img-thumbnail"/><br>
                            <label for="exampleFormControlInput1" class="form-label">Product Images</label>
                            <input class="form-control input-default" id="imgInp" type="file" name="image" id="formFile" accept="image/*" required>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                            <input type="text" class="form-control input-default p-2" name="title" placeholder="Enter Product Title" required>
                        </div>
                    </div>                            
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Thumbnail</label>
                            <input type="text" class="form-control input-default p-2" name="thumbnail" placeholder="Enter Thumbnail" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="number" class="form-control input-default p-2" name="price" placeholder="Enter Price" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Currency</label>
                            <input type="text" class="form-control input-default p-2" name="currency" placeholder="Enter Currency" required>
                        </div>
                    </div>
                                            
                                          
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Category</label>
                            <select id="multiple-checkboxes" class=" p-2" multiple="multiple" name="category" style="width: 100%;" >
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
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Subcategory</label>
                            <select id="multiple-checkboxes2" class=" p-2" multiple="multiple" style="width: 100%;">
                                <option class="p-2" value="php">PHP</option>
                                <option class="p-2" value="javascript">JavaScript</option>
                                <option class="p-2" value="java">Java</option>
                                <option class="p-2" value="sql">SQL</option>
                                <option class="p-2" value="jquery">Jquery</option>
                                <option class="p-2" value=".net">.Net</option>
                                </select>
                        </div> -->
                    </div>
                                            
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Unit Of Measure</label>
                            <input type="text" class="form-control input-default p-2" name="measurementUnit" required placeholder="Enter Unit Of Measure">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">keywords</label>
                            <input type="text" name="keywords" id="keywords" name="keywords" class="select2 form-control input-default p-2" required />
                        </div>
                    </div>
                                           
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Promoted Product</label> &nbsp;&nbsp;
                            <input type="checkbox" name="promotedProduct">
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Top Product</label>&nbsp;&nbsp;
                            <input type="checkbox" name="topProduct">
                        </div>
                    </div>                 
                                            
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Add more form fields for other product attributes -->
                <div>
                    <button type="submit" name="submit" class="btn btn-outline-secondary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
