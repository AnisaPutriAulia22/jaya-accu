@extends('layout.master-user')

@section('title', 'Contact')

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
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
			
				<div class="w-full max-w-[900px] h-[300px] bg-white border border-gray-300 rounded-lg flex flex-col p-4 md:px-16 md:py-8 mx-auto pl-10">

					<!-- Address -->
					<div class="grid grid-cols-[auto_1fr] gap-x-6 w-full mb-12 items-start">
						<span class="text-2xl text-gray-500 text-center" style="margin-left: 166px">
							<span class="lnr lnr-map-marker"></span>
						</span>
						<div>
							<h5 class="text-xl font-semibold text-gray-800">Address</h5>
							<p class="text-base text-gray-600 mt-4">
							Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
							</p>
						</div>
					</div>



					<!-- Let's Talk -->
					<div class="grid grid-cols-[auto_1fr] gap-x-6 w-full mb-12 items-start">
						<span class="text-2xl text-gray-500 text-center mr-6 flex-shrink-0" style="margin-left: 166px">
							<span class="lnr lnr-phone-handset"></span>
						</span>
						<div class="ml-20">
							<h5 class="text-xl font-semibold text-gray-800">Let's Talk</h5>
							<p class="text-base text-blue-500 mt-4">+1 800 1236879</p>
						</div>
					</div>

					<!-- Sale Support -->
					<div class="grid grid-cols-[auto_1fr] gap-x-6 w-full mb-12 items-start">
						<span class="text-2xl text-gray-500 text-center mr-6 flex-shrink-0" style="margin-left: 166px">
						<span class="lnr lnr-envelope"></span>
						</span>
						<div class="ml-20">
						<h5 class="text-xl font-semibold text-gray-800">Sale Support</h5>
						<p class="text-base text-blue-500 mt-4">contact@example.com</p>
						</div>
					</div>

				</div>



			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>


@endsection