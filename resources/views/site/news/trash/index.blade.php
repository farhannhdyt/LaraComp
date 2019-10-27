@extends('site.layouts.app')

@section('title')
    News
@endsection

@section('page-title')
    Trashed News
@endsection

@section('content-page')

@if ( session('restore') )
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('restore') }}
    </div>
@elseif ( session('delete') )
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('delete') }}
    </div>
@endif

<br>
<div class="card border-primary">
    <div class="card-header text-white bg-primary mb-3">
        <div class="card-title pull-left">
            <div class="float-left">
                List Trash News
            </div>
            <div class="float-right">
                <a href="{{ route('news.index') }}" class="btn btn-outline-warning"><span class="oi oi-home"></span> Home</a>
            </div>
        </div>        
    </div>
<div class="card-body">
        <div class="table table-responsive">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th><b>#</b></th>
                        <th><b>Title</b></th>
                        <th><b>Description</b></th>
                        <th><b>image</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>
        
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($news as $item)
                        <tr>
                            <td>{{ $no }}.</td>
                            <td>{{ $item->title }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>
                                <img src="{{ asset('images/news_images/' . $item->image) }}" width="48px">
                            </td>
                            <td>
                                <a href="{{ route('news.restore', $item->id) }}" class="btn btn-success btn-sm pull-left" style="margin-left: 10px" onclick="return confirm('Restore {{ $item->name }}')">
                                    <span class="oi oi-check"></span>
                                </a>
                                <form action="{{ route('news.delete-permanent', $item->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Delete Data ?')">
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