<!DOCTYPE html>
<html lang="zxx">
@include('includes.head')
<body class="shop home-page">

	<!-- Side Navigation Menu -->
	@include('includes.sidemenu')
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			@include('includes.header')
            <!-- Header End -->

				<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 small bkg-gradient-custom-blue color-white">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<div class="row flex">
										<div class="column width-6 v-align-middle">
											<div>
												<h2 class="mb-0">Blog</h1>
												<p class="lead mb-0 mb-mobile-20"></p>
											</div>
										</div>
										<div class="column width-6 v-align-middle">
											<div>
												<ul class="breadcrumb inline-block mb-0 pull-right clear-float-on-mobile">
													<li>
														<a href="{{route('home')}}">Accueil</a>
													</li>
													<li>
														Blog
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- Intro Title Section 1 End -->


			 @yield('content')


			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>
    @include('includes.modal')
	<!-- Js -->
	@include('includes.jsfiles')
</body>
</html>