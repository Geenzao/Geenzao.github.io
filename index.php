<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta lang="fr">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php
		$langue_par_defaut = 'fr';
		
		$bibliotheque = simplexml_load_file('languages.xml'); // Je charge le document dans la page html.
			
		$langue = $bibliotheque->$langue_par_defaut; // Je choisis dans quel nœud prendre les traductions (ici : fr).
	?>

	<title>Portfolio Quentin Lorenzo</title>


	<!--=====================================================
			CSS Stylesheets
		=====================================================-->
	<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='css/linea.css'>
	<link rel='stylesheet' type='text/css' href='css/ionicons.min.css'>
	<link rel='stylesheet' type='text/css' href='css/owl.carousel.css'>
	<link rel='stylesheet' type='text/css' href='css/magnific-popup.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

</head>

<body>


	<!--=====================================================
			Preloader
		=====================================================-->
	<div id='preloader'>
		<div class='loader'></div>
		<div class='left'></div>
		<div class='right'></div>
	</div>


	<div class='main-content'>

		<!--=====================================================
				Page Borders
			=====================================================-->
		<div class='page-border border-left'></div>
		<div class='page-border border-right'></div>
		<div class='page-border border-top'></div>
		<div class='page-border border-bottom'></div>



		<!--=====================================================
				Menu Button
			=====================================================-->
		<a href='#' class='menu-btn'>
			<span class='lines'>
				<span class='l1'></span>
				<span class='l2'></span>
				<span class='l3'></span>
			</span>
		</a>


		<!--=====================================================
				Menu
			=====================================================-->
		<div class='menu'>
			<div class='inner'>
				<ul class='menu-items'>

					<li>
						<a href='#' class='section-toggle' data-section='intro'>
							<?php echo $langue->intro; ?>
						</a>
					</li>

					<li>
						<a href='#about' class='section-toggle' data-section='about'>
						<?php echo $langue->about; ?>
						</a>
					</li>


					<li>
						<a href='#portfolio' class='section-toggle' data-section='portfolio'>
							Projets
						</a>
					</li>

					<li>
						<a href='#green_it' class='section-toggle' data-section='green_it'>
							Green IT
						</a>
					</li>

					<li>
						<a href='#contact' class='section-toggle' data-section='contact'>
							Contacts
						</a>
					</li>

				</ul>
			</div>
		</div>

		<div class='animation-block'></div>


		<!--=====================================================
				Sections
			=====================================================-->
		<div class='sections'>

			<!--=====================================================
					Main Section
				=====================================================-->
			<section id='intro' class='section section-main active'>

				<div class='container-fluid'>

					<div class='v-align'>
						<div class='inner'>
							<div class='intro-text'>

								<h1>Quentin lorenzo</h1>

								<p>
									Un Programmeur Gameplay
								</p>

								<div class='intro-btns'>

									<a href='#about' class='btn-custom section-toggle' data-section='about'>
										à propos de moi
									</a>

									<a href='#contact' class='btn-custom section-toggle' data-section='contact'>
										Contactez moi
									</a>

								</div>

							</div>
						</div>

					</div>

				</div>

			</section>


			<!--=====================================================
					About Section
				=====================================================-->
			<section id='about' class='section about-section border-d'>

				<div class='section-block about-block'>
					<div class='container-fluid'>

						<div class='section-header'>
							<h2>
								Je suis un <strong class='color'>Programmeur</strong>
							</h2>
						</div>

						<div class='row'>

							<div class='col-md-4'>

								<ul class='info-list'>

									<li>
										<strong>Nom:</strong>
										<span>Quentin Lorenzo</span>
									</li>

									<li>
										<strong>Job:</strong>
										<span>Programmeur Gameplay</span>
									</li>

									<li>
										<strong>Age:</strong>
										<span>20 ans</span>
									</li>

									<li>
										<strong>Résidence:</strong>
										<span>France</span>
									</li>

									<li>
										<strong>Ville:</strong>
										<span>Bordeaux / Le Puy-en-Velay</span>
									</li>



								</ul>

							</div>

							<div class='col-md-8'>

								<div class='about-text'>
									<p>
										Développeur informatique en formation en 3 ème année au Bachelor Universitaire
										de Technologie (BUT) en
										Informatique au Puy-en-Velay (43) avec une spécialisation en programmation de
										l'Imagerie Numérique,
										je suis passionné par le monde de la création de jeux vidéo mais aussi par le
										développement Web.<br><br>

										J'ai participé lors d'un projet étudiant au développement de "Néocity". C'est un
										jeu de gestion de ville dans lequel il faut gérer ses ressources
										ainsi que la pollution générer par la ville. De plus, je participe de mon coté à
										des Game Jam avec des amis et notre derniere création est
										un jeu nommée "Waste Flow" développé en 3 jour. J'ai aussi développer quelque
										page web dont le but était de se concentrer sur le développement avec des
										framework javascript comme
										vue.js et react.
										Vous pourrez trouver les détails de ces projets <a href="#portfolio"
											class='section-toggle' data-section="portfolio">ici</a>. <br><br>

										Après l'obtention de mon BUT, je prévois de poursuivre mes études en intégrant
										un Master afin de me spécialiser dans le développement informatique.
									</p>

								</div>

								<div class='about-btns'>

									<a href='#contact' class='btn-custom btn-color section-toggle'
										data-section='contact'>
										Contactez moi
									</a>
									<a href="CV_Quentin_Lorenzo.pdf" class='btn-custom btn-color section-toggle'
										download="CV_Quentin_Lorenzo.pdf">
										Télécharger le CV
									</a>
									<a href="#portfolio" class='btn-custom btn-color section-toggle'
										data-section="portfolio">
										Mes Projets
									</a>

								</div>

							</div>

						</div>

					</div>
				</div>

				<div class='section-block services-block'>

					<div class='container-fluid'>

						<div class='section-header'>

							<h2>Mes <strong class='color'>Centres d'intérêts</strong></h2>

						</div>



						<div class='row'>

							<div class='col-md-4'>
								<div class='service'>

									<div class='icon'>
										<i class='ion-paintbrush'></i>
									</div>

									<div class='content'>

										<h4>Peinture sur figurine</h4>

										<p>
											J'aime passer du temps à peindre des figurines Warhammer.
										</p>

									</div>

								</div>
							</div>

							<div class='col-md-4'>
								<div class='service'>

									<div class='icon'>
										<i class='ion-ios-body'></i>
									</div>

									<div class='content'>

										<h4>Musculation</h4>

										<p>
											Mordu de musculation, axé sur l'atteinte de mes objectifs
										</p>

									</div>

								</div>
							</div>

							<div class='col-md-4'>
								<div class='service'>

									<div class='icon'>
										<i class='ion-ios-game-controller-a'></i>
									</div>

									<div class='content'>

										<h4>Jeu vidéo</h4>

										<p>
											Fan de League Of Legends pour l'esprit compétitif
										</p>

									</div>

								</div>
							</div>



						</div>


					</div>

				</div>

				<div class='section-block skills-block'>
					<div class='container-fluid'>

						<div class='section-header'>

							<h2>
								Mes <strong class='color'>Compétences</strong>
							</h2>

						</div>

						<div class='row'>

							<div class='col-md-6'>

								<div class='skill'>

									<h4>Mes languages de programmation</h4><br>

									<p style="color:rgba(0, 0, 0, .4);">
										C++<br><br>C#<br><br>HTML/CSS<br><br>Python<br><br>React<br><br>Javascript<br><br>SQL<br><br>NextJS
									</p>

								</div>

							</div>

							<div class='col-md-6'>

								<div class='skill'>

									<h4>Mes outils de développement</h4><br>

									<p style="color:rgba(0, 0, 0, .4);">
										Visual Studio<br><br>Unity<br><br>Blender<br><br>3DS Max<br><br>Github
									</p>

								</div>

							</div>

						</div>


					</div>
				</div>

				<div class='section-block timeline-block'>

					<div class='container-fluid'>

						<div class='section-header'>

							<h2>Mes <strong class='color'>Formations</strong></h2>

						</div>

						<ul class='timeline'>

							<li>

								<div class='timeline-content'>

									<h4>IUT Clermont Auvergne, Le Puy-en-Velay (43)</h4>

									<em>
										<span>BUT INFORMATIQUE GRAPHIQUE</span>
										<span>2022-2025</span>
									</em>

									<p>
										Cet IUT englobe un large éventail de compétences informatique, notamment la
										programmation avancée en C++, le développement de jeux vidéo avec Unity, la
										création de modèles 3D avec 3DS Max, ainsi que la maîtrise des langages web,
										tels que HTML, CSS, PHP, JavaScript et SQL.<br>
										Elle vise à préparer les étudiants à une carrière professionnelle dans le
										domaine de l'informatique en leur fournissant des compétences techniques
										pointues. En parallèle, elle nous a également préparés au développement de jeux
										vidéo.
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-content'>

									<h4>Lycée Gustave Eiffel, Bordeaux (33)</h4>

									<em>
										<span>BACCALAURÉAT (MATHS, NSI, MATHS EXPERTES) MENTION BIEN</span>
										<span>2013-2016</span>
									</em>

									<p>
										Ce lycée m'a offert une solide base en informatique, en commençant par la
										spécialisation en Numérique et Sciences Informatiques (NSI).
										J'y ai acquis mes premières compétences en programmation avec Python, ainsi que
										la maîtrise des langages web tels que HTML, CSS et SQL.<br>
										Une réalisation notable au cours de cette période a été le développement de mon
										premier jeu, un démineur en Python. Cette expérience a été importante pour ma
										passion pour le développement de jeux vidéo.
									</p>

								</div>

							</li>



						</ul>

					</div>

				</div>

				<div class='section-block timeline-block'>

					<div class='container-fluid'>

						<div class='section-header'>

							<h2>Mon <strong class='color'>Experience</strong></h2>

						</div>

						<ul class='timeline'>

							<li>

								<div class='timeline-content'>

									<h4>La Poste, Le Puy-en-Velay (43)</h4>

									<em>
										<span>FACTEUR</span>
										<span>Septembre 2024 - Ajourd'hui</span>
									</em>

									<p>
										Tri du courrier<br>
										Rencontre avec les clients<br>
										Mémorisation des tournées
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-content'>

									<h4>Story Jungle, Paris (75)</h4>

									<em>
										<span>DÉVELOPPEUR WEB</span>
										<span>Avril - Juin 2024</span>
									</em>

									<p>
										Création de page en HTML CSS PHP JS<br>
										Réflexion lors du développement de MCD
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-content'>

									<h4>BNP Paribas Personal Finance, Mérignac (33)</h4>

									<em>
										<span>CONSEILLER FINANCIER</span>
										<span>Avril 2023 et Été 2023</span>
									</em>

									<p>
										Gestion d'un portefeuille de client retardataires<br>
										Recherche de contact client<br>
										Négociation commerciale avec le client pour régularisation<br>
										Traitement administratif (courriers, mails...)
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-content'>

									<h4>IUT, Le Puy-en-Velay (43)</h4>

									<em>
										<span>DÉVELOPPEUR POUR UN MUSÉE VIRTUELLE</span>
										<span>Avril - Juin 2023</span>
									</em>

									<p>
										Modélisation d’oeuvres en 3D <br>
										Utilisation de Unreal Engine pour création de PNJ <br>
										Unwrapping des modèles pour appliquer les textures
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-content'>

									<h4>Maternelle de Marcheprime</h4>

									<em>
										<span>ANIMATEUR EN CENTRE DE LOISIR</span>
										<span>Février 2022</span>
									</em>

									<p>
										Dans le cadre du financement de mon permis de conduire par la mairie, j'ai
										travaillé 40 heures en tant qu'animateur à la maternelle de Marcheprime. <br>

										Mes missions lors de cette semaine étaient les suivantes :<br>
										- Encadrer l'animation d'un groupe d'enfants<br>
										- Appliquer et contrôler les règles de sécurité lors des activités<br>
										- Surveiller les enfants pendant les temps libres
									</p>

								</div>

							</li>



						</ul>

					</div>

				</div>


				<!-- <div class='section-block pricing-block' >
						
						<div class='section-header' >
							<h2>My <strong class='color' >Pricing</strong></h2>
						</div>
						
						
						<div class='row' >
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Basic</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >19</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Pro</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >29</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							<div class='col-md-4' >
								
								<div class='p-table' >
									
									<div class='header' >
										
										<h4>Gold</h4>
										
										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >39</span>
											<span class='period' >/HR</span>
										</div>
										
										
									</div>
									
									<ul class='items' >
										<li>
											App Designing
										</li>
										<li>
											App Development
										</li>
										<li>
											Web Development
										</li>
									</ul>
									
									<a href='#' class='btn-custom btn-color' >
										Choose This
									</a>
									
								</div>
								
							</div>
							
							
						</div>
						
						
					</div> -->

			</section>


			<!--=====================================================
					Portfolio Section
				=====================================================-->
			<section id='portfolio' class='section portfolio-section border-d'>

				<div class='section-block portfolio-block'>

					<div class='container-fluid'>


						<div class='section-header'>
							<h2>Mes <strong class='color'>Projets</strong></h2>
						</div>

						<ul class='portfolio-filters'>
							<li>
								<a href='#' class='active' data-group='all'>
									Tout
								</a>
							</li>
							<li>
								<a href='#' data-group='web'>
									Web
								</a>
							</li>
							<li>
								<a href='#' data-group='jeu'>
									Jeux
								</a>
							</li>
							<li>
								<a href='#' data-group='application'>
									Application
								</a>
							</li>
							<li>
								<a href='#' data-group='greenit'>
									green it
								</a>
							</li>
							<li>
								<a href='#' data-group='gamejam'>
									game jam
								</a>
							</li>
						</ul>

						<ul class='portfolio-items'>

							<li id="AsciiArt" data-groups='["application"]'>
								<div class='inner'>
									<img src='images/ImageAsciiArt.png' alt>

									<div class='overlay'>

										<a href='#popup-1' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-1' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageAsciiArt.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Projet <strong class='color'>Ascii Art</strong>
															</h2>
														</div>


														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Le projet de conversion d'un image en caractères
																	ASCII a été fait dans le cadre d'un projet étudiant
																	en 1ere année de BUT.
																	Le but était de choisir une image et avec le code de
																	ressortir un fichier texte contenant les caractères
																	ASCII représentant l'image.
																	Cette application a été réalisée en C++ par groupe
																	de 2 durant 12 heures.
																	Ce projet se divise en 3 parties qui représente des
																	versions de ce projet.
																	Plus la version est avancée, plus le projet comporte
																	des fonctionnalités.
																</p><br>

																<p>
																	<strong>Langage utilisé :</strong> C++<br>
																	<strong>Logiciel utilisé :</strong> Visual Studio
																	2022<br>
																	<strong>Nombre de personnes :</strong> 2<br>
																	<strong>Temps de développement :</strong> 12
																	heures<br>
																	<strong>Date :</strong> Decembre 2022<br>
																</p>

																<h3>
																	Première <strong class="color">version</strong>
																</h3>

																<p>
																	Lors de la première version, le programme devais
																	demmander à l'utilisateur de rentre le nom de
																	l'image
																	qu'il souhaite convertir (cette image devait être
																	dans un dossier spéciphique ).
																	Ensuite le programme la convertie sous le format PGM
																	qui permet de lire un par un la nuance de gris de
																	chaque pixel présent dans l’image.
																	Notre programme va lire chaque pixel de l’image et
																	va lui attribuer un caractère ASCII en fonction de
																	la nuance de gris du pixel.
																	Le résultat de la conversion seras affiché dans la
																	console dans cette première version.<br><br>
																	Le code de cette conversion est le suivant :

																<div class="code-container">
																	<div class="code">
																		<span class="keyword">std::string</span> <span
																			class="function">convertToASCII</span>(<span
																			class="type">int</span> <span
																			class="variable">charr</span>, <span
																			class="type">std::vector</span><span
																			class="angle-bracket">&lt;</span><span
																			class="type">std::string</span><span
																			class="angle-bracket">&gt;</span> <span
																			class="variable">Palette</span>)<br>
																		{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;<span
																			class="type">double</span> <span
																			class="variable">oc</span> = <span
																			class="variable">charr</span> / 255.0;<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;<span
																			class="type">double</span> <span
																			class="variable">Occ</span> = <span
																			class="variable">oc</span> * (<span
																			class="variable">Palette</span>.<span
																			class="function">size</span>() - 1);<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;<span
																			class="type">int</span> <span
																			class="variable">occ</span> = <span
																			class="function">round</span>(<span
																			class="variable">Occ</span>);<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;<span
																			class="keyword">return</span> <span
																			class="variable">Palette</span>[<span
																			class="variable">occ</span>];<br>
																		}
																	</div>
																	<div class="explanation">
																		<p>Cette fonction prend en paramètre un entier
																			qui représente la nuance de gris d'un pixel
																			et un vecteur de string qui représente la
																			palette de caractère ASCII.</p>
																		<p> On divise la nuance de gris par 255 pour
																			obtenir un nombre entre 0 et 1.</p>
																		<p>On multiplie ce nombre par la taille de la
																			palette moins 1 pour obtenir un nombre entre
																			0 et la taille de la palette.</p>
																		<p> On arrondi ce nombre pour obtenir un entier
																			entre 0 et la taille de la palette.</p>
																		<p> On retourne le caractère ASCII correspondant
																			à la nuance de gris du pixel.</p>
																	</div>
																</div>
																</p>

																<p>
																	Et donc voici le résultat obtenu avec cette première
																	version :
																</p>

																<figure>
																	<img src="../images/AsciiArt/ascii_art_v1.png"
																		alt="ascii_art_v1" class="grande-image">
																	<figcaption>Résultat de la première version
																	</figcaption>
																</figure>

																<p>
																	Nous serons tous d'accord que le résultat ne fais
																	pas réver. De 1 parce que l'affichage n'est pas trés
																	beau et de 2 parce que l'on ne peut pas sauvegarder
																	le résultat.
																	Mais cela est déjà un bon début car on sait que
																	notre programme marche et que l’on a bien le
																	résultat attendu.
																	Cette étape n’est que le début et elle nous permet
																	d’attaquer la version 2.
																</p>

																<h3>
																	Deuxième <strong class="color">version</strong>
																</h3>

																<p>
																	Cette deuxième version va nettement améliorer notre
																	programme car elle va permettre l’enregistrement du
																	Ascii Art dans un fichier TXT.<br>
																	Pour cela, c'est très simple, au lieu d'afficher les
																	caractères ASCII dans la console, on les enregistre
																	dans un fichier texte.<br>
																	Nous allons alors ouvrir le fichier texte sur un
																	éditeur de texte comme notepad++ car on peux
																	dézoomer et nous pourrons voir notre image en
																	caractères ASCII.<br>
																</p>

																<figure>
																	<img src="../images/AsciiArt/ascii_art_v2.png"
																		alt="ascii_art_v2" class="grande-image">
																	<figcaption>Résultat de la deuxième version
																	</figcaption>
																</figure>

																<p>
																	Cette mise à jour permettra un meilleur affichage de
																	l’image car la limite de caractère par ligne sera
																	grandement agrandie,
																	aucun retour a la ligne automatique ne sera alors
																	effectué.
																	Le fichier texte aura alors un nom qui sera
																	renseigné par l’utilisateur et contiendra alors
																	définitivement tout l’Ascii Art jusqu’à
																	la suppression du fichier ou la modification de
																	celui-ci.
																</p>

																<h3>
																	Troisième <strong class="color">version</strong>
																</h3>

																<p>
																	Cette dernière version va permettre le choix de la
																	palette. C'est a dire quels caractères ASCII vont
																	représenter les nuances de gris de l'image.
																	Le programme va demander à l'utilisateur de choisir
																	une palette parmis une liste de palette prédéfinie.
																</p>

																<figure>
																	<img src="../images/AsciiArt/ascii_art_v3.png"
																		alt="ascii_art_v3" class="grande-image">
																	<figcaption>Résultat de la troisième version
																	</figcaption>
																</figure>

																<p>
																	Les fichiers de palette sont des fichiers texte dont
																	chaque ligne est une chaine de caractères
																	représentant un niveau de gris.
																	La première ligne code le niveau de gris le plus
																	sombre, la dernière le plus clair.
																	Notre projet n’en contient que 4 mais il est tout à
																	fait possible d’en implémenter d’autres.
																	Ce choix de la palette permet à l’utilisateur
																	d’avoir un rendu qui lui convient.
																</p>

																<h3>
																	autres <strong class="color">versions</strong>
																</h3>

																<p>
																	Par la suite, nous étions supposés faire les
																	versions 4 et 5 que je vais vous expliquer :
																<ul>
																	<li>
																		La version 4 été supposé être celle qui
																		ajouterais le fait de mettre les paramètres dans
																		la console.
																		Donc avec cette mise à jour, l’utilisateur peut
																		choisir quels paramètres changer et lesquels
																		non.
																		S’ils ne changent rien, les paramètres non
																		saisis sont mis par défaut par le programme,
																		sinon,
																		ils sont pris en compte et sont utilisé par le
																		programme.
																		<figure>
																			<img src="../images/AsciiArt/ascii_art_v4.png"
																				alt="ascii_art_v4" class="petite-image">
																			<figcaption>Explication de la quatrième
																				version</figcaption>
																		</figure>
																	</li>
																	<li>
																		La dernière version ajoute le fais de pouvoir
																		réduire la taille de l’image.
																		C’est-à-dire que l’on va prendre les pixels 4
																		par 4 et on va en faire un seul pixel en faisant
																		une moyenne.
																		<figure>
																			<img src="../images/AsciiArt/ascii_art_v5.png"
																				alt="ascii_art_v5" class="petite-image">
																			<figcaption>Explication de la cinquième
																				version</figcaption>
																		</figure>
																		Cela nous permettra d’avoir des fichiers moins
																		lourds et moins conséquent.
																	</li>
																</ul>
																</p>

																<h3>
																	<strong class="color">Conclusion</strong>
																</h3>

																<p>
																	Au cours de ce projet, des compétences en
																	programmation ont été utilisé afin de lire les
																	données de l’image,
																	les transformer en caractères Ascii et les afficher
																	dans un fichier texte. Cependant, toutes ces parties
																	demande la
																	création de fonction et donc d’algorithme qui ont
																	été optimisé plusieurs fois afin d’avoir le
																	programme le plus rapide possible.
																	Car effectivement, tout cela n’a pas été fais en un
																	coup. Au début, une image de 1920x1080 mettait 5
																	minutes à être convertie
																	en caractère Ascii. Et après l’optimisation, elle
																	n’en mettait plus 10 secondes. Ce projet m’a permis
																	d’apprendre à optimiser
																	des algorithmes mais aussi a en créer afin d’arriver
																	à un projet abouti.
																</p>

															</div>

														</div>


													</div>
												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

							<li id="DungeonTravel" data-groups='["jeu"]'>
								<div class='inner'>
									<img src='images/ImageDungeonTravel.png' alt>

									<div class='overlay'>

										<a href='#popup-2' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-2' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageDungeonTravel.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Jeu <strong class='color'>Dungeon travel</strong>
															</h2>
														</div>


														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Le jeu Dungeon Travel est un jeu de plateforme
																	inspiré de la série des Mario. Le but du jeu est de
																	parcourir les différents niveaux en évitant les
																	pièges.
																	Le jeu est composé de 3 niveaux différents. Le
																	premier niveau est un niveau de découverte et le
																	deuxième niveau est un peu plus difficile.
																	Ce jeu a été développé en 3 mois dans le cadre d'un
																	projet de fin d'année en première année de BUT
																	Informatique.
																	Le but était donc de découvrir comment développer un
																	jeu vidéo sur Unity.
																</p><br>

																<p>
																	<strong>Langage utilisé :</strong> C#<br>
																	<strong>Logiciel utilisé :</strong> Unity<br>
																	<strong>Nombre de personnes :</strong> 1<br>
																	<strong>Temps de développement :</strong> 3 mois<br>
																	<strong>Date :</strong> Avril 2023 - Juin 2023<br>
																</p>

																<h3>
																	Choix des <strong class="color">assets</strong>
																</h3>

																<p>
																	Pour ce projet, je voulais des assets gratuits dans
																	le thème médiéval. J'ai donc choisi des assets sur
																	le site <a href="https://itch.io/game-assets/free"
																		target="_blank">itch.io</a>.<br>
																	Voici les 4 packs d'assets que j'ai utilisés :
																<ul>
																	<li>Personnages et Monstres : <a
																			href="https://anokolisa.itch.io/dungeon-crawler-pixel-art-asset-pack"
																			target="_blank">Dungeon Crawler Pixel Art
																			Asset</a></li>
																	<li>Environnement : <a
																			href="https://orbitpanda.itch.io/16x16-underground-passage"
																			target="_blank">16 x 16 Underground
																			Passage</a></li>
																	<li>Interface Utilisateur : <a
																			href="https://mounirtohami.itch.io/pixel-art-gui-elements"
																			target="_blank">Pixel Art GUI Elements</a>
																	</li>
																	<li>Effet de feu : <a
																			href="https://brullov.itch.io/fire-animation"
																			target="_blank">Fire Animation</a></li>
																</ul>
																</p>

																<p>
																	Pour la partie son, j'ai utilisé des sons gratuits
																	que j'ai trouvés sur le site <a
																		href="https://opengameart.org"
																		target="_blank">Open Game Art</a>.
																	Les musiques sont celles-ci :
																<ul>
																	<li>Menu : <a
																			href="https://opengameart.org/content/menu-music"
																			target="_blank">Menu Music</a></li>
																	<li>Niveau 1 : <a
																			href="https://opengameart.org/content/dungeon-king"
																			target="_blank">Dungeon King</a></li>
																	<li>Niveau 2 : <a
																			href="https://opengameart.org/content/spooky-dungeon"
																			target="_blank">Spooky Dungeon</a></li>
																</ul>
																</p>

																<p>
																	Et pour les sons :
																<ul>
																	<li>Son du feu : <a
																			href="https://opengameart.org/content/fire-crackling">Fire
																			Crackling</a></li>
																	<li>Son de la mort, de bouton, de fin, de saut : <a
																			href="https://opengameart.org/content/8-bit-sound-effects-library"
																			target="_blank">8-Bit Sound Effects
																			Library</a></li>
																</ul>
																</p>
																<p>
																	Le personnage était composé de plusieurs sprites
																	dont l'idle, la marche et la mort. <br>
																<ul>
																	<li>Idle : <img
																			src="../images/DungeonTravel/Idle-Sheet.png"
																			class="pixel-art"> </li>
																	<li>Marche : <img
																			src="../images/DungeonTravel/Run-Sheet.png"
																			class="pixel-art"> </li>
																	<li>Mort : <img
																			src="../images/DungeonTravel/Death-Sheet.png"
																			class="pixel-art"> </li>
																</ul>
																</p>
																<p>
																	Seulement, il manquait l'animation de saut.
																	Pour cela, je me suis inspiré d'autres animations et
																	ai donc fini par créer cette animation de saut en
																	trois temps : le saut, le vol et la réception.
																<ul>
																	<li>Saut : <img
																			src="../images/DungeonTravel/Jump-Sheet.png"
																			class="pixel-art"></li>
																</ul>
																</p>
																<p>
																	Par ailleurs, comme les assets trouvés manquaient de
																	décors et d'objets interactifs, j'en ai créé
																	moi-même.
																	J'ai donc créé une caisse qui est bougeable dans le
																	jeu, une porte qui signifie la fin du niveau, des
																	bombes qui tuent le joueur si elles le touchent, et
																	des torches et chaînes pour le décor.
																<ul>
																	<li>Caisse : <img
																			src="../images/DungeonTravel/Box/Box.png"
																			class="pixel-art"></li>
																	<li>Porte : <img
																			src="../images/DungeonTravel/Porte/porte.png"
																			class="pixel-art"></li>
																	<li>Bombe : <img
																			src="../images/DungeonTravel/Bombe/Bombe.png"
																			class="pixel-art"></li>
																	<li>Torche : <img
																			src="../images/DungeonTravel/Torche/torche.png"
																			class="pixel-art"></li>
																	<li>Chaîne : <img
																			src="../images/DungeonTravel/Chaines/debutChaine.png"
																			class="pixel-art"><img
																			src="../images/DungeonTravel/Chaines/chaine.png"
																			class="pixel-art"><img
																			src="../images/DungeonTravel/Chaines/finChaine.png"
																			class="pixel-art"></li>
																</ul>
																</p>

																<h3>
																	Développement du <strong class="color">Jeu</strong>
																</h3>

																<h4>
																	Le <strong class="color">Personnage</strong>
																</h4>

																<p>
																	J'ai tout d'abord codé le mouvement de mon
																	personnage. J'ai donc commencé par le mouvement de
																	base qui est de bouger de droite a gauche et
																	inversement.
																	Puis j'ai ajouté le saut, la mort et la détection de
																	collision avec les objets.<br><br>
																	Le code du personnage est le suivant :

																<div class="code-container">
																	<div class="code">
																		void Update()<br>
																		{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;grounded =
																		Physics2D.OverlapCircle(groundCheck.position,
																		groundCheckRadius, groundLayer);<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;playerAnim.SetBool("grounded",
																		grounded);<br>
																		<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;if (grounded)<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jumpCount
																		= 0;<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																		<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;if
																		(Input.GetButtonDown("Jump"))<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
																		(grounded)<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jump();<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
																		if (jumpCount < MaxJump)<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jump();<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																			<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;float move =
																			Input.GetAxis("Horizontal");<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;playerRB.velocity =
																			new Vector2(move * maxSpeed,
																			playerRB.velocity.y);<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;playerAnim.SetFloat("MoveSpeed",
																			Mathf.Abs(move));<br>
																			<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;if (facingRight &&
																			move < 0)<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flip();<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;else if
																				(!facingRight && move > 0)<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flip();<br>
																				&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																				}
																	</div>
																	<div class="explanation">
																		<p><strong class="color">Explications :</strong>
																		</p>
																		<p><strong class="color">grounded</strong> :
																			Détermine si le personnage est au sol en
																			vérifiant la présence de collisions avec un
																			cercle de détection.</p>
																		<p><strong
																				class="color">playerAnim.SetBool("grounded",
																				grounded);</strong> : Met à jour
																			l'animation du personnage pour refléter s'il
																			est au sol ou en l'air.</p>
																		<p><strong class="color">jumpCount</strong> : Le
																			nombre de sauts actuellement effectués par
																			le joueur.</p>
																		<p><strong
																				class="color">Input.GetButtonDown("Jump")</strong>
																			: Vérifie si le bouton de saut est enfoncé
																			dans cet instant précis.</p>
																		<p><strong class="color">MaxJump</strong> : Le
																			nombre maximal de sauts autorisés.</p>
																		<p><strong
																				class="color">Input.GetAxis("Horizontal")</strong>
																			: Obtient la valeur de l'axe horizontal de
																			l'entrée (par exemple, les touches de
																			déplacement gauche/droite).</p>
																		<p><strong
																				class="color">playerRB.velocity</strong>
																			: La vitesse actuelle du rigidbody du
																			joueur.</p>
																		<p><strong
																				class="color">Mathf.Abs(move)</strong> :
																			La valeur absolue de la valeur de
																			déplacement horizontale, garantissant que la
																			valeur est toujours positive.</p>
																		<p><strong class="color">facingRight</strong> :
																			Un booléen indiquant si le joueur est
																			actuellement orienté vers la droite.</p>
																		<p>
																			Le code void Update() est une méthode Unity
																			qui est appelée à chaque image. C'est ici
																			que se trouvent les mises à jour du jeu.<br>
																			Le code ci-dessus permet de gérer le
																			mouvement du personnage, le saut, la
																			détection de collision avec le sol et la
																			gestion de l'animation du personnage.<br>
																			Si le joueur est au sol alors le nombre de
																			saut est remis a 0, et si le joueur appuie
																			sur le bouton de saut alors on appele la
																			fonction Jump() qui va faire sauter le
																			joueur.<br>
																			Ensuite on récupère la valeur de l'axe
																			horizontal pour déplacer le joueur et on met
																			à jour l'animation du joueur en fonction de
																			sa vitesse de déplacement.<br>
																			Enfin on vérifie si le joueur est orienté
																			vers la droite et on le retourne si ce n'est
																			pas le cas.
																		</p>
																	</div>
																</div>
																</p>

																<h4>
																	Les <strong class="color">Ennemis</strong>
																</h4>

																<p>
																	Une fois le personnage fonctionnel, j'ai décidé
																	d'ajouter mon premier ennemi qui est un orc. J'ai
																	donc codé le mouvement de l'orc et la détection de
																	collision avec le joueur.
																	Cette orc est très simple, il se déplace d'un point
																	a l'autre sans se soucier de la présence du joueur.
																	Il est donc très facile a éviter même si il est
																	intuable.<br><br>
																	Le code de l'orc est le suivant :

																<div class="code-container">
																	<div class="code">
																		void Update()<br>
																		{<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;Vector3 dir =
																		target.position - transform.position;<br>
																		<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;transform.Translate(dir.normalized
																		* speed * Time.deltaTime, Space.World);<br>
																		<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;// Si l'ennemi est
																		quasiment arrivé à sa destination<br>
																		&nbsp;&nbsp;&nbsp;&nbsp;if(Vector3.Distance(transform.position,
																		target.position) < 0.3f)<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;{<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destPoint
																			= (destPoint+1)%waypoints.Length;<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target
																			= waypoints[destPoint];<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;graphics.flipX
																			= !graphics.flipX;<br>
																			&nbsp;&nbsp;&nbsp;&nbsp;}<br>
																			}
																	</div>
																	<div class="explanation">
																		<p><strong class="color">Explications :</strong>
																		</p>
																		<p><strong class="color">dir</strong> : Cette
																			variable représente la direction dans
																			laquelle l'objet doit se déplacer pour
																			atteindre sa cible.</p>
																		<p><strong class="color">transform</strong> : Il
																			s'agit du composant de transformation de
																			l'objet, qui contient des informations sur
																			sa position, son orientation et son échelle
																			dans l'espace du jeu.</p>
																		<p><strong class="color">target</strong> : Cette
																			variable représente la position de la cible
																			que l'objet essaie d'atteindre. Il s'agit
																			probablement d'un point de passage.</p>
																		<p><strong class="color">speed</strong> : Cette
																			variable détermine la vitesse à laquelle
																			l'objet se déplace vers sa cible. Plus cette
																			valeur est élevée, plus l'objet se déplace
																			rapidement.</p>
																		<p><strong class="color">Time.deltaTime</strong>
																			: Ceci est utilisé pour normaliser le
																			mouvement de l'objet en fonction du temps
																			écoulé entre chaque image de jeu. Cela
																			garantit que le mouvement est fluide et
																			cohérent, indépendamment des performances de
																			l'appareil.</p>
																		<p><strong class="color">destPoint</strong> :
																			Cette variable maintient l'indice du
																			prochain point de passage dans le tableau.
																			Elle est utilisée pour déterminer quelle
																			sera la prochaine cible une fois que l'objet
																			aura atteint son point de passage actuel.
																		</p>
																		<p><strong class="color">waypoints</strong> :
																			Ceci est probablement un tableau de
																			positions représentant les différents points
																			de passage que l'objet doit suivre. Chaque
																			élément du tableau est une position dans
																			l'espace du jeu.</p>
																		<p>
																			En résumé, ces variables sont utilisées pour
																			contrôler le mouvement de l'objet vers sa
																			cible, détecter quand il est proche de sa
																			destination et mettre à jour ses paramètres
																			graphiques en conséquence.
																		</p>
																	</div>
																</div>
																</p>

																<h4>
																	Les <strong class="color">Interactibles</strong>
																</h4>

																<p>
																	Ensuite j'ai décidé d'ajouter les objects
																	interactifs. J'ai commencé par ajouter la bombe qui
																	tue le joueur si elle le touche.
																	Puis j'ai ajouté la caisse qui est bougeable par le
																	joueur et qui permet au joueur de lui monter dessus
																	pour atteindre des endroits plus élevé.
																	Enfin j'ai ajouté la porte qui signifie la fin du
																	niveau.
																</p>

																<h3>
																	Création du <strong class="color">premier
																		Niveau</strong>
																</h3>

																<p>
																	Pour créer le premier niveau, j'ai utilisé le
																	système de tilemap afin de disposé les différents
																	éléments du niveau avec une grille. La tilemap
																	permet de créer des niveaux rapidement et facilement
																	mais ne permet pas d'ajouter les interactibles.
																	Je pouvais donc designer le niveau en plaçant les
																	différents éléments sur la grille comme les
																	plateformes, les murs, le sol, les torches et les
																	chaînes.
																	Tout ce qui était interactible a été posé a la main
																	directement dans la scène car ils n'avait pas la
																	meme taille ou n'était pas immobile.<br>
																	Par exemple la caisse est bougeable donc elle n'a
																	rien a faire dans le tilemap qui permet de gerer
																	l'apparence du niveau.
																<figure>
																	<img src="images/DungeonTravel/Tilemap.png" alt=""
																		class="grande-image">
																	<figcaption>Capture d'écran de la création du niveau
																	</figcaption>
																</figure>
																</p>

																<h3>
																	<strong class="color">conclusion</strong>
																</h3>

																<p>
																	Ce projet m'a permis de découvrir comment créer un
																	jeu vidéo sur Unity.
																	J'ai appris a utiliser les différents composants de
																	Unity afin de pouvoir créer mon premier jeu vidéo.
																	J'ai découvert comment créer un personnage jouable,
																	des ennemis, des objets interactifs, des UI et des
																	niveaux.
																	Le C# était un langage que je connaissais pas, j'ai
																	donc appris à l'utiliser tout au long du
																	développement pour coder les différents éléments de
																	mon jeu.
																	J'ai également découvert comment utiliser des assets
																	gratuits pour mon jeu et comment les intégrer dans
																	mon jeu.
																	Enfin, j'ai découvert comment créer des animations
																	pour mon personnage et comment les intégrer dans mon
																	jeu.
																</p>
															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

							<li id="Remindr" data-groups='["web"]'>
								<div class='inner'>
									<img src='images/ImageReminDr.png' alt>

									<div class='overlay'>

										<a href='#popup-3' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-3' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageReminDr.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Site <strong class='color'>Remindr</strong>
															</h2>
														</div>

														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Remindr est un projet de création de site web dans
																	lequel il est possible de se connecté via son compte
																	github.
																	Le but de ce site est de créer des groupes dans
																	lesquels ont peut ajouter des rappels et d'autres
																	utilisateurs.
																	Ces groupes et rappels seront visibles dans le
																	tableau de bord de tout les utilisateur qui sont
																	dans le groupe.
																</p><br>

																<p>
																	<strong>Langage utilisé :</strong> JavaScript,
																	NextJS, React<br>
																	<strong>Logiciel utilisé :</strong> Visual Studio
																	Code<br>
																	<strong>Nombre de personnes :</strong> 2<br>
																	<strong>Temps de développement :</strong> 1 mois<br>
																	<strong>Date :</strong> Décembre 2023<br>
																	<strong>Github :</strong> <a
																		href="https://github.com/baptiste1563/RemindrV2"
																		target="_blank">Remindr</a>
																</p>

																<h3>
																	Choix des <strong
																		class="color">technologies</strong>
																</h3>
																<p>
																	<strong>NextJS :</strong> Nous avons choisi le
																	Framework NextJS car c'est la technologie que nous
																	connaissions le mieux et aussi parce que NextJS est
																	une technologie montante. <br>
																	<strong>React :</strong> Nous avons utilisé React
																	pour le Front. Nous l'avons choisi car elle est
																	ajoutée automatiquement avec NextJS et c'est le
																	Framework de front le plus utilisé. <br>
																	<strong>Prisma :</strong> Nous l'avons utilisé pour
																	la gestion de la base de donnée car Prisma gères
																	automatiquement les liaisons entre les tables. De
																	plus, nous l'avons choisi car c'est un ORM qui
																	fonction très bien avec la solution Next-Auth. <br>
																	<strong>Next-Auth :</strong> Nous l'avons utilisé
																	pour la connexion au site avec GitHub. Nous l'avons
																	choisi car c'était une solution facile à mettre en
																	place.
																</p>

																<h3>
																	L'organisation du <strong
																		class="color">projet</strong>
																</h3>

																<p>
																	Le projet est organisé en 2 partie, le Front et le
																	Back. <br>
																	Le Front :
																</p>
																<ul>
																	<li><strong>index.jsx :</strong> Cette page contient
																		la page de connexion si on n'est pas connecté,
																		ou alors le tableau de bord avec la création de
																		groupe, la liste des rappels qui arrivent a
																		échéance dans 5 jours, et la liste des groupes
																		auxquels on appartient.</li>
																	<li><strong>group/[id].jsx :</strong> Cette page
																		affiche les information du groupe avec le nom,
																		la description, les membres, les rappels et 2
																		formulaire pour ajouter des rappels ou des
																		membres.</li>
																	<li><strong>remind/[id].jsx :</strong> Cette page
																		affiche les informations d'un rappel. On peut
																		ainsi le modifié ou le supprimer.</li>
																</ul>
																<p>
																	Le Back :
																</p>
																<ul>
																	<li><strong>add_group.js :</strong> Cette page est
																		appelé quand on rempli le formulaire dans le
																		tableau de bord pour la création d'un groupe.
																		Elle va ajouter un groupe à la base de donnée
																		seulement si il n'existe pas de groupe ayant le
																		même nom. Puis on va ajouter l'utilisateur
																		connecté au groupe.</li>
																	<li><strong>add_user.js :</strong> Cette page est
																		appelé quand on rempli le formulaire dans la
																		page d'un groupe pour l'ajout d'un utilisateur.
																		Elle va donc ajouter l'utilisateur dont le mail
																		est écrit dans le formulaire et vérifier s'il
																		existe bien dans la base de donnée.</li>
																	<li><strong>add_remind.js :</strong> Cette page est
																		appelé quand on rempli le formulaire dans la
																		page d'un groupe pour la création d'un rappel.
																		Elle va ajouter un rappel dans la base de
																		donnée.</li>
																	<li><strong>delete_remind.js :</strong> Cette page
																		est appelé quand on clique sur le bouton
																		"supprimer" dans la page d'un rappel. Elle va
																		supprimer le rappel sur lequel on est
																		actuellement de la base de donnée.</li>
																	<li><strong>update_remind.js :</strong> Cette page
																		est appelé quand on rempli le formulaire dans la
																		page d'un rappel pour la modification du rappel.
																		Elle va modifier le rappel sur lequel on est
																		actuellement de la base de donnée.</li>
																</ul>

																<h3>
																	Les <strong class="color">fonctionnalités</strong>
																</h3>

																<p>
																<p>Authentification et Comptes Utilisateurs :</p>
																<ul>
																	<li>Les utilisateurs doivent pouvoir créer un compte
																		et se connecter.</li>
																	<li>Un utilisateur doit avoir un tableau de bord
																		(dashboard) après la connexion.</li>
																</ul>

																<p>Gestion des Groupes :</p>
																<ul>
																	<li>Les utilisateurs peuvent créer un ou plusieurs
																		groupes.</li>
																	<li>Chaque groupe doit avoir un nom unique.</li>
																	<li>Les utilisateurs peuvent ajouter d'autres
																		utilisateurs inscrits sur la plateforme dans
																		leurs groupes.</li>
																</ul>

																<p>Création et Gestion des Rappels :</p>
																<ul>
																	<li>Dans un groupe, les utilisateurs peuvent ajouter
																		des rappels.</li>
																	<li>Chaque rappel doit avoir un nom, une
																		description, une date et une heure d'échéance.
																	</li>
																	<li>Les rappels peuvent être différenciés par
																		couleur.</li>
																	<li>Les rappels doivent être ordonnés sur le tableau
																		de bord en fonction de leur date d'échéance.
																	</li>
																</ul>

																<p>Affichage sur le Tableau de Bord :</p>
																<ul>
																	<li>Sur le tableau de bord, les utilisateurs doivent
																		d'abord voir les rappels qui arrivent à échéance
																		rapidement, indépendamment du groupe.</li>
																	<li>Ensuite, affichez la liste des groupes auxquels
																		l'utilisateur appartient.</li>
																</ul>

																<p>Modification et Suppression des Rappels :</p>
																<ul>
																	<li>Les utilisateurs peuvent modifier et supprimer
																		les rappels dans les groupes auxquels ils
																		appartiennent.</li>
																</ul>

																<p>Affichage des Rappels dans un Groupe :</p>
																<ul>
																	<li>Lorsqu'un utilisateur accède à un groupe, les
																		rappels doivent être affichés dans l'ordre de la
																		date d'échéance, de la plus proche à la plus
																		éloignée.</li>
																	<li>Ajoutez une option pour afficher les rappels
																		dépassés, avec un style différent pour indiquer
																		qu'ils sont passés.</li>
																</ul>
																</p>

																<h3>
																	Les <strong class="color">pages</strong>
																</h3>
																<p>
																	Lorsque l'on lance le site pour la première fois, on
																	arrive sur la page de connexion.
																<figure>
																	<img src="images/Remindr/image1.png" alt=""
																		class="grande-image">
																	<figcaption>Capture d'écran de la page d'accueil
																	</figcaption>
																</figure>
																</p>
																<p>
																	Si l'on apppuie sur le bouton "Sign in", on arrive
																	sur la page de connexion de GitHub.
																<figure>
																	<img src="images/Remindr/image4.png" alt=""
																		class="grande-image">
																	<figcaption>Capture d'écran de la page de connexion
																		github</figcaption>
																</figure>
																</p>
																<p>
																	Une fois connecté, on arrive sur le tableau de bord.
																	sur lequel on peut de déconnecter, créer un groupe,
																	voir les rappels qui arrivent a échéance dans 5
																	jours et voir les groupes auxquels on appartient.
																<figure>
																	<img src="images/Remindr/image2.png" alt=""
																		class="grande-image">
																	<figcaption>Capture d'écran du tableau de bord
																	</figcaption>
																</figure>
																</p>
																<p>
																	Si l'on clique sur un groupe, on arrive sur la page
																	du groupe. Sur cette page on peut voir les
																	informations du groupe, les membres, les rappels et
																	on peut ajouter des membres ou des rappels.
																<figure>
																	<img src="images/Remindr/image3.png" alt=""
																		class="grande-image">
																	<figcaption>Capture d'écran de la page d'un groupe
																	</figcaption>
																</figure>
																</p>

																<h3>
																	<strong class="color">Conclusion</strong>
																</h3>

																<p>
																	Ce projet m'a permis de découvrir comment créer un
																	site web avec NextJS et React.
																	J'ai appris a utiliser les différents composants de
																	NextJS et React afin de pouvoir créer mon premier
																	site web.
																	Le JavaScript était un langage que je connaissais
																	pas, j'ai donc appris à l'utiliser tout au long du
																	développement
																	pour coder les différents éléments de mon site.
																	J'ai également découvert comment utiliser l'API de
																	Github.
																	Enfin, j'ai appris à créer des pages dynamiques et
																	comment les intégrer dans mon site.
																</p>

															</div>

														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

							<li id="Neocity" data-groups='["jeu","greenit"]'>
								<div class='inner'>
									<img src='images/ImageNeocity.png' alt>

									<div class='overlay'>

										<a href='#popup-4' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-4' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageNeocity.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Projet Green IT : <strong class='color'>Néocity</strong>
															</h2>
														</div>

														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Néocity est un jeu développé par 4 étudiants lors
																	d'un projet universitaire.
																	Le but de ce projet était de créer un jeu qui devait
																	être conçu le plus écologiquement possible.
																	De plus, il devait être accessible, c'est-à-dire
																	qu'un maximum de gens puisse y jouer.
																	Ceci inclut dans notre cas les personnes en
																	situation de handicap moteur.
																</p><br>

																<p>
																	<strong>Langage utilisé :</strong> C#, JSON<br>
																	<strong>Logiciel utilisé :</strong> Visual Studio,
																	Unity, GitKraken<br>
																	<strong>Nombre de personnes :</strong> 4<br>
																	<strong>Temps de développement :</strong> 3 semaines
																	à temps plein + 2 mois durant les heures dédiées et
																	temps personnel<br>
																	<strong>Date :</strong> Janvier - Mars 2024<br>
																	<strong>GitHub :</strong> <a
																		href="https://gitlab.antoine-chabanel.fr/n3rdt34m/neocity"
																		target="_blank">Néocity</a>
																</p>

																<h3>
																	Le <strong class="color">trailer</strong>
																</h3>
																<p>
																	<iframe width="560" height="315"
																		src="https://www.youtube.com/embed/Og4vOZzyFlg?si=QOkGsC0rAvj3SJ0G"
																		title="YouTube video player" frameborder="0"
																		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
																		referrerpolicy="strict-origin-when-cross-origin"
																		allowfullscreen></iframe>
																</p>

																<h3>
																	Le <strong class="color">fonctionnement du
																		jeu</strong>
																</h3>

																<p>
																	Tout d'abord, Néocity est un jeu de gestion de
																	ville. Le but est de gérer une ville en respectant
																	l'environnement.
																	Pour cela, le joueur aura 4 ressources à gérer :
																	l'argent, le taux de CO2, le bonheur des habitants
																	et le nombre d'habitants.
																	Pour changer ces 4 ressources, le joueur pourra
																	construire des bâtiments :
																</p>
																<ul>
																	<li>Les loisirs permettent d'augmenter le bonheur
																		dans sa ville</li>
																	<li>Les usines permettent de faire travailler les
																		gens</li>
																	<li>Les habitations permettent d'augmenter la
																		population de la ville</li>
																</ul>
																<p>
																	Chacun des bâtiments pollue plus ou moins en
																	fonction de sa taille et de son type.
																	Par exemple, certains loisirs ne polluent pas car ce
																	sont des parcs publics, alors que d'autres polluent
																	beaucoup car ce sont des bars.
																	Pour augmenter la population, nous avons mis en
																	place une mécanique assez spéciale : un habitant
																	n'existe que s'il travaille.
																	Pour cela, il faut avoir au moins une usine et une
																	résidence. Il est possible d'attribuer des habitants
																	à des résidences pour déterminer où ils travaillent.
																	Il y a aussi un hôtel de ville qui est améliorable
																	et qui permet de débloquer des bâtiments.
																	On peut également acheter de nouvelles parcelles
																	pour agrandir la ville.
																</p>

																<h3>
																	Notre démarche <strong
																		class="color">écologique</strong>
																</h3>

																<p>
																	Pour rendre notre jeu le plus écologique possible,
																	nous avons mis en place plusieurs mécaniques :
																</p>
																<ul>
																	<li>
																		Lors de l'attribution des habitants à des
																		usines, il faut prendre en compte la distance
																		car cette distance déterminera si l'habitant
																		prendra la voiture ou ira à pied.
																		Bien évidemment, la voiture pollue alors que le
																		vélo non.
																	</li>
																	<li>
																		Lors de l'amélioration de l'hôtel de ville, il
																		faut choisir entre 2 réformes. Ces deux réformes
																		auront un impact écologique sur la ville.
																		Par exemple, choisir entre promouvoir le
																		covoiturage ou financer la recherche sur de
																		nouvelles technologies d'isolation et débloquer
																		un nouveau niveau d'amélioration pour ses
																		logements.
																	</li>
																	<li>
																		Nous proposons au joueur d'améliorer ses
																		bâtiments afin de les rendre moins consommateurs
																		d'énergie par habitant tout en augmentant leur
																		capacité d'accueil.
																	</li>
																	<li>
																		La pollution est un élément central du jeu. Si
																		le taux de CO2 est trop élevé, il y a la
																		possibilité de déclencher une catastrophe
																		écologique qui réduira le bonheur des habitants
																		:
																		<ul>
																			<li>
																				La catastrophe la plus destructrice est
																				la tempête, elle raye tout simplement
																				des bâtiments de la carte.
																				<figure>
																					<img src="images/Neocity/preview_tempete-ezgif.com-video-to-gif-converter.gif"
																						alt="" class="petite-image">
																					<figcaption>Apparence tempete en jeu
																					</figcaption>
																				</figure>
																			</li>
																			<li>
																				L'inondation est un peu moins
																				destructrice mais touche plus de
																				bâtiments, elle diminue le niveau de
																				plusieurs bâtiments de la ville.
																				<figure>
																					<img src="images/Neocity/preview_inondation-ezgif.com-video-to-gif-converter.gif"
																						alt="" class="petite-image">
																					<figcaption>Apparence inondation en
																						jeu</figcaption>
																				</figure>
																			</li>
																			<li>
																				Enfin, plus gentille, il y a la canicule
																				qui réduit le bonheur des habitants de
																				la ville pendant un temps, ce qui va
																				réduire les revenus du joueur.
																				<figure>
																					<img src="images/Neocity/preview_canicule-ezgif.com-video-to-gif-converter.gif"
																						alt="" class="petite-image">
																					<figcaption>Apparence canicule en
																						jeu</figcaption>
																				</figure>
																			</li>
																		</ul>
																	</li>
																</ul>

																<h3>
																	Notre démarche <strong
																		class="color">accessibilité</strong>
																</h3>

																<p>
																	Afin de rendre notre jeu le plus accessible
																	possible, nous avons implémenté la possibilité de
																	jouer avec une manette.
																	Grâce à cela, le jeu est jouable sur console et sur
																	PC. Mais aussi par des personnes en situation de
																	handicap moteur.
																	Effectivement, avec des technologies comme le <a
																		href="https://www.microsoft.com/fr-fr/d/manette-xbox-adaptive/8nsdbhz1n3d8"
																		target="_blank">Xbox Adaptive Controller</a>, il
																	est possible d'émuler une manette avec des boutons
																	plus gros et plus faciles à appuyer.
																	Ainsi, les personnes en situation de handicap moteur
																	peuvent jouer à notre jeu.
																</p>

																<h3>
																	Le développement de <strong
																		class="color">Néocity</strong>
																</h3>
																
																<p>
																	Le sujet de la création du jeu nous a été
																	distribué le 8 janvier 2024 matin. Le sujet
																	était donc de créer un jeu vidéo.
																	Nous avons donc commencé par réfléchir à ce
																	que nous voulions faire comme type de jeu
																	car le sujet était très large.
																	Plusieurs idées nous étaient venues en tête
																	mais nous avons finalement choisi de faire
																	un jeu de gestion de ville car c'est un
																	style de jeu que nous n'avions jamais fait.
																	Ensuite, nous avons brainstormé sur les
																	mécaniques que nous voulions mettre en place
																	et sur le thème du jeu. Cela nous a pris 2
																	jours pendant lesquels nous n'avons pas
																	codé.
																	Il en est ressorti que nous voulions un jeu
																	de gestion avec plusieurs restrictions :
																</p>

																<ul>
																	<li>
																		Il nous fallait peu de bâtiments à
																		développer car nous n'avions que 3
																		semaines.
																		Nous avons donc choisi de faire un jeu
																		de gestion de ville avec 3 bâtiments :
																		les loisirs, les usines et les
																		habitations.
																	</li>
																	<li>
																		Nous voulions un jeu écologique. Nous
																		avons donc décidé de mettre en place un
																		système de pollution.
																		Chaque bâtiment pollue plus ou moins en
																		fonction de sa taille et de son type.
																		Par exemple, certains loisirs ne
																		polluent pas car ce sont des parcs
																		publics, alors que d'autres polluent
																		beaucoup car ce sont des bars.
																	</li>
																	<li>
																		Nous avons choisi de créer des terrains
																		de 9 par 7 avec les routes déjà tracées.
																		Cela nous a permis de gagner du temps
																		sur le développement car nous savions
																		que les routes étaient une mécanique
																		complexe à mettre en place.
																		Effectivement, si le joueur place les
																		routes lui-même, il faut que les
																		bâtiments soient reliés à une route pour
																		fonctionner. Et il faut que toutes les
																		routes soient reliées les unes aux
																		autres.
																		C'est en sachant cela que nous avons
																		décidé de les placer nous-mêmes et de
																		créer plusieurs terrains avec des routes
																		différentes.
																	</li>
																	<li>
																		Nous avons implémenté un hôtel de ville
																		qui permet de débloquer des bâtiments et
																		de choisir entre 2 réformes qui auront
																		un impact écologique sur la ville.
																		Cette mécanique nous permettait
																		d'ajouter de la positivité à notre jeu
																		en permettant au joueur de choisir entre
																		2 bonnes choses.
																	</li>
																	<li>
																		Et il nous fallait un tutoriel.
																		Nous avions tout d'abord pensé à un
																		tutoriel avec un personnage qui explique
																		comment jouer et qui bloque nos actions
																		tant que l'on n'a pas fait ce qu'il
																		demande.
																		Mais cela demandait beaucoup de temps et
																		nous n'avions pas le temps de le faire.
																		Nous avons donc décidé de faire un
																		tutoriel écrit qui s'affiche en haut de
																		l'écran et qui est accessible à tout
																		moment dans le jeu.
																	</li>
																</ul>

																<p>
																	Après ce brainstorming, nous avons commencé
																	le développement du jeu. Personnellement, je
																	me suis occupé de l'intégralité des UI du
																	jeu. J'ai donc fait le lien entre
																	l'interface et le code.
																	Dans le groupe, nous travaillions beaucoup
																	ensemble car tout était lié. Par exemple,
																	mes UI devaient être liées avec le code qui
																	modifiait les variables du jeu.
																	Nous avons donc travaillé pendant 3 semaines
																	à temps plein. À la fin de ces 3 semaines,
																	nous avons eu une soutenance devant un jury
																	où nous leur avons présenté notre jeu.
																	<br><br>
																	Les remarques qui avaient été faites lors de
																	la soutenance étaient les suivantes :
																</p>
																<ul>
																	<li>Le jeu est trop fataliste. La pollution
																		ne fait que grimper et il n'y a pas de
																		moyen de la faire baisser.</li>
																	<li>Il n'y a pas de réel enjeu à ne pas
																		polluer car même si on perd un peu
																		d'argent, au final le jeu est juste
																		ralenti et on peut continuer à jouer. On
																		ne perd rien et il n'y a pas de
																		punitions.</li>
																</ul>

																<p>
																	C'est ainsi que nous est venue l'idée de
																	changer le système des ressources et
																	d'ajouter des catastrophes écologiques.
																	Au départ, la pollution faisait baisser le
																	bonheur des habitants et donc les revenus du
																	joueur.
																	Maintenant, la pollution n'influe pas sur le
																	bonheur des habitants mais peut déclencher
																	des catastrophes écologiques qui elles, font
																	baisser le bonheur des habitants et nous
																	font perdre de l'argent.
																	Ainsi, le joueur a un réel enjeu à ne pas
																	polluer car il peut tout perdre s'il ne fait
																	pas attention.
																</p>

																<p>
																	Nous avons donc passé 2 mois à retravailler
																	le jeu pour le rendre plus intéressant et
																	plus jouable.
																</p>

																<h3>
																	<strong class="color">Conclusion</strong>
																</h3>

																<p>
																	Ce projet etait très intéressant car il nous
																	a permis de découvrir comment developper un
																	city builder.
																	C'etait notre premier grand projet de jeu
																	vidéo et nous avons appris beaucoup de
																	choses comme comment bien se repartir les
																	taches.
																	Nous sommes fier d'avoir penser à créer un
																	jeu qui sensibilise les gens à l'écologie ce
																	qui a été la base de notre projet.
																	Ce projet m'a permis de me confirmer dans
																	mon choix d'orientation qui est le
																	développement car nous avons passé beaucoup
																	de temps à coder et cela était amusant mais
																	aussi parfoit frustrant car ça ne marchait
																	pas.
																</p>

															</div>

														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

							<li id="CupidCharms" data-groups='["jeu","gamejam"]'>
								<div class='inner'>
									<img src='images/ImageCupidCharm.png' alt>

									<div class='overlay'>

										<a href='#popup-5' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-5' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageCupidCharm.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Game Jam : <strong class='color'>Cupid Charms</strong>
															</h2>
														</div>

														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Cupid Charms est jeu développé par 4 étudiants lors
																	d'une Game Jam.
																	Cette Game Jam avait pour thème "CHARM" ce qui avait
																	plusieurs sens telles que l'amour, les charmes
																	(amulet), etc.
																	Nous avons décidé de faire un jeu en isométrique où
																	le joueur controle Cupidon dessendue sur Terre pour
																	redonner vie à l'amour.
																</p><br>

																<p>
																	<strong>Lien Game Jam :</strong> <a
																		href="https://itch.io/jam/winter-melonjam-2023">Winter
																		Melon Jam 2023</a><br>
																	<strong>Thème :</strong> CHARM<br>
																	<strong>Langage utilisé :</strong> C#<br>
																	<strong>Logiciel utilisé :</strong> Visual Studio,
																	Unity, GitKraken<br>
																	<strong>Nombre de personnes :</strong> 4<br>
																	<strong>Temps de développement :</strong> 3
																	jours<br>
																	<strong>Date :</strong> 28 Décembre 2023 à 1:00 au
																	31 Décembre 2023 à 1:10<br>
																</p>

																<iframe frameborder="0"
																	src="https://itch.io/embed/2448220" width="208"
																	height="167">
																	<a
																		href="https://quentinlorenzo.itch.io/cupid-charms">
																		Cupid Charms by Quentin Lorenzo, Neps Nep,
																		antoine-chabanel, tgrl84
																	</a>
																</iframe>

																<h3>
																	Rapport avec le <strong class="color">thème</strong>
																</h3>

																<p>
																	Cupid Charms de par son nom et son gameplay est en
																	lien avec le thème de la Game Jam.
																	Effectivement le joueur controlle Cupidon qui est
																	l'incarnation de l'amour. De plus dans le jeu, il
																	aura la possibilité de récupérer des charmes
																	afin d'améliorer son arc.
																</p>

																<h3>
																	Les <strong class="color">fonctionnalités</strong>
																</h3>

																<p>
																	Le joueurs peut se déplacer avec ZQSD et tirer avec
																	la souris. Le jeu se compose de plusieurs salle
																	disposer aléatoirement.
																	Il n'existe qu'une seule salle menant au prochain
																	niveau. Le joueur doit donc trouver cette salle pour
																	avancer.
																	Dans chaque niveau il y a une salle contenant un
																	coffre qui ne peut etre ouvert qu'avec une clé qui
																	est dans une autre salle.
																	Ce coffre contient un charme qui améliore l'arc du
																	joueur. Les charmes peuvent être équipé en allant
																	dans l'inventaire.
																	Chaque salle a des ennemis qui attaque le joueur. Le
																	joueurs leur tire alors dessus pour les rendre
																	amoureux et changer l'ambiance de la salle.
																	Le boss se trouve au niveau 5.
																</p>

															</div>

														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

							<li id="WasteFlow" data-groups='["jeu","gamejam"]'>
								<div class='inner'>
									<img src='images/ImageWasteFlow.png' alt>

									<div class='overlay'>

										<a href='#popup-6' class='view-project'>
											View Project
										</a>

										<!--project popup-->
										<div id='popup-6' class='popup-box zoom-anim-dialog mfp-hide'>
											<figure>

												<!--project popup image-->
												<img src='images/ImageWasteFlow.png' alt>

											</figure>
											<div class='content'>

												<div class='section-block about-block'>
													<div class='container-fluid'>

														<div class='section-header'>
															<h2>
																Game Jam : <strong class='color'>Waste Flow</strong>
															</h2>
														</div>

														<div class='col-md-19'>

															<div class='presentation-text'>
																<p>
																	Waste Flow est jeu développé par 4 étudiants lors
																	d'une Game Jam.
																	Cette Game Jam avait pour thème "FLOW" ce qui avait
																	plusieurs sens telles que l'écoulement, la fluidité,
																	le flux, le style, etc.
																	Nous avons décidé de faire un jeu où le joueur
																	controle une tortue qui se déplace dans un courant
																	australien et qui doit esquiver
																	les déchets présent dans ce dernier.
																</p><br>

																<p>
																	<strong>Lien Game Jam :</strong> <a
																		href="https://itch.io/jam/melonjam5">Melon Jam
																		5</a><br>
																	<strong>Thème :</strong> FLOW<br>
																	<strong>Langage utilisé :</strong> C#<br>
																	<strong>Logiciel utilisé :</strong> Visual Studio,
																	Unity, GitKraken<br>
																	<strong>Nombre de personnes :</strong> 4<br>
																	<strong>Temps de développement :</strong> 3
																	jours<br>
																	<strong>Date :</strong> 19 Juillet 2024 à 2:00 au 22
																	Juillet 2024 à 2:20<br>
																</p>

																<iframe frameborder="0"
																	src="https://itch.io/embed/2847092" width="208"
																	height="167">
																	<a href="https://quentinlorenzo.itch.io/waste-flow">
																		Waste Flow by Quentin Lorenzo, tgrl84, Romain
																		Liebert, Neps Nep
																	</a>
																</iframe>

																<h3>
																	Rapport avec le <strong class="color">thème</strong>
																</h3>

																<p>
																	Waste Flow de par son nom et son gameplay est en
																	lien avec le thème de la Game Jam.
																	Effectivement la tortue se laisse porter par le
																	courant et doit esquiver les déchets qui sont dans
																	ce dernier.
																	De plus, le joueur a la possibilité de récupéré de
																	la monnaie virtuel afin de pouvoir acheter des skins
																	et avoir
																	plus de flow/style.
																	Nous voulions faire un jeu amusant et en rapport
																	avec le thème tout en sensibilisant les gens à la
																	pollution des océans.
																	C'est donc comme cela que nous est venue l'idée de
																	ce jeu
																</p>

																<h3>
																	Les <strong class="color">fonctionnalités</strong>
																</h3>

																<p>
																	Le joueurs doit seulement déplacer le haut en bas et
																	de droite à gauche pour esquiver les déchets.
																	Il peut récupérer les étoiles de mer qui sont les
																	collectibles du jeu permettant d'acheter des skins.
																	L'autre collectible est plus rare et permet de
																	récupérer 1 point de vie, c'est la méduse.
																	La vitesse du jeu augmente au fur et à mesure. Ce
																	qui veut dire que le début sera simple mais après
																	les obstacles
																	seront beaucoup plus difficile à esquiver.
																	Le meilleur score du joueur ainsi que le nombre
																	d'étoiles de mer collecté sont enregistré en données
																	de cookie sur
																	navigateur et dans un fichier sur PC.
																</p>

															</div>

														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>
							</li>

						</ul>

					</div>

				</div>

			</section>


			<!--=====================================================
					Green IT Section
				=====================================================-->
			<section id='green_it' class='section resume-section border-d'>

				<div class='section-block about-block'>
					<div class='container-fluid'>

						<div class='section-header'>
							<h2>
								Projet Green IT : <strong class='color'>Néocity</strong>
							</h2>
						</div>


						<div class='col-md-19'>
							<div class='presentation-text'>
								<p>
									Néocity est un jeu développé par 3 étudiants lors d'un projet universitaire.
									Le but de ce projet était de créer un jeu qui devait être conçu le plus
									écologiquement possible.
									De plus, il devait être accessible, c'est-à-dire qu'un maximum de gens puisse y
									jouer.
									Ceci inclut dans notre cas les personnes en situation de handicap moteur.
								</p><br>

								<p>
									<strong>Langage utilisé :</strong> C#, JSON<br>
									<strong>Logiciel utilisé :</strong> Visual Studio, Unity, GitKraken<br>
									<strong>Nombre de personnes :</strong> 4<br>
									<strong>Temps de développement :</strong> 3 semaines à temps plein + 2 mois durant
									les heures dédiées et temps personnel<br>
									<strong>Date :</strong> Janvier - Mars 2024<br>
									<strong>GitHub :</strong> <a
										href="https://gitlab.antoine-chabanel.fr/n3rdt34m/neocity"
										target="_blank">Néocity</a>
								</p>

								<h3>
									Le <strong class="color">trailer</strong>
								</h3>
								<p>
									<iframe width="560" height="315"
										src="https://www.youtube.com/embed/Og4vOZzyFlg?si=QOkGsC0rAvj3SJ0G"
										title="YouTube video player" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
										referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								</p>

								<h3>
									Le <strong class="color">fonctionnement du jeu</strong>
								</h3>

								<p>
									Tout d'abord, Néocity est un jeu de gestion de ville. Le but est de gérer une ville
									en respectant l'environnement.
									Pour cela, le joueur aura 4 ressources à gérer : l'argent, le taux de CO2, le
									bonheur des habitants et le nombre d'habitants.
									Pour changer ces 4 ressources, le joueur pourra construire des bâtiments :
								</p>
								<ul>
									<li>Les loisirs permettent d’augmenter le bonheur dans sa ville</li>
									<li>Les usines permettent de faire travailler les gens</li>
									<li>Les habitations permettent d’augmenter la population de la ville</li>
								</ul>
								<p>
									Chacun des bâtiments pollue plus ou moins en fonction de sa taille et de son type.
									Par exemple, certains loisirs ne polluent pas car ce sont des parcs publics, alors
									que d'autres polluent beaucoup car ce sont des bars.
									Pour augmenter la population, nous avons mis en place une mécanique assez spéciale :
									un habitant n'existe que s'il travaille.
									Pour cela, il faut avoir au moins une usine et une résidence. Il est possible
									d'attribuer des habitants à des résidences pour déterminer où ils travaillent.
									Il y a aussi un hôtel de ville qui est améliorable et qui permet de débloquer des
									bâtiments.
									On peut également acheter de nouvelles parcelles pour agrandir la ville.
								</p>

								<h3>
									Notre démarche <strong class="color">écologique</strong>
								</h3>

								<p>
									Pour rendre notre jeu le plus écologique possible, nous avons mis en place plusieurs
									mécaniques :
								</p>
								<ul>
									<li>
										Lors de l'attribution des habitants à des usines, il faut prendre en compte la
										distance car cette distance déterminera si l'habitant prendra la voiture ou ira
										à pied.
										Bien évidemment, la voiture pollue alors que le vélo non.
									</li>
									<li>
										Lors de l'amélioration de l'hôtel de ville, il faut choisir entre 2 réformes.
										Ces deux réformes auront un impact écologique sur la ville.
										Par exemple, choisir entre promouvoir le covoiturage ou financer la recherche
										sur de nouvelles technologies d’isolation et débloquer un nouveau niveau
										d’amélioration pour ses logements.
									</li>
									<li>
										Nous proposons au joueur d’améliorer ses bâtiments afin de les rendre moins
										consommateurs d’énergie par habitant tout en augmentant leur capacité d’accueil.
									</li>
									<li>
										La pollution est un élément central du jeu. Si le taux de CO2 est trop élevé, il
										y a la possibilité de déclencher une catastrophe écologique qui réduira le
										bonheur des habitants :
										<ul>
											<li>
												La catastrophe la plus destructrice est la tempête, elle raye tout
												simplement des bâtiments de la carte.
												<figure>
													<img src="images/Neocity/preview_tempete-ezgif.com-video-to-gif-converter.gif"
														alt="" class="petite-image">
													<figcaption>Apparence tempete en jeu</figcaption>
												</figure>
											</li>
											<li>
												L'inondation est un peu moins destructrice mais touche plus de
												bâtiments, elle diminue le niveau de plusieurs bâtiments de la ville.
												<figure>
													<img src="images/Neocity/preview_inondation-ezgif.com-video-to-gif-converter.gif"
														alt="" class="petite-image">
													<figcaption>Apparence inondation en jeu</figcaption>
												</figure>
											</li>
											<li>
												Enfin, plus gentille, il y a la canicule qui réduit le bonheur des
												habitants de la ville pendant un temps, ce qui va réduire les revenus du
												joueur.
												<figure>
													<img src="images/Neocity/preview_canicule-ezgif.com-video-to-gif-converter.gif"
														alt="" class="petite-image">
													<figcaption>Apparence canicule en jeu</figcaption>
												</figure>
											</li>
										</ul>
									</li>
								</ul>

								<h3>
									Notre démarche <strong class="color">accessibilité</strong>
								</h3>

								<p>
									Afin de rendre notre jeu le plus accessible possible, nous avons implémenté la
									possibilité de jouer avec une manette.
									Grâce à cela, le jeu est jouable sur console et sur PC. Mais aussi par des personnes
									en situation de handicap moteur.
									Effectivement, avec des technologies comme le <a
										href="https://www.microsoft.com/fr-fr/d/manette-xbox-adaptive/8nsdbhz1n3d8"
										target="_blank">Xbox Adaptive Controller</a>, il est possible d'émuler une
									manette avec des boutons plus gros et plus faciles à appuyer.
									Ainsi, les personnes en situation de handicap moteur peuvent jouer à notre jeu.
								</p>

								<h3>
									Le développement de <strong class="color">Néocity</strong>
								</h3>

								<p>
									Le sujet de la création du jeu nous a été distribué le 8 janvier 2024 matin. Le
									sujet était donc de créer un jeu vidéo.
									Nous avons donc commencé par réfléchir à ce que nous voulions faire comme type de
									jeu car le sujet était très large.
									Plusieurs idées nous étaient venues en tête mais nous avons finalement choisi de
									faire un jeu de gestion de ville car c'est un style de jeu que nous n'avions jamais
									fait.
									Ensuite, nous avons brainstormé sur les mécaniques que nous voulions mettre en place
									et sur le thème du jeu. Cela nous a pris 2 jours pendant lesquels nous n'avons pas
									codé.
									Il en est ressorti que nous voulions un jeu de gestion avec plusieurs restrictions :
								</p>

								<ul>
									<li>
										Il nous fallait peu de bâtiments à développer car nous n'avions que 3 semaines.
										Nous avons donc choisi de faire un jeu de gestion de ville avec 3 bâtiments :
										les loisirs, les usines et les habitations.
									</li>
									<li>
										Nous voulions un jeu écologique. Nous avons donc décidé de mettre en place un
										système de pollution.
										Chaque bâtiment pollue plus ou moins en fonction de sa taille et de son type.
										Par exemple, certains loisirs ne polluent pas car ce sont des parcs publics,
										alors que d'autres polluent beaucoup car ce sont des bars.
									</li>
									<li>
										Nous avons choisi de créer des terrains de 9 par 7 avec les routes déjà tracées.
										Cela nous a permis de gagner du temps sur le développement car nous savions que
										les routes étaient une mécanique complexe à mettre en place.
										Effectivement, si le joueur place les routes lui-même, il faut que les bâtiments
										soient reliés à une route pour fonctionner. Et il faut que toutes les routes
										soient reliées les unes aux autres.
										C'est en sachant cela que nous avons décidé de les placer nous-mêmes et de créer
										plusieurs terrains avec des routes différentes.
									</li>
									<li>
										Nous avons implémenté un hôtel de ville qui permet de débloquer des bâtiments et
										de choisir entre 2 réformes qui auront un impact écologique sur la ville.
										Cette mécanique nous permettait d'ajouter de la positivité à notre jeu en
										permettant au joueur de choisir entre 2 bonnes choses.
									</li>
									<li>
										Et il nous fallait un tutoriel.
										Nous avions tout d'abord pensé à un tutoriel avec un personnage qui explique
										comment jouer et qui bloque nos actions tant que l'on n'a pas fait ce qu'il
										demande.
										Mais cela demandait beaucoup de temps et nous n'avions pas le temps de le faire.
										Nous avons donc décidé de faire un tutoriel écrit qui s'affiche en haut de
										l'écran et qui est accessible à tout moment dans le jeu.
									</li>
								</ul>

								<p>
									Après ce brainstorming, nous avons commencé le développement du jeu.
									Personnellement, je me suis occupé de l'intégralité des UI du jeu. J'ai donc fait le
									lien entre l'interface et le code.
									Dans le groupe, nous travaillions beaucoup ensemble car tout était lié. Par exemple,
									mes UI devaient être liées avec le code qui modifiait les variables du jeu.
									Nous avons donc travaillé pendant 3 semaines à temps plein. À la fin de ces 3
									semaines, nous avons eu une soutenance devant un jury où nous leur avons présenté
									notre jeu. <br><br>
									Les remarques qui avaient été faites lors de la soutenance étaient les suivantes :
								</p>
								<ul>
									<li>Le jeu est trop fataliste. La pollution ne fait que grimper et il n'y a pas de
										moyen de la faire baisser.</li>
									<li>Il n'y a pas de réel enjeu à ne pas polluer car même si on perd un peu d'argent,
										au final le jeu est juste ralenti et on peut continuer à jouer. On ne perd rien
										et il n'y a pas de punitions.</li>
								</ul>

								<p>
									C'est ainsi que nous est venue l'idée de changer le système des ressources et
									d'ajouter des catastrophes écologiques.
									Au départ, la pollution faisait baisser le bonheur des habitants et donc les revenus
									du joueur.
									Maintenant, la pollution n'influe pas sur le bonheur des habitants mais peut
									déclencher des catastrophes écologiques qui elles, font baisser le bonheur des
									habitants et nous font perdre de l'argent.
									Ainsi, le joueur a un réel enjeu à ne pas polluer car il peut tout perdre s'il ne
									fait pas attention.
								</p>

								<p>
									Nous avons donc passé 2 mois à retravailler le jeu pour le rendre plus intéressant
									et plus jouable.
								</p>

								<h3>
									<strong class="color">Conclusion</strong>
								</h3>

								<p>
									Ce projet etait très intéressant car il nous a permis de découvrir comment
									developper un city builder.
									C'etait notre premier grand projet de jeu vidéo et nous avons appris beaucoup de
									choses comme comment bien se repartir les taches.
									Nous sommes fier d'avoir penser à créer un jeu qui sensibilise les gens à l'écologie
									ce qui a été la base de notre projet.
									Ce projet m'a permis de me confirmer dans mon choix d'orientation qui est le
									développement car nous avons passé beaucoup de temps à coder et cela était amusant
									mais aussi parfoit frustrant car ça ne marchait pas.
								</p>
							</div>
						</div>

					</div>
				</div>

			</section>


			<!--=====================================================
					Contact Section
				=====================================================-->
			<section id='contact' class='section contact-section border-d'>

				<div class='section-block contact-block'>

					<div class='container-fluid'>

						<div class='section-header'>
							<h2>Contactez <strong class='color'>Moi</strong></h2>
						</div>

						<div class='row'>

							<div class='col-md-4'>

								<div class='contact-info-icons'>

									<div class='contact-info'>

										</a><i class='ion-social-linkedin'></i>

										<a href="https://www.linkedin.com/in/quentin-lorenzo/" target="_blank"
											style="color:rgba(0,0,0,.4);">

											<p>
												<br>linkedin.com/in/quentin-lorenzo/
											</p>

										</a>

									</div>


									<div class='contact-info'>

										<i class='ion-ios-email'></i>

										<a href="mailto:quentinlorenzo04@gmail.com" target="_blank"
											style="color:rgba(0,0,0,.4);">

											<p>
												<br>quentinlorenzo04@gmail.com
											</p>

										</a>
									</div>


									<div class='contact-info'>

										<i class='ion-social-github'></i>

										<a href="https://github.com/Geenzao" target="_blank"
											style="color:rgba(0,0,0,.4);">

											<p>
												<br>github.com/Geenzao
											</p>

										</a>
									</div>


									<div class='contact-info'>

										<i class='ion-android-globe'></i>

										<a href="https://quentinlorenzo.itch.io" target="_blank"
											style="color:rgba(0,0,0,.4);">

											<p>
												<br>quentinlorenzo.itch.io
											</p>

										</a>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

		</div>

	</div>

	<!--=====================================================
			JavaScript Files
		=====================================================-->
	<script src='js/jquery.min.js'></script>
	<script src='js/jquery.shuffle.min.js'></script>
	<script src='js/owl.carousel.min.js'></script>
	<script src='js/jquery.magnific-popup.min.js'></script>
	<script src='js/validator.min.js'></script>
	<script src='js/script.js'></script>

</body>

</html>