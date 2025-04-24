@extends('layout.master-user')

@section('title', 'Product')


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
					All Products
				</button>

				@foreach ($kategoris as $kategori)
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ Str::slug($kategori) }}">
						{{ ucfirst($kategori) }}
					</button>
				@endforeach
			</div>
		</div>


			<div class="row isotope-grid">
				@foreach($products as $product)
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ Str::slug($product->kategori) }}">

						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ asset('storage/products/' . $product->foto) }}">

								<a href="#" 
										class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"
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

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l">
									<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{ $product->product }}
									</a>

									<span class="stext-105 cl3">
										Rp {{ number_format($product->harga, 0, ',', '.') }}
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
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