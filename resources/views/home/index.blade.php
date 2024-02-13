@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
        <section class="banner">
			<div class="content-banner">
				<a href="#">Buy now</a>
            	<a href="">Create Routine</a>
			</div>
		</section>

		<main class="main-content">
			<section class="container-features">
            <div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Customized Routines</span>
						<p>Totally adjusted to your needs and goals</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Free Shipping Worldwide</span>
						<p>For over $150 orders</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Refund Warranty</span>
						<p>Within 30 days after receiving the package</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Place your purchase 24/7</span>
						<p>Whenever you want, wherever you are!</p>
					</div>
				</div>
			</section>

			<section class="categories">
				<h1>Categories</h1>
				<div class="container-categories">

				    <a class="card-category category-trainig" href="">
						<p>Training</p>
					</a>
					

					<a class="card-category category-accessories" href="">
						<p>Accessories</p>
					</a>

					<a class="card-category category-textile" href="">
						<p>Textile</p>
					</a>

				</div>
			</section>

		

			<section class="top-products">
				<h1 class="heading-1">Top Products</h1>

				<div class="container-options">
					<span>Best Sellers</span>
					<span>Most Recent</span>
				</div>

				<div class="container-products">
			
					<div class="card-product">
						<img src="../../../public/img/category-accessories.jpg" alt="Dumbells" />
						<div class="content-card-product">
							<h3>Dumbells</h3>
							<div class="price-content">
								<i class="fa-solid fa-basket-shopping"></i>
								<p class="price">$4.60 </p>
							</div>
							
						</div>
					</div>
					
					
				</div>
			</section>

			
		</main>


		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
@endsection
