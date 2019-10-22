@extends('site.layouts.app')

@section('title')
    Pricing
@endsection

@section('page-title')
    Service Price
@endsection

@section('content-page')

<div class="message mt-3 mb-3">
    @include('message.flash-message')    
</div>

<div class="card">
    <div class="card-header">
        <div class="float-left">
            <a href="{{ route('pricing.create') }}" class="btn btn-primary"><i class="oi oi-plus mr-1"></i> Create New Price</a>
        </div>
        <div class="float-right">
            <form action="{{ url()->current() }}">
                <input type="search" name="keyword" style="width: 20rem;" class="form-control" id="" placeholder="@lang('cari berdasarkan nama')" autocomplet="off" autofocus>
            </form>
        </div>
    </div>

    <section class="pricing card-body">
        @if ($pricing->isEmpty())
        <div class="card" style="padding: 15px;">
            <h4>Data Kosong!</h4>
        </div>
        @else    
        <table id="datatabled" class="table table-hover">
            <thead class="border-0">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">Opsional Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @php $i = 1; @endphp
            @foreach($pricing as $price)
            <tbody>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $price->title }}</td>
                    <td>{{ $price->optional_description }}</td>
                    <td>Rp. {{ number_format($price->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pricing.show', $price->id) }}" class="btn btn-info" style="border: transparent;"><i class="oi oi-eye"></i></a>
                        <a href="{{ route('pricing.edit', $price->id) }}" class="btn btn-success" style="border: transparent;"><i class="oi oi-pencil"></i></a>
                        <form action="{{ route('pricing.destroy', $price->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Hapus Data ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="oi oi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @php $i++; @endphp
            @endforeach

            <tfoot>
                {{ $pricing->links() }}
            </tfoot>

        </table>
        @endif
    </section>
</div>
@endsection