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
                                        (Str::contains($item->status, 'canceled') ? 'bg-danger' : 'bg-warning') 
                                    }}">
                                        {{ ucfirst(str_replace('_', ' ', $item->status)) }}
                                </span>
                                <br>

                                <form action="{{ route('admin.order.updateStatus', ['id' => $item->id, 'status' => 'approved']) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Setuju</button>
                                </form>

                                <form action="{{ route('admin.order.updateStatus', ['id' => $item->id, 'status' => 'canceled_by_admin']) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                                </form>

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
