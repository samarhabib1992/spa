@extends('providers.layout')

@section('content')

<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product Detail</h6>
    </div>
    <div class="card-body">
    <h6 class="m-0 font-weight-bold">Images</h6>
    <div class="row">
        <div class="col-md-3 mt-3">
            <img src="img/Pixi.jpg" alt="" width="100%">
        </div>
        <div class="col-md-3 mt-3">
            <img src="img/Pixi.jpg" alt="" width="100%">
        </div>
        <div class="col-md-3 mt-3">
            <img src="img/Pixi.jpg" alt="" width="100%">
        </div>
        <div class="col-md-3 mt-3">
            <img src="img/Pixi.jpg" alt="" width="100%">
        </div>

    </div>
    <hr class="mt-4 mb-4">
    <div class="row">
                
        <div class="col-md-4">
            <p><strong>Title:</strong> Led Facial</p>
        </div>
        <div class="col-md-4">
            <p><strong>Currency:</strong> $</p>
        </div>
        <div class="col-md-4">
            <p><strong>Price:</strong> $511</p>
        </div>
        <hr class="mt-5">
        <div class="col-md-4">
            <p><strong>Quantity:</strong> 14</p>
        </div>
        <div class="col-md-4">
            <p><strong>Category:</strong> Led Facial</p>
        </div>
        <div class="col-md-4">
            <p><strong>Subcategory:</strong> Led Facial</p>
        </div>
        <hr class="mt-5">
        <div class="col-md-4">
            <p><strong>Address:</strong> 4890 Findley Avenue</p>
        </div>
        <div class="col-md-4">
            <p><strong>City:</strong> Enderlin</p>
        </div>
        <div class="col-md-4">
            <p><strong>Zip/Poztel Code:</strong> 58027</p>
        </div>
        <hr class="mt-5">
        <div class="col-md-4">
            <p><strong>Country:</strong> United State</p>
        </div>
        <div class="col-md-4">
            <p><strong>Unit Of Measure:</strong> 04</p>
        </div>
        <div class="col-md-4">
            <p><strong>Website:</strong> www.website.com</p>
        </div>
        <hr class="mt-5">
        <div class="col-md-4">
            <p><strong>Email Address:</strong> email@gmail.com</p>
        </div>
        <div class="col-md-4">
            <p><strong>Facebook:</strong> www.facebook.com/channel</p>
        </div>
        <hr class="mt-5">
        <div class="col-md-12">
            <p><strong>Description:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-md-12 mt-5">
            <a href="productlist.html"> <button class="btn btn-secondary">Back</button> </a>
        </div>
    </div>

    </div>
</div>
@endsection
