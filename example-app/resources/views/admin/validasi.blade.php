@extends('layout.master-admin')

@section('title', 'Validasi')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Validasi</h3>
                <br><br>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Validasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">Data Checkout User</div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->user }}</td>
                            <td>{{ $item->product }}</td>
                            <td>{{ $item->yang_dibeli }}</td>
                            <td><img src="{{ $item->foto }}" alt="foto" width="70"></td>
                            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>
                                <span class="badge {{ 
                                    $item->status == 'approved' ? 'bg-success' :
                                    ($item->status == 'finish' ? 'bg-primary' :
                                        (Str::contains($item->status, 'canceled') ? 'bg-danger' : 'bg-warning')) 
                                    }}">
                                    {{ ucfirst(str_replace('_', ' ', $item->status)) }}
                                </span>
                                @if($item->status == 'canceled_by_user' && $item->cancellation_reason)
                                    <br><small><em>Alasan: {{ $item->cancellation_reason }}</em></small>
                                @endif
                                <br>
                                <!-- Tombol aksi admin bisa disesuaikan (disable kalau sudah batal) -->
                                @if($item->status != 'canceled_by_user' && $item->status != 'canceled_by_admin')
                                    <form action="{{ route('admin.order.updateStatus', ['id' => $item->id, 'status' => 'approved']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm mt-1" 
                                            {{ in_array($item->status, ['approved', 'finish']) ? 'disabled' : '' }}>
                                            Setuju
                                        </button>


                                    </form>
                                    <form action="{{ route('admin.order.updateStatus', ['id' => $item->id, 'status' => 'canceled_by_admin']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm mt-1" 
                                            {{ in_array($item->status, ['approved', 'finish']) ? 'disabled' : '' }}>
                                            Batal
                                        </button>


                                    </form>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
</div>
@endsection
