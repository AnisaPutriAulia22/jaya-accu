@extends('layout.master-user')

@section('title', __('product.title'))


@section('content')

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

			<div class="header-cart flex-col-l p-l-65 p-r-25">
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
					<span class="mtext-103 cl2">
						Your Cart
					</span>

					<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
						<i class="zmdi zmdi-close"></i>
					</div>
				</div>
				
				<div class="header-cart-content flex-w js-pscroll">
					<ul class="header-cart-wrapitem w-full">
						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="" alt="">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								
								</a>

								<span class="header-cart-item-info">
							
								</span>
							</div>
						</li>

					

					
					</ul>
					
					<div class="w-full">
						<div class="header-cart-total w-full p-tb-40">
							Total: 
						</div>

						<div class="header-cart-buttons flex-w w-full">
							

							<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
								Check Out
							</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					{{ __('product.all')}}
				</button>

					@foreach ($kategoris as $kategori)
						@php
							$slug = Str::slug($kategori); // contoh: "Aki Mobil" -> "aki-mobil"
						@endphp
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $slug }}">
							{{ __('product.' . $slug) }}
						</button>
					@endforeach
			</div>
		</div>


			<div class="row isotope-grid">
				@foreach($products as $index => $product)
						@php
							$isHidden = $index >= 8 ? 'd-none load-more-item' : '';
						@endphp
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ Str::slug($product->kategori) }}">

							<!-- Block2 -->
							<div class="block2" style="border: 1px solid #ccc; padding: 10px; border-radius: 8px; height: 400px;">
								<div class="block2-pic hov-img0">
									<img src="{{ asset('storage/products/' . $product->foto) }}">

									<a href="#" 
										class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 text-decoration-none"
										data-id="{{ $product->id }}"
										data-nama="{{ $product->product }}"
										data-deskripsi="{{ $product->deskripsi }}"
										data-harga="{{ number_format($product->harga, 0, ',', '.') }}"
										data-foto="{{ asset('storage/products/' . $product->foto) }}"
										data-stok="{{ $product->Stock }}"
										>
										Quick View
									</a>

								</div>

								<div class="block2-txt flex-w flex-t p-t-14" >
									<div class="block2-txt-child1 flex-col-l">
										<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-decoration-none">
											{{ $product->product }}
										</a>

										<span class="stext-105 cl3">
											Rp {{ number_format($product->harga, 0, ',', '.') }}
										</span>
									</div>

									<div class="block2-txt-child2 flex-r p-t-3">
										
									
									<!-- Trigger modal -->
									<a href="#" class="btn-addwish-b2 d-block position-relative" data-bs-toggle="modal" data-bs-target="#chatModal">
										<i class="fa-regular fa-comment" style="font-size: 24px; color: #6c757d;"></i>
									</a>

									<!-- Modal Chat -->
									<div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-scrollable">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Chat dengan Admin</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<div id="chatMessages" style="max-height: 300px; overflow-y: auto;">
														<!-- History chat user-admin akan di-load di sini -->
													</div>
													<form id="chatForm">
														<div class="input-group mt-3">
															<input type="text" class="form-control" id="messageInput" placeholder="Ketik pesan..." required>
															<button class="btn btn-primary" type="submit">Kirim</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>



									</div>
								</div>
							</div>
						</div>
				@endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<button id="loadMoreBtn" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					{{ __('product.load-more')}}
				</button>
			</div>

		</div>
	</div>
	
@endsection
@push('scripts')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var iso = new Isotope('.isotope-grid', {
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows'
            });

            const filterButtons = document.querySelectorAll('.filter-tope-group button');

            filterButtons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    filterButtons.forEach(b => b.classList.remove('how-active1'));
                    this.classList.add('how-active1');

                    let filterValue = this.getAttribute('data-filter');
                    iso.arrange({ filter: filterValue });
                });
            });
        });
    </script>
@endpush