<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		.slick3-dots img {
    display: none !important;
}
	</style>
	@stack('styles')

<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						
					</div>

					<div class="right-top-bar flex-w h-full">
						

						<a href="/account" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>

						<a href="/logout" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="/">Home</a>
								
							</li>

							<li class="label1" data-label1="hot">
								<a href="/product">Product</a>
							</li>

							<li>
								<a href="/about">About</a>
							</li>

                            <li>
                                <a href="/order">My Order</a>
                            </li>

							<li>
								<a href="/contact">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

			
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="/account" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
	<main>

		@yield('content')
		
	</main>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

			
			</div>

			<div class="p-t-40">
				

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by  ica</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<!-- Tombol Close -->
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<!-- Gambar Produk -->
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" >
										<div class="wrap-pic-w pos-relative">
											<img src="" alt="IMG-PRODUCT" class="js-img-detail">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 js-img-link" href="">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Detail Produk -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Nama Produk
							</h4>

							<span class="mtext-106 cl2 js-price-detail">
								Rp 0
							</span>

							<p class="stext-102 cl3 p-t-23 js-description-detail">
								Deskripsi produk akan tampil di sini.
							</p>

							<p class="stext-102 cl3 p-t-10 js-stock-detail">Stock: -</p>

							<!-- Tambah ke keranjang -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

						</div>
					</div> <!-- end detail -->
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="path/to/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	@stack('scripts')
<script>
		document.addEventListener('DOMContentLoaded', function () {
			
			const quickViewButtons = document.querySelectorAll('.js-show-modal1');
			const modal = document.querySelector('.js-modal1');

			quickViewButtons.forEach(button => {
				button.addEventListener('click', function (e) {
					e.preventDefault();

					// Ambil data dari atribut
					const nama = this.dataset.nama;
					const deskripsi = this.dataset.deskripsi;
					const harga = this.dataset.harga;
					const foto = this.dataset.foto;
					const stok = this.dataset.stok;

					// Update isi modal
					document.querySelector('.js-name-detail').textContent = nama;
					document.querySelector('.js-description-detail').textContent = deskripsi;
					document.querySelector('.mtext-106.cl2').textContent = 'Rp ' + harga;
					document.querySelector('.js-modal1 .gallery-lb img').src = foto;
					document.querySelector('.js-modal1 .gallery-lb a').href = foto;
					document.querySelector('.js-modal1 p.stext-102.cl3.p-t-10').textContent = 'Stock: ' + stok;

					// Tampilkan modal
					modal.classList.add('show-modal1');
				});
			});

			// Close modal
			const closeButtons = document.querySelectorAll('.js-hide-modal1');
			closeButtons.forEach(btn => {
				btn.addEventListener('click', function () {
					modal.classList.remove('show-modal1');
				});
			});
		});
</script>
	

<script>
		document.addEventListener('DOMContentLoaded', function () {
			document.querySelector('.js-addcart-detail').addEventListener('click', function () {
			
				const imgSrc = document.querySelector('.js-img-detail').getAttribute('src');
				const productName = document.querySelector('.js-name-detail').textContent;
				const productPriceText = document.querySelector('.js-price-detail').textContent;
				const qty = parseInt(document.querySelector('input[name="num-product"]').value);

				const price = parseFloat(productPriceText.replace(/[^0-9]/g, ''));


				const cartItem = document.createElement('li');
				cartItem.classList.add('header-cart-item', 'flex-w', 'flex-t', 'm-b-12');
				cartItem.innerHTML = `
					<div class="header-cart-item-img">
						<img src="${imgSrc}" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							${productName}
						</a>

						<span class="header-cart-item-info">
							${qty} x ${formatRupiah(price)}
						</span>
					</div>
				`;
				document.querySelector('.header-cart-wrapitem').appendChild(cartItem);
				updateCartTotal();
				updateCartCount();
			});

			function updateCartTotal() {
				let total = 0;
				const items = document.querySelectorAll('.header-cart-item');

				items.forEach(item => {
					const infoText = item.querySelector('.header-cart-item-info').textContent;
					const match = infoText.match(/(\d+)\s*x\s*Rp\.?\s?([\d.,]+)/);
					if (match) {
						const qty = parseInt(match[1]);
						const price = parseInt(match[2].replace(/[^\d]/g, ''));
						total += qty * price;
					}
				});

				document.querySelector('.header-cart-total').textContent = `Total: ${formatRupiah(total)}`;
			}

			function updateCartCount() {
				let count = 0;
				const items = document.querySelectorAll('.header-cart-item');

				items.forEach(item => {
					const infoText = item.querySelector('.header-cart-item-info').textContent;
					const match = infoText.match(/(\d+)\s*x\s*Rp\.?\s?([\d.,]+)/);
					if (match) {
						count += parseInt(match[1]);
					}
				});

				const cartIcon = document.querySelector('.js-show-cart');
				if (cartIcon) {
					cartIcon.setAttribute('data-notify', count);
				}
			}

			function formatRupiah(angka) {
				return new Intl.NumberFormat('id-ID', {
					style: 'currency',
					currency: 'IDR',
					minimumFractionDigits: 0
				}).format(angka);
			}
		});
</script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		document.getElementById('checkoutBtn').addEventListener('click', function () {
			const items = document.querySelectorAll('.header-cart-item');
			const cartData = [];

			items.forEach(item => {
				const name = item.querySelector('.header-cart-item-name').textContent;
				const info = item.querySelector('.header-cart-item-info').textContent;
				const img = item.querySelector('img').getAttribute('src');

				const match = info.match(/(\d+)\s*x\s*Rp\.?\s?([\d.,]+)/);
				if (match) {
					const qty = parseInt(match[1]);
					const price = parseInt(match[2].replace(/[^\d]/g, ''));
					cartData.push({
						name: name,
						quantity: qty,
						price: price,
						image: img
					});
				}
			});

			// Kirim ke server
			fetch('/checkout', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Laravel CSRF
				},
				body: JSON.stringify({cart: cartData})
			})
			.then(response => response.json())
			.then(data => {
				alert('Checkout berhasil!');
				// Kosongkan cart kalau perlu
				document.querySelector('.header-cart-wrapitem').innerHTML = '';
				updateCartTotal();
				updateCartCount();
			})
			.catch(error => {
				console.error('Error:', error);
			});
		});
	});
</script>


<script>
	window.addEventListener('load', function () {
		document.querySelector('.header-cart-wrapitem').addEventListener('click', function (e) {
			if (e.target.closest('.header-cart-item-img')) {
				const cartItem = e.target.closest('.header-cart-item');
				if (cartItem) {
					cartItem.remove();
				}
			}
		});
	});

</script>
@stack('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  	function loadChatHistory() {
		$.get('/user/chat-history', function (data) {
			$('#chatMessages').html('');
			data.forEach(chat => {
				let align = chat.sender === 'user' ? 'text-end' : 'text-start';
				let badgeClass = chat.sender === 'user' ? 'bg-primary' : 'bg-secondary';
				$('#chatMessages').append(`<div class="${align} mb-2"><span class="badge ${badgeClass}">${chat.message}</span></div>`);
			});
			$('#chatMessages').scrollTop($('#chatMessages')[0].scrollHeight);
		});
	}

	$('#chatModal').on('shown.bs.modal', loadChatHistory);

	$('#chatForm').submit(function (e) {
		e.preventDefault();
		let message = $('#messageInput').val();

		$.post('/user/send-message', { message: message, _token: '{{ csrf_token() }}' }, function () {
			loadChatHistory();
			$('#messageInput').val('');
		});
	});

</script>

</body>
</html>