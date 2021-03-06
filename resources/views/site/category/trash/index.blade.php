@extends('site.layouts.app')

@section('title')
    Categories
@endsection

@section('page-title')
    Trashed Category
@endsection

@section('content-page')
<div class="message mt-3 mb-3">
    @include('message.flash-message')    
</div>
<br>
<div class="card border-primary">
    <div class="card-header text-white bg-primary mb-3">
        <div class="card-title pull-left">
            <div class="float-left">
                List Trash Category
            </div>
            <div class="float-right">
                <a href="{{ route('categories.index') }}" class="btn btn-outline-warning"><span class="oi oi-home"></span> Home</a>
            </div>
        </div>        
    </div>
<div class="card-body">
        <div class="table table-responsive">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th><b>#</b></th>
                        <th><b>Name Category</b></th>
                        <th><b>Create By</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>
        
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $no }}.</td>
                            <td>{{ $category->name_category }}</td>
                            <td>{{ $category->getUser->name }}</td>
                            <td>
                                <a href="{{ route('category.restore', $category->id) }}" class="btn btn-success btn-sm pull-left" style="margin-left: 10px" onclick="return confirm('Restore {{ $category->name }}')">
                                    <span class="oi oi-check"></span>
                                </a>
                                <form action="{{ route('category.delete-permanent', $category->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Delete Data ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="oi oi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @php $no++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').DataTable();
	});
</script>
@endpush