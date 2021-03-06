{{-- Jumbotron here --}}
@section('jumbotron')
    <div class="jumbotron-product">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h2 class="display-4 helvetica-bold">Produk</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- style for this jumbotron --}}
@push('style')
    <style>
        .jumbotron-product {
            width: 100%;
            height: 350px;
            background-color: #7C32FF !important;
        }

        .jumbotron-product .container {
            position: relative;
            top: 9rem;
        }

        .jumbotron-product .container .row .col-md-12 h2 {
            text-align: center;
            color: #fff;
            font-size: 35pt;
        }
    </style>
@endpush