@extends('admin.master')
@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Add Category
    </a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
            @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <form action="{{ route('update-brand') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="control-label col-md-2">Brand Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" value="{{ $brand->name }}" class="form-control"/>
                        <input type="hidden" name="id" value="{{ $brand->id }}"/>
                        <span>{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Brand Description</label>
                    <div class="col-md-10">
                        <textarea name="description" class="form-control">{{ $brand->description }}</textarea>
                        <span>{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Publcation Status</label>
                    <div class="col-md-10">
                        <label><input type="radio" name="status" {{ $brand->status == 1 ? 'checked' : '' }} value="1"/> Published</label>
                        <label><input type="radio" name="status" {{ $brand->status == 0 ? 'checked' : '' }} value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                    <div class="col-md-10">
                        <input type="submit" name="btn" class="btn btn-success" value="Update Brand Info"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
