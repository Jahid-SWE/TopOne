@extends('admin.master')
@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Add Category
    </a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
           <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>SL NO</th>
                        <th>Email</th>
{{--                        <th>Brand Description</th>--}}
{{--                        <th>Publication Status</th>--}}
                        <th>Action</th>
                    </tr>
                    @foreach($subscribers as $key => $subscriber)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subscriber->email }}</td>
{{--                        <td>{{ $brand->description }}</td>--}}
{{--                        <td>{{ $brand->status == 1 ? 'Published' : 'Unpublished' }}</td>--}}
                        <td>
{{--                            <a href="{{ route('edit-brand', ['id' => $brand->id]) }}" class="btn btn-success">Edit</a>--}}
                            <a href="{{ route('delete-subscriber', ['id' => $subscriber->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
           </div>
        </div>
    </div>
</div>
@endsection
