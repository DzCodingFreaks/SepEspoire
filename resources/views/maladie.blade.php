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
			
			<!-- Content -->
			<div class="content clearfix">

				<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 small bkg-gradient-custom-blue color-white">
						<div class="row">
							<div class="column width-12">
								<div class="title-container">
									<div class="title-container-inner">
										<div class="row flex">
											<div class="column width-6 v-align-middle">
												<div>
													<h2 class="mb-0">Maladie</h1>
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
															Maladie
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
				<!-- Feature Section 2 -->
				<div class="section-block feature-2">
					<div class="row flex">
						<div class="column width-6 push-5 offset-1">
							<div class="feature-image mb-mobile-50">
								<div class="feature-image-inner center-on-mobile horizon" data-animate-in="preset:slideInRightShort;duration:1000;" data-threshold="0.6">
									<img src="{{asset('images/hero_maladie1.jpg')}}" alt="" />
								</div>
							</div>
						</div>
						<div class="column width-5 pull-7">
							<div class="feature-content">
								<div class="feature-content-inner horizon" data-animate-in="preset:slideInUpShort;duration:1000;delay:300ms;" data-threshold="0.6">
									<h2 class="mb-30">C'est quoi la SEP?</h2>
									<p class="text-large mb-10">La sclérose en plaques est actuellement considérée comme une maladie auto-immune qui s’attaque au système nerveux central (cerveau, moelle épinière et nerfs optiques). Elle prend pour cible la myéline, gaine protectrice des fibres nerveuses, provoquant de l’inflammation qui entraîne souvent la détérioration de cette substance. La myéline est essentielle à la propagation de l’influx nerveux. Si elle n’est que légèrement détériorée, l’influx se transmet sans trop d’interruptions. Par contre, si la détérioration est importante et si la myéline est remplacée par du tissu cicatriciel, l’influx peut être complètement bloqué, et les fibres nerveuses risquent d’être elles-mêmes altérées.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Feature Section 2 End -->




				<!-- Accordions Style Default -->
				<div class="section-block replicable-content bkg-grey-ultralight">
					<div class="row">
						<div class="column width-4">
							<h3 class="mb-50" style="width:100%; position:relative;">Connaitre plus</h3>
						</div>
						<div class="column width-8">
							<div class="accordion rounded mb-50">
								<ul>
									<li class="active">
										<a href="#accordion-1-panel-1">Formes</a>
										<div id="accordion-1-panel-1">
											<div class="accordion-content">
												<p class="lead mb-20">Il existe plusieurs formes de SEP:</p>
												<ul>												
													<li>Syndrome clinique isolé</li>
													<li>SEP cyclique (poussées-rémissions)</li>
													<li>SEP progressive secondaire</li>
													<li>SEP progressive primaire	</li>
												</ul>
												<br>
												<p>La forme la plus précoce de la SEP est appelée « syndrome clinique isolé (SCI) ». Elle consiste en un épisode unique de symptômes neurologiques évoquant la sclérose en plaques. Souvent, à l’examen des clichés obtenus par IRM, le médecin décèlera la présence d’une seconde anomalie dans le cerveau ou la moelle épinière du patient. La survenue de plusieurs poussées signe la présence de la forme cyclique (poussées-rémissions) de SEP, soit le type d’évolution le plus répandu au moment du diagnostic.
														La forme cyclique (poussées-rémissions) également appelée « SEP récurrente-rémittente », se caractérise par des poussées imprévisibles clairement définies (également appelées « crises » ou « attaques ») qui entraînent l’apparition de nouveaux symptômes ou l’aggravation de symptômes existants.
												</p>
											</div>
										</div>
									</li>
									<li>
										<a href="#accordion-1-panel-2">Causes</a>
										<div id="accordion-1-panel-2">
											<div class="accordion-content">
												<p class="lead mb-20">Quelles sont les causes des symptômes de la SEP?</p>
												<p>La SEP prend pour cible la myéline, soit la couche protectrice des fibres nerveuses du système nerveux central (SNC), entraînant de l’inflammation qui provoque souvent la détérioration de cette substance sous forme de plaques. Le cas échéant, la propagation de l’influx nerveux le long des fibres nerveuses (axones) est bloquée ou perturbée. La grande diversité des symptômes de la SEP pourrait s’expliquer par le fait que la détérioration qui s’ensuit peut survenir dans n’importe quelle région du SNC. Les personnes atteintes de SEP ne présentent pas tous les symptômes de cette maladie, et il arrive souvent que ces derniers s’atténuent lors des rémissions.
														Il existe de nombreuses méthodes de traitement des symptômes de la SEP allant de médicaments à des stratégies non médicales telles que la physiothérapie, l’ergothérapie, l’exercice et les thérapies complémentaires et parallèles. Vous trouverez ci-dessous la liste des symptômes les plus fréquents de la SEP.
												</p>
												<div class="row">
													<div class="row flex">
														<div class="column width-6 v-align-middle">
															<ul>												
																<li>Troubles de l’équilibre et étourdissements</li>
																<li>Troubles vésicaux/urinaires</li>
																<li>Troubles intestinaux</li>
																<li>Troubles cognitifs</li>
																<li>Dépression</li>
																<li>Fatigue</li>
																<li>Troubles de la locomotion</li>
																<li>Névrite optique</li>
															</ul>
														</div>
														<div class="column width-6 v-align-middle">
															<ul>												
																<li>Douleur</li>
																<li>Symptômes paroxystiques</li>
																<li>Troubles de la sensibilité</li>
																<li>Troubles sexuels</li>
																<li>Spasticité (voir également « Douleur »)</li>
																<li>Tremblement</li>
																<li>Phénomène d’Uhthoff (intolérance à la chaleur)</li>
																<li>Faiblesse</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<a href="#accordion-1-panel-3">Symptomes</a>
										<div id="accordion-1-panel-3">
											<div class="accordion-content">
												<p class="lead mb-20">Les symptomes de la SEP:</p>
												<p>Les symptômes de la sclérose en plaques sont imprévisibles et très variables d’une personne à l’autre et parfois même chez une même personne, d’une journée ou d’une semaine à l’autre.</p>
												<p class="lead mb-20">Les symptomes de la SEP:</p>
												<ul>												
													<li>Dysarthrie ou difficulté de l’élocution</li>
													<li>Dysphagie (difficulté de déglutition)</li>
													<li>Sécheresse de la bouche</li>
													<li>Influence hormonale chez les femmes atteintes de SEP</li>
													<li>Expression d’émotions inappropriées</li>
													<li>Troubles de la coordination ou incoordination</li>
													<li>Labilité émotionnelle/trouble bipolaire.</li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<a href="#accordion-1-panel-3">Traitements</a>
										<div id="accordion-1-panel-3">
											<div class="accordion-content">
												<p class="lead mb-20">Comment traiter la SEP?</p>
												<p>Les médicaments prescrits dans le cadre de la prise en charge de la SEP peuvent être répartis en plusieurs catégories et agir sur l’évolution de la maladie ou sur les symptômes de celle-ci. On recommande aux personnes atteintes de SEP qui explorent les options offertes quant à la prise en charge de cette maladie de rester en étroite communication avec leur équipe soignante.</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Accordions Style Default -->

				<!-- Feature Section 2 -->
				<div class="section-block feature-2 right">
					<div class="row flex">
						<div class="column width-6">
							<div class="feature-image">
								<div class="feature-image-inner center-on-mobile horizon" data-animate-in="preset:slideInLeftShort;duration:1000;" data-threshold="0.6">
									<img src="{{asset('images/hero_maladie2.jpg')}}" alt="" />
								</div>
							</div>
						</div>
						<div class="column width-5 offset-1">
							<div class="feature-content">
								<div class="feature-content-inner left horizon" data-animate-in="preset:slideInUpShort;duration:1000;delay:300ms;" data-threshold="0.6">
									<h2 class="mb-30">Mieux-être et mode de vie</h2>
									<div class="row">
										<div class="column width-12" style="overflow-y:scroll; height:500px;">
											<p class="text-large mb-10">L’adoption de bonnes habitudes de vie constitue pour les personnes aux prises avec la SEP l’une des façons les plus importantes de prendre en charge la maladie dont elles sont atteintes. Certaines stratégies peuvent notamment leur permettre d’améliorer leur qualité de vie, tels des programmes d’exercices, une alimentation saine, la physiothérapie, la réadaptation, la massothérapie, des tactiques favorisant le sommeil, des techniques de réduction du stress, une planification appropriée permettant l’atteinte d’un équilibre travail-vie personnelle ainsi que diverses autres approches axées sur le mieux-être. Ces stratégies non médicales jouent un rôle clé dans la prise en charge de toutes les formes de SEP. En fait, le maintien d’un bon équilibre dans la vie en général constitue le fondement d’une prise en charge adéquate de la SEP.
													Diverses équipes de chercheurs explorent actuellement les façons dont le mode de vie pourrait contribuer à l’apparition de la SEP et même aggraver cette maladie. Maintenir un poids santé, ne pas fumer et faire vérifier son taux de vitamine D constituent des mesures proactives visant à prévenir les poussées de SEP ainsi qu’à ralentir la progression de la maladie. Veuillez vous reporter à la section « Recherche » pour accéder à la liste des études portant sur ce type de stratégie.
													Outre l’adoption d’un mode de vie sain, il existe une variété de médecine qui peuvent limiter l’inflammation à l’origine de la détérioration du tissu nerveux et réduire la fréquence et la gravité des poussées de SEP. Freiner la détérioration neuronale peut aussi prévenir l’aggravation des incapacités observée au cours de l’évolution de la SEP. Un traitement précoce est essentiel dans le cas des personnes qui viennent de recevoir un diagnostic de SEP cyclique (poussées-rémissions).
											</p>
											<ul>												
												<li>Alimentation</li>
												<li>Exercice</li>
												<li>Gestion du stress</li>
											</ul>		
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Feature Section 2 End -->


			</div>
            <!-- Content End -->
			



			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>
	@include('includes.modal')
	<!-- JS -->
	@include('includes.jsfiles')
</body>
</html>