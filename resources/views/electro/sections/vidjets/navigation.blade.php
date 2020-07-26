@if(isset($navs))
<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
					@foreach($navs as $nav)
						<li class="{{ request()->routeIs($nav->link) ? 'active' : '' }}"><a href="{{ route($nav->link) }}">{{ $nav->name }}</a></li>
					@endforeach
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
@endif