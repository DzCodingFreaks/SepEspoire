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
												<h2 class="mb-0">Article</h1>
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
														Article
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
			
			<div class="row">
				<!-- Content Inner -->
				<div class="column width-10 offset-1 content-inner blog-single-post">
						@yield('content')
						<div id="disqus_thread"></div>
				</div>
			</div>


			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>
    @include('includes.modal')
	<!-- Js -->            
	@include('includes.jsfiles')
		<script>
		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		var disqus_config = function () {
		this.page.url = document.URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier =   document.getElementById("article_date").innerHTML + '-' + document.getElementById("article_slug").innerHTML; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};

		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://sepespoir.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                       
</body>
</html>