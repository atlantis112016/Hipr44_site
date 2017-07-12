<?php 
/*  
* Template Name: Consultations
* Description: Consultations externes
*/

 get_header(); ?>

<!--Main layout-->
<main id="top-section">
        <div class="container-fluid" style="margin: 0;padding:0">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/consult_header.jpg" style="height: 600px;width: 100%">
        </div>
       <!--Descriptif consultation-->
        <div class="container">
            <section id="descConsult" class="section feature-box mt-4 mb-3">
                <div class="card testimonial-card wow fadeIn" data-wow-delay="0.2s">
                    <!--Background color-->
                    <div class="card-up  cyan darken-1 white-text">
                        <h2 class="card-title vertical-center" style="font-weight: bold">Consultations externes :</h2>
                    </div>
                    <div class="card-block">
                        <!--Text descriptif-->
                        <h3 class="card-title wow fadeIn">Pour prendre RDV, appelez le  02.51.74.79.27.</h3>
                        <h4 class="card-title wow fadeIn">Carte Vitale et pièce d'identité sont à présenter au secrétariat dès votre arrivée.</h4>
                        <hr class="between-sections" style="margin: 0;padding: 5px">
                        <!--Fonctionnement-->
                        <h4 class="card-title wow fadeIn cyan-text" style="padding: 10px" data-wow-delay="0.2s">
                            Afin de respecter le dispositif du parcours de soins coordonné, il est conseillé de consulter en priorité votre médecin traitant qui vous informera et vous orientera vers un médecin spécialisé.                        </h4>
                        <hr class="between-sections" style="margin: 0;padding: 10px">
                        <h4 class="cyan-text text-left" style="margin-left: 10%">Venir en consultation :</h4>
                        <p class="section-description wow fadeIn text-justify" data-wow-delay="0.2s" style="line-height: 2em">

                            Vous avez pris rendez-vous pour une consultation, vous devrez accomplir un certain nombre de formalités administratives. Ces formalités sont nécessaires à la prise en charge des frais de consultation par les organismes de sécurité sociale et de mutuelle auxquels vous êtes affiliés.
                            <br>Le personnel et les assistantes de service social sont à votre disposition pour vous informer et vous aider dans vos démarches.
                            <br>A votre arrivée dans l’établissement, vous vous présenterez à l’accueil pour être informé sur le lieu de la consultation. Il vous sera remis après vérification de l’ouverture de vos droits, une fiche de circulation. Muni de ce document, vous rejoindrez ensuite la salle d’attente de consultations et remettrez cette fiche de circulation au secrétariat.
                            <br>Si à l’issue de la consultation, une hospitalisation doit être organisée, nous vous recommandons de réaliser une pré admission, c’est-à-dire constituer à l’avance votre dossier d’admission. Cette formalité s’effectue auprès du bureau des admissions situé dans le hall principal de l’établissement (heures d’ouverture : du lundi au vendredi de 8h à 18h).                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Parallax -->
        <div class="streak streak-lg streak-photo view intro mb-3 " style='background: url("<?php bloginfo( 'template_directory' ); ?>/img/medical/medical1.jpg")no-repeat center center fixed; background-size: cover;'>

        </div>
        <!--/Parallax-->

    <!--Section: Nos Médecins-->
    <div class="container">
            <section class="section">
                <!--Section heading-->
                <h1 class="section-heading">Notre équipe de Médecins spécialistes</h1>
                <!--Section description-->
                <p class="section-description">Nous proposons différentes consultations, nos médecins sont des spécialistes de l'hôpital de St Nazaire.
               Découvrez les, ainsi que les horaires de consultations.</p>

                <br>
                <div class="row">
                    <!--First column-->
                    <div class="col-lg-4 col-md-12">
                        <!--Rotating card-->
                        <div class="card-wrapper">
                            <div id="card-1" class="card-rotating effect__click">
                                <!--Front Side-->
                                <div class="face front">
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/operation1.jpg">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Vertical/People/img%20%284%29.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Dr Artmingeat</h4>
                                        <p>Spécialite en Rhumatologie</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-1" style="font-weight: bold"><i class="fa fa-repeat"></i> Plus d'info, cliquez ici</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back" style="line-height: 1rem">
                                    <!--Content-->
                                    <h4 class="cyan-text" style="margin-top:5px;"><i class="fa fa-info-circle"></i> INFORMATIONS</h4>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:10px;font-size: 14px;font-weight: 500">La rhumatologie est une spécialité médicale dédiée aux maladies musculosquelettiques.</p>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <!--Horaires-->
                                    <h5 class="cyan-text" style="font-weight:bold;margin-top:5px;margin-bottom: 10px"><i class="fa fa-calendar-check-o"></i> Horaires des consultations</h5>
                                    <ul>
                                        <li style="font-size: 12px"><i class="fa fa-calendar"></i> Mardi toute la journée</li>
                                        <li style="font-size: 12px"><i class="fa fa-clock-o"></i> 8:30 - 12:30  </li>
                                        <li style="font-size: 12px; margin-bottom: 5px"><i class="fa fa-clock-o"></i> 14:00 - 17:30  </li>
                                        <li style="font-size: 12px"><i class="fa fa fa-calendar"></i> Mercredi Après-Midi</li>
                                        <li style="font-size: 12px;margin-bottom: 5px"><i class="fa fa-clock-o"></i> 13:30 - 17:30 </li>
                                        <li style="font-size: 12px"><i class="fa fa-calendar"></i> Vendredi toute la journée</li>
                                        <li style="font-size: 12px"><i class="fa fa-clock-o"></i> 8:30 - 12:30  </li>
                                        <li style="font-size: 12px"><i class="fa fa-clock-o"></i> 14:00 - 17:30  </li>
                                    </ul>
                                    <hr class="between-sections" style="margin-top:10px;margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px"><u>Pour prendre RDV </u>: </p>
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px">Téléphonez au secrétariat au 02 51 74 78 78 du lundi au vendredi de 9h00 à 16h30 (accueil téléphonique) et le secrétariat est ouvert au public de 8h30 à 17 h.</p>
                                    <hr class="between-sections" style="margin-bottom: 0;padding-bottom: 0;">
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" style="font-weight: bold;padding-top: 0" data-card="card-1"><i class="fa fa-undo"></i> Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                        <!--/.Rotating card-->
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-4 col-md-12">

                        <!--Rotating card-->
                        <div class="card-wrapper">
                            <div id="card-2" class="card-rotating effect__click">

                                <!--Front Side-->
                                <div class="face front">

                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/hospital1.jpg">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/medecin1.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Dr Mabile</h4>
                                        <p>Spécialiste en Pneumologie</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-2" style="font-weight: bold"><i class="fa fa-repeat"></i> Plus d'info, cliquez ici</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back" style="line-height: 1.3rem">
                                    <!--Content-->
                                    <h4 class="cyan-text" style="margin-top:5px;"><i class="fa fa-info-circle"></i> INFORMATIONS</h4>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:10px;font-size: 14px;font-weight: 500">La pneumologie est la branche de la médecine étudiant et traitant les maladies pulmonaires et du système respiratoire en général.</p>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <!--Horaires-->
                                    <h5 class="cyan-text" style="font-weight:bold;margin-top:5px;margin-bottom: 10px"><i class="fa fa-calendar-check-o"></i> Horaires des consultations</h5>
                                    <ul>
                                        <li style="font-size: 12px"><i class="fa fa-calendar"></i> Mercredi Matin</li>
                                        <li style="font-size: 12px;margin-bottom: 5px"><i class="fa fa-clock-o"></i> 8:30 - 12:30  </li>
                                        <li style="font-size: 12px"><i class="fa fa fa-calendar"></i> Vendredi Après-Midi</li>
                                        <li style="font-size: 12px;"><i class="fa fa-clock-o"></i> 13:30 - 17:30 </li>
                                    </ul>
                                    <hr class="between-sections" style="margin-top:10px;margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px"><u>Pour prendre RDV </u>: </p>
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px">Téléphonez au secrétariat au 02 51 74 78 78 du lundi au vendredi de 9h00 à 16h30 (accueil téléphonique) et le secrétariat est ouvert au public de 8h30 à 17 h.</p>
                                    <hr class="between-sections" style="margin-bottom: 0;padding-bottom: 0;">
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" style="font-weight: bold;padding-top: 0" data-card="card-2"><i class="fa fa-undo"></i> Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                        <!--/.Rotating card-->
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-lg-4 col-md-12">

                        <!--Rotating card-->
                        <div class="card-wrapper">
                            <div id="card-3" class="card-rotating effect__click">

                                <!--Front Side-->
                                <div class="face front">

                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/hospital3.jpg">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Vertical/People/img%20%281%29.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Dr Chow</h4>
                                        <p>Spécialiste en Alcoologie</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-3" style="font-weight: bold"><i class="fa fa-repeat"></i>  Plus d'info, cliquez ici</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back" style="line-height: 1.1rem">
                                    <!--Content-->
                                    <h4 class="cyan-text" style="margin-top:5px;"><i class="fa fa-info-circle"></i> INFORMATIONS</h4>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:10px;font-size: 14px;font-weight: 500">Partie de la médecine qui étudie les effets de l’alcool sur l’organisme et particulièrement la dépendance qu’il entraîne et les moyens de la soigner.</p>
                                    <hr class="between-sections" style="margin-bottom: 10px">
                                    <!--Horaires-->
                                    <h5 class="cyan-text" style="font-weight:bold;margin-top:5px;margin-bottom: 10px"><i class="fa fa-calendar-check-o"></i> Horaires des consultations</h5>
                                    <ul>
                                        <li style="font-size: 12px"><i class="fa fa-calendar"></i> Lundi après-midi</li>
                                        <li style="font-size: 12px; margin-bottom: 5px"><i class="fa fa-clock-o"></i> 14:00 - 17:30  </li>
                                        <li style="font-size: 12px"><i class="fa fa fa-calendar"></i> Jeudi toute la journée</li>
                                        <li style="font-size: 12px"><i class="fa fa-clock-o"></i> 8:30 - 12:30  </li>
                                        <li style="font-size: 12px"><i class="fa fa-clock-o"></i> 14:00 - 17:30  </li>
                                    </ul>
                                    <hr class="between-sections" style="margin-top:10px;margin-bottom: 10px">
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px"><u>Pour prendre RDV </u>: </p>
                                    <p class="text-gray-dark" style="margin-top:5px; margin-bottom:5px;font-size: 12px">Téléphonez au secrétariat au 02 51 74 78 78 du lundi au vendredi de 9h00 à 16h30 (accueil téléphonique) et le secrétariat est ouvert au public de 8h30 à 17 h.</p>
                                    <hr class="between-sections" style="margin-bottom: 0;padding-bottom: 0;">
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" style="font-weight: bold;padding-top: 0" data-card="card-3"><i class="fa fa-undo"></i> Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                        <!--/.Rotating card-->
                    </div>
                    <!--/Third column-->

                </div>
            </section>
    </div>
    <!--/Section: Team v.4-->
    <!--/.Content-->

</main>

<!--/.Main layout-->
<?php get_footer(); ?>
