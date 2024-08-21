@extends('frontend.layouts.app')

@section('title')
Company Overview- {{ app_name() }}
@endsection

@section('content')

<section class="page-header page-header-modern bg-color-tertiary page-header-md">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="">Company <strong>Overview</strong></h1>
			</div>
			<div class="col-md-4 order-1 order-md-2 align-self-center">
				<ul class="breadcrumb d-block text-md-right breadcrumb-light">
					<li><a href="#">Home</a></li>
					<li class="active">Company Overview</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--  Section -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="outer">
				<div class="company_card">
					<h2>Company Overview</h2>
					<div id="companyOverview">
						<ul class="info-list">
							<li><strong>Total Manpower:</strong> 15,000 persons</li>
							<li><strong>Annual Export Last Year:</strong> $140 million</li>
							<li><strong>Annual Export This Year (Expected):</strong> $175 million</li>
						</ul>
					</div>

					<div class="line topl"></div>
					<div class="line leftl"></div>
					<div class="line bottoml"></div>
					<div class="line rightl"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="outer">
				<div class="company_card">
					<h2>Garments Division (Production Capacity)</h2>
					<div id="companyOverview">
						<ul class="info-list">
							<li><strong>Light Knit:</strong> 5 million pieces/month</li>
							<li><strong>Undergarments:</strong> 2.5 million/month</li>
							<li><strong>Total Production Lines:</strong> 156 lines</li>
							<li><strong>No of Sewing Machines:</strong> 4200 nos</li>
						</ul>
					</div>

					<div class="line topl"></div>
					<div class="line leftl"></div>
					<div class="line bottoml"></div>
					<div class="line rightl"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6 mt-2">
			<div class="outer">
				<div class="company_card">
					<h2>Textile Division (Production Capacity Per Day)</h2>
					<div id="companyOverview">
						<ul class="info-list">
							<li><strong>Knitting:</strong> 50 MT with 235 machines</li>
							<li><strong>Dyeing:</strong> 50 MT</li>
							<li><strong>Finishing:</strong> 50 MT</li>
						</ul>
					</div>

					<div class="line topl"></div>
					<div class="line leftl"></div>
					<div class="line bottoml"></div>
					<div class="line rightl"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6 mt-2">
			<div class="outer">
				<div class="company_card">
					<h2>Accessories Division</h2>
					<div id="companyOverview">
						<ul class="info-list">
							<li><strong>The Plasticman Ltd.:</strong> Produce all accessories required for <br> total garments solution.</li>
							<li><strong>Kitway Pack (Pvt) Ltd.:</strong> Fully automated carton factory.</li>
						</ul>
					</div>

					<div class="line topl"></div>
					<div class="line leftl"></div>
					<div class="line bottoml"></div>
					<div class="line rightl"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-2">
			<div class="outer">
				<div class="company_card">
					<h2>ABUL KALAM SPINNING MILLS LTD.</h2>
					<div id="companyOverview">
						<ul class="info-list">
							<li><strong>Number of Spindles :</strong> 110,000</li>
							<li><strong>Daily Production Capacity of Spun Yarn :</strong>73,000 kg Spun Yarn <br>(Combed, Carded, Cotton Melange, PC and
								CVC) & 15,000 kg Open End</li>
						</ul>
					</div>

					<div class="line topl"></div>
					<div class="line leftl"></div>
					<div class="line bottoml"></div>
					<div class="line rightl"></div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection