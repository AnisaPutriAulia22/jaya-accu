@extends('layout.master-user')

@section('title','Detail Belanja')

@section('content')

<form class="bg0 p-t-75 p-b-85" method="POST" action="{{ url('/detail-belanja') }}">
    @csrf
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Produk</th>
									<th class="column-2"></th>
									<th class="column-3">Harga</th>
									<th class="column-4">Jumlah</th>
									<th class="column-5">Total</th>
								</tr>

								@foreach ($items as $item)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ $item->foto }}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{ $item->product }}</td>
									<td class="column-3">Rp{{ number_format($item->harga) }}</td>
									<td class="column-4">{{ $item->yang_dibeli }}</td>
									<td class="column-5">Rp{{ number_format($item->harga * $item->yang_dibeli) }}</td>
								</tr>
								@endforeach


							
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Batal Pesanan
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total Belanja
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									Rp{{ number_format($subtotal) }}
								</span>
							</div>

						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Pengiriman
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<div class="bor8 bg0 m-b-12 p-all-15" style="border: 1px solid #e6e6e6; border-radius: 4px;">
									<label style="display: flex; align-items: center; cursor: pointer;">
										<input type="radio" name="delivery_option" value="delivery" id="delivery" style="margin-right: 10px;">
										<span style="font-weight: bold;">Delivery</span>
									</label>
									<div style="margin-top: 8px; margin-left: 24px; color: #555;">
										Surabaya
									</div>
								</div>
								<div class="bor8 bg0 m-b-12 p-all-15" style="border: 1px solid #e6e6e6; border-radius: 4px;">
									<label style="display: flex; align-items: center; cursor: pointer;">
										<input type="radio" name="delivery_option" value="pickup" id="pickup" style="margin-right: 10px;">
										<span style="font-weight: bold;">Pickup</span>
									</label>
									<div style="margin-top: 8px; margin-left: 24px; color: #555;">
										28b-1, Jalan Pasar Besar Wetan, Surabaya 60174, Indonesia <br>
										Time: 15.00
									</div>
								</div>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Pilih Alamat
									</span>

									

									<div class="bor8 bg0 m-b-12" id="form-alamat">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="alamat" placeholder="Alamat Pengiriman">
									</div>

									<div class="bor8 bg0 m-b-12" id="form-email">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" name="email" placeholder="Email">
									</div>
									
									<div class="bor8 bg0 m-b-12" id="form-telepon">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="tel" name="telepon" placeholder="Nomor Telepon">
									</div>
										
								</div>
							</div>
							
							
						</div>
							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl2">
										Total:
									</span>
							
								</div>
								<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										 Rp{{ number_format($subtotal) }}
									</span>
								</div>
							</div>
							<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
								Proceed to Checkout
							</button>
						
						
					</div>
				</div>
			</div>
		</div>
</form>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const delivery = document.getElementById('delivery');
    const pickup = document.getElementById('pickup');

    function toggleFormFields() {
        const show = delivery.checked;
        document.getElementById('form-alamat').style.display = show ? 'block' : 'none';
        document.getElementById('form-email').style.display = show ? 'block' : 'none';
        document.getElementById('form-telepon').style.display = show ? 'block' : 'none';
    }

    delivery.addEventListener('change', toggleFormFields);
    pickup.addEventListener('change', toggleFormFields);

    toggleFormFields(); // initial state
});
</script>

@endsection