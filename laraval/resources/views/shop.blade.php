@extends('layout')
@section('content')

    <!-- Start Product Section -->
     <h3 class="text-center">Our Products</h3>
     <hr>
     <br>

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

					@foreach($data as $p)

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="upload/{{$p->productfile}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$p->productname}}</h3>
							<strong class="product-price">${{$p->productprice}}</strong>

							<span class="icon-cross">
								<form action="/addtocart/{{$p->id}}" method="post">
									@csrf
                                  <button class="btn btn-primary btn-sm">Add to Cart</button>
								</form>
							</span>
						
							
							
						</a>
					</div> 
					<!-- End Column 1 -->
						
					@endforeach

		      	</div>
		    </div>
		</div>

@endsection
