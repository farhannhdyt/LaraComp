@extends('site.layouts.app')

@section('title')
    Team
@endsection

@section('page-title')
    Our Team
@endsection

@section('content-page')

<div class="message mt-3 mb-3">
    @include('message.flash-message')    
</div>

<div class="card">
    <div class="card-header">
        <div class="float-left">
            <a href="{{ route('team.create') }}" class="btn btn-primary"><i class="oi oi-plus mr-1"></i> Create New Team</a>
        </div>

        <div class="float-right">
            <form action="{{ url()->current() }}">
                <input type="search" style="width: 20rem;" name="keyword" class="form-control" placeholder="@lang('Search based on name')" autocomplete="off" autofocus>
            </form>
        </div>
    </div>

    <section class="team card-body">
        @if($teams->isEmpty())
        <div style="padding: 15px;">
            <p class="text-center text-danger">Data is empty!</p>
        </div>
        @else
        <div class="table table-responsive">
            <table class="table table-hovered">
                <thead class="border-0 text-center">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>NIK</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php $i = 1; @endphp
                @foreach($teams as $team)
                <tbody class="text-center">
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img src="{{ asset('images/teams/' . $team->image) }}" class="rounded-circle" width="60" alt="" srcset=""></td>
                        <td>{{ $team->nik }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->address }}</td>
                        <td>{{ $team->phone_num }}</td>
                        <td>{{ $team->email }}</td>
                        <td>{{ $team->position }}</td>
                        <td>
                            <a href="{{ route('team.show', $team->id) }}" class="btn btn-info"><i class="oi oi-eye"></i></a>
                            <a href="{{ route('team.edit', $team->id) }}" class="btn btn-success"><i class="oi oi-pencil"></i></a>
                            <form action="{{ route('team.destroy', $team->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Delete Data ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="oi oi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @php $i++; @endphp
                @endforeach
            </table>
        </div>
        @endif
    </section>
</div>
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#datatable').DataTable();
        });
    </script>
@endpush