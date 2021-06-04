@extends('admin.master')
@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1>
    <a href="{{ route('manage-product') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-reply fa-sm text-white-50"></i> Back to List
    </a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
            @if($message = Session::get('message'))
            <div class="alert btn-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <form action="{{ route('new-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="control-label col-md-2">Category Name</label>
                    <div class="col-md-10">
                        <select class="form-control" name="category_id">
                            <option>--- Select Product Category --- </option>
                            @foreach($categories as $key => $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Brand Name</label>
                    <div class="col-md-10">
                        <select class="form-control" name="brand_id">
                            <option>--- Select Brand Category --- </option>
                            @foreach($brands as $key => $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Product Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Product Code</label>
                    <div class="col-md-10">
                        <input type="text" name="code" class="form-control"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Product Price</label>
                    <div class="col-md-10">
                        <input type="number" name="price" class="form-control"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Stock Amount</label>
                    <div class="col-md-10">
                        <input type="number" name="stock_amount" class="form-control"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Short Description</label>
                    <div class="col-md-10">
                        <textarea name="short_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Long Description</label>
                    <div class="col-md-10">
                        <textarea name="long_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Main Image</label>
                    <div class="col-md-10">
                        <input type="file" name="image" class="form-control-file" accept="image/*"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Sub Images</label>
                    <div class="col-md-10">
                        <input type="file" name="sub_image[]" multiple accept="image/*" class="form-control-file"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Publcation Status</label>
                    <div class="col-md-10">
                        <label><input type="radio" name="status" value="1"/> Published</label>
                        <label><input type="radio" name="status" value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                    <div class="col-md-10">
                        <input type="submit" name="btn" class="btn btn-success" value="Creatre New Product"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
