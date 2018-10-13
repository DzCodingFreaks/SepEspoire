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
                                                <h2 class="mb-0">Nos services</h1>
                                                <p class="lead mb-0 mb-mobile-20"></p>
                                            </div>
                                        </div>
                                        <div class="column width-6 v-align-middle">
                                            <div>
                                                <ul class="breadcrumb inline-block mb-0 pull-right clear-float-on-mobile">
                                                    <li>
                                                        <a href="index.html">Accueil</a>
                                                    </li>
                                                    <li>
                                                        Services
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
            </div>

            <!-- Nos services -->
            <div class="section-block replicable-content bkg-white">
					<div class="row flex">
						<div class="column width-6">
							<div class="feature-column">
								<h2 class="title-medium mb-5 weight-light font-alt-1" style="color:#246AA0;">Pharmacie.</h2>
								<h4 class="mb-30">Une pharmacie gratuite</h4>
								<p>La SEP ESPOIR met à la disposition de ses chers membres une pharmacie gratuite disponible à tout moment.</p>
							</div>
						</div>
						<div class="column width-6">
							<div class="feature-column">
								<h2 class="title-medium mb-5 weight-light font-alt-1" style="color:#246AA0;">Convention et réduction.</h2>
                                <h4 class="mb-30">Plusieurs labos et machines</h4>
                                <ul>
                                    <li>
                                        Des conventions et réductions faites spécialement à nos membres avec les laboratoires qui nous procures l’avancement et l’aide adéquats tel que : IRM/SCANNER/RADIOLOGIE.
                                    </li>
                                    <li>
                                        Des conventions aussi avec les laboratoires de biologies.
                                    </li>
                                    <li>
                                        On vous fournis les documents nécessaires.
                                    </li>
                                </ul>
							</div>
						</div>
					</div>
			</div>
            <!-- End services -->


            <!-- Dossiers -->
            <div id="services" class="section-block replicable-content in-view bkg-grey-ultralight">
					<div class="row">
						<div class="column width-3">
							<h2 class="mb-0" style="width:100%; position:relative;">Carte handicapé et carte shifaa <span class="underlined-left-doubled"></span></h2>
						</div>
						<div class="column width-8 offset-1">
							<div class="row">
								<div class="column width-12">
                                    <p class="lead mb-50">Déposer le dossier nécessaire en tant que membre de l’association et atteint de la SEP pour bénéficier d’une carte d’handicapé et carte shifaa.</p>
                                    <h3 class="mb-50 weight-semi-bold">Dossiers a fournir</h3>
								</div>
							</div>
							<div class="row flex">
								<div class="column width-6">
                                    <h4 class="mb-30 weight-semi-bold">Carte d’handicapé</h4>
                                    <ul>
                                        <li>Le questionnaire médical dûment remplis.</li>
                                        <li>Certificat médical.</li>
                                        <li>Extrait de naissance.</li>
                                        <li>Résidence.</li>
                                        <li>Fiche familiale ou individuel.</li>
                                        <li>Copie de la CNI.</li>
                                        <li>02 photos plus photos Grand format.</li>
                                        <li>Chèque CCP barré.</li>
                                    </ul>
								</div>
								<div class="column width-6">
									<h4 class="mb-30 weight-semi-bold">Carte shifaa</h4>
                                    <li>Carte d’handicapé.</li>
                                    <li>Photocopie de la pièce d’identité.</li>
                                    <li>Une extrait de naissance 12.</li>
                                    <li>02 photos spéciales carte shifaa (fond blanc).</li>
                                    <li>Domaine sportif et divertissement.</li>
								</div>
							</div>
						</div>
					</div>
			</div>
            <!-- End Dossiers -->


            <!-- Sport -->
            <div id="services" class="section-block replicable-content in-view">
					<div class="row">
						<div class="column width-3">
							<h2 class="mb-0" style="width:100%; position:relative;">SEP ESPOIR<br>Bien être<span class="underlined-left-doubled"></span></h2>
						</div>
						<div class="column width-8 offset-1">
							<div class="row">
								<div class="column width-12">
                                    <p class="lead mb-50">On a également  pensé aussi a votre forme et bien être.
                                            On vous propose ainsi des divers activités sportives tel que :
                                            </p>
								</div>
							</div>
							<div class="row flex">
								<div class="column width-6">
                                    <h4 class="mb-30 weight-semi-bold">Des séances d’aqua jim</h4>
                                    <ul>
                                        <li>On met à votre disposition des séances d’aqua jim assisté par un coach professionnel afin que vous puissiez  pratiquer et vous détendre.</li>
                                    </ul>
								</div>
								<div class="column width-6">
                                    <h4 class="mb-30 weight-semi-bold">Des séances de YOGA</h4>
                                    <ul>
                                        <li>En effet la relaxation moral est une chose très importante pour avancer dans votre traitement voila pour quoi nos séances de YOGA vous seront organisées.</li>
                                        <li>Des séances d’Aïkido :
                                                    Nos séance d’Aïkido pour votre amélioration et développement de santé, assisté par un personnel professionnel.
                                        </li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
			</div>
            <!-- End Sport -->


			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>

	<!-- Js -->
	@include('includes.jsfiles')
</body>
</html>