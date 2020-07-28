@if(isset($navWidjets))
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				@foreach($navWidjets as $nav)
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('electro/img/'.$nav->img) }}" alt="{{ $nav->name }}">
							</div>
							<div class="shop-body">
								<h3>{{ $nav->name }}<br>Collection</h3>
								<a href="{{ route($nav->nav_id->link) }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				@endforeach
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
@endif