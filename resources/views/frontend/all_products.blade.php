@extends('frontend.layouts.app')

@section('title')
All Products - {{ app_name() }}
@endsection

@section('content')

<section class="page-header page-header-modern bg-color-tertiary page-header-md">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class=""><strong>PRODUCTS OF GARMENTS </strong></h1>
			</div>
			<div class="col-md-4 order-1 order-md-2 align-self-center">
				<ul class="breadcrumb d-block text-md-right breadcrumb-light">
					<li><a href="#">Home</a></li>
					<li class="active">Products</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--  Section -->
<section class="pb-5">
	<div class="container">
		<section class="call-to-action featured featured-quaternary mb-5">
			<div class="col-sm-12 col-lg-12 col-md-12">
				<div class="call-to-action-content">
					<h3> <strong class="font-weight-extra-bold">Men's Garments Product</strong></h3>

				</div>
			</div>
		</section>
		<div class="row">
			<div class="col-lg-12">
				<div class="masonry-loader masonry-loader-showing">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
										<img height="300" alt="product33" src="{{asset('img/products/mens_product/product33.png')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
										<img height="300" alt="product33" src="{{asset('img/products/mens_product/product33.png')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
										<img height="300" alt="product33" src="{{asset('img/products/mens_product/product33.png')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="divider divider-style-4 taller appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
			<i class="fas fa-chevron-down"></i>
		</div>

		<section class="call-to-action featured featured-secondary mb-5">
			<div class="col-sm-12 col-lg-12 col-md-12">
				<div class="call-to-action-content">
					<h3> <strong class="font-weight-extra-bold">Ladies Garments Product</strong></h3>

				</div>
			</div>
		</section>

		<div class="row">
			<div class="col-lg-12">
				<div class="masonry-loader masonry-loader-showing">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
										<img height="300" alt="product33" src="{{asset('img/products/ladies_product/ladies3.jpg')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
										<img height="300" alt="product33" src="{{asset('img/products/ladies_product/w6.png')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4 product">
							<div class="card box-shadow1">
								<span class="product-thumb-info border-0">
									<a href="#">
										<span class="product-thumb-info-image">
											<img height="300" alt="product33" src="{{asset('img/products/ladies_product/ladies5.jpg')}}">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="#">
											<h4 class="text-4 text-primary">T-Shirt</h4>
										</a>
									</span>
								</span>
							</div>
						</div>


					</div>

				</div>
			</div>
		</div>
	</div>
</section>

@endsection