@extends('admin.master')
@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand</h1>
    <a href="{{route('manage-brand')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-reply fa-sm text-white-50"></i> Back to brand Category
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
            <form action="{{ route('new-brand') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="control-label col-md-2">Brand Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control"/>
                        <span>{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Brand Description</label>
                    <div class="col-md-10">
                        <textarea name="description" class="form-control"></textarea>
                        <span>{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
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
                        <input type="submit" name="btn" class="btn btn-success" value="Creatre New Brand"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
