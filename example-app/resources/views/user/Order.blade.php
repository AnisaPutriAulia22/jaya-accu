

@extends('layout.master-user')
@push('styles')
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .card {
        z-index: 0;
        background-color: #ECEFF1;
        padding-bottom: 15px;
        margin: 60px 0;
        border-radius: 10px;
    }

    .top {
        padding: 30px 5%;
    }

    #progressbar {
        margin: 20px 0;
        padding-left: 0;
        color: #455A64;
        display: flex;
        justify-content: space-between;
        position: relative;
    }

    #progressbar li {
        list-style: none;
        font-size: 12px;
        flex: 1;
        position: relative;
        text-align: center;
        font-weight: 400;
    }

    #progressbar li:before {
        content: "\f10c";
        font-family: FontAwesome;
        width: 30px;
        height: 30px;
        line-height: 32px;
        display: inline-block;
        font-size: 16px;
        background: #C5CAE9;
        border-radius: 50%;
        color: white;
        z-index: 1;
        position: relative;
    }

    #progressbar li:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 8px;
        background: #C5CAE9;
        top: 11px;
        left: -50%;
        z-index: 0;
    }

    #progressbar li:first-child:after {
        content: none; /* Jangan tampilkan garis sebelum langkah pertama */
    }

    #progressbar li:last-child:after {
        border-radius: 0 10px 10px 0;
    }

    #progressbar li.active:before {
        background: #651FFF;
        content: "\f00c"; /* centang */
        font-family: FontAwesome;
    }

    #progressbar li.active:after {
        background: #651FFF;
    }

    .icon {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .icon-content {
        padding-bottom: 10px;
    }

    .icon-content p {
        font-size: 12px;
    }

    @media screen and (max-width: 992px) {
        .icon-content {
            width: 45%;
        }
    }
    .btn-batal {
    background-color:rgb(80, 102, 142);
    color: white;
    padding: 6px 12px;      
    border: none;
    border-radius: 6px;   
    font-size: 12px;        
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 15px;
    margin-left: 20px;
    width: 200px;
    }

    .btn-batal:hover {
        background-color: #d32f2f;
    }

    </style>

@endpush
@section('title', __('order.title'))

@section('content')
     <!-- Modal -->
    <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('order.cancel') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="cancelModalLabel">Batalkan Pesanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ __('order.alasan-title')}}</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" value="Ingin mengubah alamat" id="reason1" required>
                                    <label class="form-check-label" for="reason1">{{ __('order.alasan1')}}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" value="Ingin mengubah pesanan" id="reason2">
                                    <label class="form-check-label" for="reason2">{{ __('order.alasan2')}}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reason" value="Pesanan tidak diperlukan lagi" id="reason3">
                                    <label class="form-check-label" for="reason3">{{ __('order.alasan3')}}</label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('order.button-batal')}}</button>
                                <button type="submit" class="btn btn-danger">{{ __('order.button-konfirmasi')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
    <div class="container px-1 px-md-4 py-5 mx-auto">
        <div class="card">
            <!-- Top Info -->
            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex">
                    <!-- <h6>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h6> -->
                </div>
                <div class="d-flex flex-column text-sm-right">
                    <!-- <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                    <p>USPS <span class="font-weight-bold">234094567242423422898</span></p> -->
                </div>
            </div>

            <!-- Progressbar -->
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    @php
                        $status = $order->status ?? 'processed'; 
                    @endphp
                    <!-- <p>Status dari DB: {{ $status }}</p> -->
                    <ul id="progressbar" class="text-center">
                        <li class="{{ in_array($status, ['processed', 'shipped', 'en_route', 'approved']) ? 'active' : '' }}"></li>
                        <li class="{{ in_array($status, ['shipped', 'en_route', 'approved']) ? 'active' : '' }}"></li>
                        <li class="{{ in_array($status, ['en_route', 'approved']) ? 'active' : '' }}"></li>
                    </ul>


                    @if(Str::contains($status, 'canceled'))
                        <div class="alert alert-danger text-center mt-3">Pesanan ini telah dibatalkan.</div>
                    @endif


                </div>
            </div>

            <!-- Step Icons and Labels -->
            <div class="row justify-content-between top">
                <div class="col d-flex flex-column align-items-center icon-content">
                    <img class="icon" src="https://cdn1.iconfinder.com/data/icons/business-management-and-growth-20/64/1010-128.png" alt="Order Processed" style="width:60px;">
                    <p class="font-weight-bold mt-2 text-center">{{ __('order.title')}}<br>{{ __('order.proses')}}</p>
                </div>
                <div class="col d-flex flex-column align-items-center icon-content">
                    <img class="icon" src="https://cdn2.iconfinder.com/data/icons/logistics-delivery-1-3/66/20-1024.png" alt="Order Shipped" style="width:60px;">
                    <p class="font-weight-bold mt-2 text-center">{{ __('order.title')}}<br>{{ __('order.dikirim')}}</p>
                </div>
                <div class="col d-flex flex-column align-items-center icon-content">
                    <img class="icon" src="https://cdn3.iconfinder.com/data/icons/streamline-icon-set-free-pack/48/Streamline-18-128.png" alt="Order En Route" style="width:60px;">
                    <p class="font-weight-bold mt-2 text-center">{{ __('order.title')}}<br>{{ __('order.tiba')}}</p>
                </div>
            </div>

            <div class="container mt-5">
                <!-- Tombol Trigger Modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal">
                    {{ __('order.batal')}}
                </button>
                @if ($order)
                <form action="{{ route('order.restart', $order->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Produk Sampai
                    </button>
                </form>
                @else
                    <button type="submit" class="btn btn-primary">
                        Produk Sampai
                    </button>
                @endif
            </div>


        </div>
        
    </div>

@endsection

@push('js')
    <script>
        var myLink = document.querySelector('a[href="#"]');
        if (myLink) {
            myLink.addEventListener('click', function (e) {
                e.preventDefault();
            });
        }
    </script>
@endpush
