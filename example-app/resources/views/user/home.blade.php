@extends('layout.master-user')

@section('title', __('home.title'))

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

							<div class="header-cart-item-txt p-t-8" style="flex: 1; min-width: 0;">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04" style="display: block; white-space: normal; word-wrap: break-word; overflow-wrap: break-word;">
								
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
							

						<form action="/detail-belanja" method="GET">
							<button type="submit" 
									id="checkoutBtn" 
									class="flex-c-m stext-101 cl0 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10" 
									style="width: 300px;">
								Check Out
							</button>
						</form>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			

		<!-- Slider -->
		<section class="section-slide">
			<div class="wrap-slick1">
				<div class="slick1">
					<div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
									<span class="ltext-101 cl2 respon2">
										{{ __('home.aki-mobil')}}
									</span>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
										{{ __('home.aki-mobil')}}
									</h2>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 text-decoration-none">
										{{ __('home.shop')}}
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
									<span class="ltext-101 cl2 respon2">
										{{ __('home.aki-motor')}}
									</span>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
										{{ __('home.aki-motor')}}
									</h2>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 text-decoration-none">
										{{ __('home.shop')}}
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
									<span class="ltext-101 cl2 respon2">
										{{ __('home.aki-kapal')}}
									</span>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
										{{ __('home.aki-kapal')}}
									</h2>
								</div>
									
								<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
									<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 text-decoration-none">
										{{ __('home.shop')}}
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Banner -->
		<div class="sec-banner bg0 p-t-80 p-b-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/banner-01.jpg" alt="IMG-BANNER">

							<a href="/product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										{{ __('home.aki-motor')}}
									</span>

									<span class="block1-info stext-102 trans-04">
										{{ __('home.aki-motor')}}
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05 text-decoration-none">
									<div class="block1-link stext-101 cl0 trans-09 ">
										{{ __('home.shop')}}
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/banner-02.jpg" alt="IMG-BANNER">

							<a href="/product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										{{ __('home.aki-mobil')}} 
									</span>

									<span class="block1-info stext-102 trans-04">
										{{ __('home.aki-mobil')}}
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										{{ __('home.shop')}}
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="images/banner-03.jpg" alt="IMG-BANNER">

							<a href="/product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 text-decoration-none">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										{{ __('home.aki-kapal')}}
									</span>

									<span class="block1-info stext-102 trans-04">
										{{ __('home.aki-kapal')}}
									</span>
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										{{ __('home.shop')}}
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Product -->
		<section class="bg0 p-t-23 p-b-140">
			<div class="container">
				<div class="p-b-10">
					<h3 class="ltext-103 cl5">
						{{ __('home.available')}}
					</h3>
				</div>

				<div class="flex-w flex-sb-m p-b-52">
					<div class="flex-w flex-l-m filter-tope-group m-tb-10">
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
							{{ __('home.all')}}
						</button>

					@foreach ($kategoris as $kategori)
						@php
							$slug = Str::slug($kategori); 
						@endphp
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $slug }}">
							{{ __('home.' . $slug) }}
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
						{{ __('home.load-more')}}
					</button>
				</div>

			</div>
		</section>



@endsection