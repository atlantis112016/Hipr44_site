<?php
/*
* Template Name: Recrutons
* Description: Nous recrutons
*/

get_header(); ?>
    <!--Main layout-->
    <main id="top-section">
        <div class="container-fluid" style="margin: 0;padding: 0">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/nousrecrutons2.jpg" style="height: 600px;width: 100%">
        </div>
    <!-- TITRE SOIGNANTS -->
        <div class="container text-center" style="margin-top: 5%">
            <div class="card testimonial-card wow fadeIn" data-wow-delay="0.2s">
                <div class="card-up  cyan darken-1 white-text">
                    <h2 class="card-title vertical-center" style="font-weight: bold">POSTES A POURVOIR SOIGNANTS</h2>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 5%">
            <div id="pCards-com">
                <div class="row">
                    <!--Rotating card Médecins-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-1" class="card-rotating effect__click">
                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">0</span></h1>
                                    </div>
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/doctor2.jpg" class="img-fluid">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/medecin1.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Médecin</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-1" style="font-weight: bold"><i class="fa fa-repeat"></i>  Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 3 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button--> 
                                    <a class="rotate-btn cyan-text" data-card="card-1" style="font-weight: bold"><i class="fa fa-undo"></i>  Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Rotating card Médecins-->

                    <!--Rotating card Infirmières-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-2" class="card-rotating effect__click">

                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">3</span></h1>
                                    </div>
                                         <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/x-ray.jpg" class="img-fluid">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/nurse.jpg" style="width: 120px;height: 120px;" class="rounded-circle img-responsive">
                                    </div>
                                     <!--Content-->
                                    <div class="card-block">
                                        <h4>Infirmière</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-2" style="font-weight: bold"><i class="fa fa-repeat"></i>  Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 1 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button--> 
                                    <a class="rotate-btn cyan-text" data-card="card-2" style="font-weight: bold"><i class="fa fa-undo"></i>  Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Rotating card Infirmières-->

                    <!--Rotating card Aides Soignantes-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-3" class="card-rotating effect__click">
                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">1</span></h1>
                                    </div>
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/hospital.jpg" class="img-fluid">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/surgery.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Aide Soignante</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-3" style="font-weight: bold"><i class="fa fa-repeat"></i> Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 2 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" data-card="card-3" style="font-weight: bold"><i class="fa fa-undo"></i>  Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Rotating Aides Soignantes-->
                </div>
        </div>
        </div>
    <!-- ./TITRE SOIGNANTS -->
        <hr class="between-sections">
    <!-- TITRE MEDICO-TECHNIQUE -->
        <div class="container text-center" style="margin-top: 5%">
            <div class="card testimonial-card wow fadeIn" data-wow-delay="0.2s">
                <div class="card-up  cyan darken-1 white-text">
                    <h2 class="card-title vertical-center" style="font-weight: bold">POSTES A POURVOIR MEDICO-TECHNNIQUES</h2>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 5%">
            <div id="pCards-com">
                <div class="row">
                    <!--Rotating card Kinés-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-4" class="card-rotating effect__click">
                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">0</span></h1>
                                    </div>
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/kine.jpg" class="img-fluid">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/medecin1.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Kinésithérapeute</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-4" style="font-weight: bold"><i class="fa fa-repeat"></i> Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 3 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" data-card="card-4" style="font-weight: bold"><i class="fa fa-undo"></i> Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Rotating card Kinés-->

                    <!--Rotating card Ergothérapeute-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-5" class="card-rotating effect__click">

                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">3</span></h1>
                                    </div>
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/ergo.jpg" class="img-fluid">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/nurse.jpg" style="width: 120px;height: 120px;" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Ergothérapeute</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-5" style="font-weight: bold"><i class="fa fa-repeat"></i> Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 1 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" data-card="card-5" style="font-weight: bold"><i class="fa fa-undo"></i>  Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Rotating card Ergothérapeute-->

                    <!--Rotating card Préparateur en pharmacie-->
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div id="card-6" class="card-rotating effect__click">
                                <!--Front Side-->
                                <div class="face front">
                                    <div class="badgeRecrut">
                                        <h1><span class="badge cyan ">0</span></h1>
                                    </div>
                                    <!-- Image-->
                                    <div class="card-up">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/addiction.jpg" class="img-fluid">
                                    </div>
                                    <!--Avatar-->
                                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/surgery.jpg" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Content-->
                                    <div class="card-block">
                                        <h4>Préparateur en pharmacie</h4>
                                        <p>Poste à pourvoir</p>
                                        <!--Triggering button-->
                                        <a class="rotate-btn cyan-text" data-card="card-6" style="font-weight: bold"><i class="fa fa-repeat"></i> Cliquez ici pour voir le détails</a>
                                    </div>
                                </div>
                                <!--/.Front Side-->

                                <!--Back Side-->
                                <div class="face back">
                                    <!--Content-->
                                    <h4>Détails</h4>
                                    <hr>
                                    <p>Cliquez sur le lien pour voir le détails</p>
                                    <p><a href="" target="_blank" ><i class="fa fa-download"></i> Fiche de poste</a> </p>
                                    <hr>
                                    <h4>Personne à contacter :</h4>
                                    <ul>
                                        <li> Pôle 2 </li>
                                        <li><i class="fa fa-phone-square"></i> 02.xx.xx.xx.xx</li>
                                        <li><a href="mailto:drh@hipr44.fr?subject=Poste IDE"><i class="fa fa-envelope"></i> drh@hipr44.fr</a></li>
                                    </ul>
                                    <p>Vous pouvez nous envoyer vos CV et lettre de motivation, en cliquant sur le mail</p>
                                    <!--Triggering button-->
                                    <a class="rotate-btn cyan-text" data-card="card-6" style="font-weight: bold"><i class="fa fa-undo"></i>  Cliquez ici pour retourner la carte</a>

                                </div>
                                <!--/.Back Side-->

                            </div>
                        </div>
                    </div>
                    <!--/.Préparateur en pharmacie-->
                </div>
            </div>
        </div>
    <!-- ./TITRE MEDICO-TECHNIQUE -->
    </main>
    <!--/.Main layout-->
<?php get_footer(); ?>