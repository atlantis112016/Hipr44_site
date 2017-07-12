<?php 
/*  
* Template Name: Medecine/SSR
* Description: Médecine/SSR
*/

 get_header(); ?>



<!--Information complémentaires Tarif médecine-->
    <div class="modal fade" id="modalinfomed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header blue darken-2 white-text">
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-info-circle"></i> Informations complémentaires</h4>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">

                    <div class="text-center">
                        <p class="text-gray font-weight-normal"><b><u>Médecine </b></u>: <br>Tarif de 329.00 € (prise en charge par les caisses d'assurance maladie entre 80% et 100% selon votre situation) auquel s'ajoute un forfait journalier de 18.00€ (à votre charge ou pris en charge par votre mutuelle).</p>
                        <p class="text-gray font-weight-bold">En cas de demande de chambre particulière, un supplément de 33.00 € par jour vous sera facturé (à votre charge ou pris en charge par votre mutuelle).</p>
                    </div>

                <div class="text-center mt-1-half">
                    <button type="button" class="btn btn-secondary blue darken-2" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--/.Information complémentaires Tarif médecine-->

<!--Information complémentaires Tarif SSR-->
    <div class="modal fade" id="modalinfossr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header indigo darken-3 white-text">
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-info-circle"></i> Informations complémentaires</h4>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">

                <div class="text-center">
                    <p class="text-gray font-weight-normal"><b><u>Soins de Suite et Réadaptation </b></u>: <br>Tarif de 189.00 € (prise en charge par les caisses d'assurance maladie entre 80 % et 100 % selon votre situation).
                        Forfait journalier de 18.00 € (à votre charge ou pris en charge par votre mutuelle).
                    </p>
                    <p class="text-gray font-weight-bold">En cas de demande de chambre particulière, un supplément de 33.00 € par jour vous sera facturé (à votre charge ou pris en charge par votre mutuelle).</p>
                </div>

                <div class="text-center mt-1-half">
                    <button type="button" class="btn btn-secondary indigo darken-3" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--/.Information complémentaires Tarif SSR-->

<!--Main layout-->
<main id="top-section">
        <!-- Image d'en-Tête -->
        <div class="container-fluid" style="margin: 0;padding:0">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/couloir1.png" style="height: 800px;width: 100%">
        </div>
       <!-- Descriptif Médecine/SSR-->
        <div class="container">
            <section id="descConsult" class="section feature-box mt-4 mb-3">
                <div class="card testimonial-card wow fadeIn" data-wow-delay="0.2s">
                    <!--Background color-->
                    <div class="card-up  cyan darken-1 white-text">
                        <h2 class="card-title vertical-center" style="font-weight: bold">MEDECINE / SSR :</h2>
                    </div>
                    <div class="card-block">
                        <!--Text descriptif-->
                        <h3 class="card-title wow fadeIn">Les services de médecine / SSR assurent des examens de diagnostic, de traitement, de surveillance et de suivi des patients hospitalisés, des soins de rééducation fonctionnelle et de convalescence.</h3>
                        <hr class="between-sections" style="margin: 0;padding: 5px">
                        <!--Fonctionnement-->
                        <h4 class="card-title wow fadeIn cyan-text" style="padding: 10px" data-wow-delay="0.2s">
                            L'objectif est d'offrir une prise en charge personnalisée des patients dans leur globalité: traitement des pathologies, prévention des complications, recouvrement de l'autonomie du malade en vue d'un retour à domicile.                      </h4>
                        <hr class="between-sections" style="margin: 0;padding: 10px">
                        <h4 class="cyan-text text-center" >L'établissement possède 87 lits regroupant ces 2 spécialités:</h4>
                        <p class="section-description wow fadeIn text-justify" data-wow-delay="0.2s" style="margin-bottom: 15px">
                            <ul>
                                <li> - 30 lits de médecine (dont 4 lits identifiés en soins palliatifs) sur Pornic,</li>

                                <li> - 30 lits de SSR sur Pornic, </li>

                                <li> - 27 lits de SSR sur la commune de Paimboeuf, </li>

                            </ul>

                            Les soins palliatifs sont des soins actifs, continus et évolutifs pratiqués par une équipe pluridisciplinaire. Ils visent à soulager la douleur, à apaiser la souffrance psychique, à sauvegarder la dignité de la personne malade et à soutenir son entourage.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!-- ./Descriptif Médecine/SSR-->

        <!-- Parallax -->
        <div class="streak streak-lg streak-photo view intro mb-3 " style='background: url("<?php bloginfo( 'template_directory' ); ?>/img/chbre2.jpg")no-repeat center center fixed; background-size: cover;'>

        </div>
        <!--./Parallax-->

    <!-- Onglet Anticiper sa sortie -->
    <div class="container">
        <section class="section">
            <!--Section heading-->
            <h1 class="section-heading">Anticipez votre sortie !</h1>
            <!--Section description-->
            <p class="section-description">Sortir de l’hôpital, au terme d’un séjour de quelques jours à quelques semaines, n’est pas forcément un événement qui va de soi. C’est en ce sens qu’il est nécessaire d’anticiper et de préparer votre sortie afin qu’elle se passe dans les meilleures conditions possibles.
                <br>Le personnel hospitalier vous remettra une ordonnance de sortie, le cas échéant des prescriptions de soins, courrier pour votre médecin traitant et date de rendez-vous si besoin. Les radiographies vous seront également rendues. L'unité de SSR est en relation avec votre médecin traitant qui sera informé du déroulement de votre séjour.</p>
            <ul class="nav nav-tabs tabs-3 cyan" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-home"></i> Votre retour à domicile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-bed"></i> Vers un long séjour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-assistive-listening-systems"></i> Une équipe à votre écoute</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content card">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                    <br>
                    <p class="text-justify">Bien que le retour à domicile soit vécu comme la meilleure solution pour tous, il demande, dans de nombreux cas, une préparation qui permettra de le réussir au mieux.
                        Il peut être nécessaire d’aménager le logement, mais aussi de coordonner les différents intervenants tels que l’infirmière, le kinésithérapeute, l’aide-ménagère…</p>
                    <p class="text-justify">Parfois, une visite à votre domicile peut être organisée afin d’évaluer vos difficultés au sein de votre environnement quotidien. Un compte rendu avec des conseils d’aménagements et d’adaptations vous sera remis par l’ergothérapeute.
                        Si cela est nécessaire, une démonstration ainsi que l’essai du matériel peut se faire à l’hôpital, au sein du service de rééducation. La visite se fait avec vous, votre entourage et une équipe de professionnels, au cours de votre hospitalisation.</p>
                </div>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <div class="tab-pane fade" id="panel6" role="tabpanel">
                    <br>
                    <p class="text-justify">Le passage vers une unité de long séjour ou une maison de retraite n’est pas non plus chose facile. A tout point de vue, il demande bien souvent une importante préparation psychologique et administrative. Le choix de la structure la plus adaptée à votre situation doit être précis.</p>
                    <p class="text-justify">Il est aussi important de préparer les familles à cette situation nouvelle.</p>
                </div>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <div class="tab-pane fade" id="panel7" role="tabpanel">
                    <br>
                    <p class="text-justify">Nous vous proposons l’aide d’une équipe pluridisciplinaire composée du personnel soignant, des médecins, des cadres de santé, des kinésithérapeutes, d’une diététicienne, d’une assistante sociale, d’une ergothérapeute et d’un psychologue.
                        Tous mettront leurs compétences à votre service pour réussir au mieux votre sortie de l’hôpital.</p>
                    <p class="text-justify">
                    <h5 class="cyan-text font-weight-bold"><b><u>L’assistante sociale:</u></b></h5>
                    Lors d’un retour à domicile, l’assistante sociale pourra vous aider dans vos démarches administratives, vos demandes d’aides financières et dans la recherche de personnes aidantes (infirmières, aides ménagères, auxiliaires de vie, portage des repas, téléalarme…).
                    Dans le cas d’un passage en hébergement, l’assistante sociale peut vous informer sur les services et structures adéquates à votre situation et vous aider dans vos démarches administratives.
                    </p>
                    <p class="text-justify">
                    <h5 class="cyan-text font-weight-bold"><b><u>L’ergothérapeute:</b></u></h5>
                    L’ergothérapeute, après évaluation de vos capacités, vous aidera à maintenir votre autonomie à domicile et vous conseillera sur les aménagements de votre environnement (petit et gros ménagements, salle de bain, chambre, lit médicalisé, barres d’appui, fauteuil de repos…).
                    </p>
                    <p class="text-justify">
                    <h5 class="cyan-text font-weight-bold"><b><u>Le psychologue:</b></u></h5>
                    Le psychologue vous aidera à vous préparer à un retour moins stressant ou à un passage en maison de retraite ou en long séjour quelquefois redouté tant par le patient que par la famille.
                    Il soutiendra la famille pour assumer au mieux les situations nouvelles en favorisant les prises de paroles souvent difficiles dans ce moment-là.
                    Les services proposés par cette équipe font partie de ceux que vous offre l’hôpital dans le cadre de votre admission en séjour de soins de suite et de rééducation ou en médecine.
                    </p>
                    <p class="justify-content-center">
                        Les interventions de chacun de ces trois professionnels sont entièrement gratuites.
                        N’hésitez pas à les solliciter soit en vous adressant au personnel soignant, soit en les contactant directement :
                        L’assistante sociale, Mme LANDAIS - 04 75 88 80 62 - p.landais@ch-vdb.fr
                        L’ergothérapeute, Mme AGHULON - 04 75 88 80 09 - ergov120@ch-vdb.fr
                        Le psychologue, M. SALICRU - 04 75 88 80 47 tous les matins entre 8h30 et 9h30.</p>
                </div>
                <!--/.Panel 3-->
            </div>
        </section>
    </div>
    <!--/.Onglet  Anticiper sa sortie-->

    <!-- Chiffres Médecine/SSR -->
    <div class="container-fluid mt-3 background-dark">
        <div class="mask flex-center">
            <div class="container">

                <h3 class="text-center text-white font-up font-bold mt-5 mb-2 wow fadeIn" data-wow-delay="0.2s">Chiffres clés des services Médecine/SSR</h3>

                <!--First row-->
                <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

                    <!--First column-->
                    <div class="col-md-3 mt-2 mb-5">
                        <h1 class="cyan-text font-bold">+4</h1>
                        <p>Praticiens Hospitaliers</p>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-2 mt-2 mb-5">
                        <h1 class="cyan-text font-bold">+2</h1>
                        <p>Kinésithérapeutes</p>
                    </div>
                    <!--/Second column-->
                    <!--Third column-->
                    <div class="col-md-2 mt-2 mb-5">
                        <h1 class="cyan-text font-bold">+1</h1>
                        <p>Ergothérapeute</p>
                    </div>
                    <!--/Third column-->
                    <!--Fourth column-->
                    <div class="col-md-2 mt-2 mb-5">
                        <h1 class="cyan-text font-bold">+1</h1>
                        <p>Assistante Sociale</p>
                    </div>
                    <!--/Fourth column-->

                    <!--five column-->
                    <div class="col-md-2 mt-2 mb-5">
                        <h1 class="cyan-text font-bold">+1</h1>
                        <p>Diététicienne</p>
                    </div>
                    <!--/five column-->

                </div>
                <!--/First row-->
            </div>
        </div>
    </div>
    <!-- /Chiffres Médecine/SSR -->

    <!--Section: Nos Tarifs-->
    <div class="container">
        <section class="section">
            <!--Section heading-->
            <h1 class="section-heading">Nos Tarifs</h1>
            <!--Section description-->
            <p class="section-description">Les tarifs sont fixés par l'Agence Régionale de Santé </p>

            <br>
            <div id="pCards-com">
                <div class="row">
                    <!-- Médecine carte de prix -->
                    <div class="col-md-6">
                        <!--Pricing card-->
                        <div class="card pricing-card  hoverable">
                            <!--Label-->
                            <div class="price header blue darken-2">
                                <h1 class="price">329</h1>
                                <div class="version">
                                    <h5>MEDECINE</h5>
                                </div>
                            </div>
                            <!--Content-->
                            <div class="card-block striped">
                                <ul>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Soins</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font>Kinésithérapie</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Ergothérapie</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Assistante sociale</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Psychologue</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Diététicienne</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> La télévision n'est pas compris dans le forfait (vous pouvez louer au tarifs de 3€TTC/jours)</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> La téléphone n'est pas compris dans le forfait (Pour tout renseignement, voir avec le bureau des entrées)</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> Pas d'Internet, pensez à enmener une clé 3G/4G</font></font></p>
                                    </li>
                                </ul>
                                <!--CTA-->
                                <a class="btn btn-danger btn-etc waves-effect waves-light" data-toggle="modal" data-target="#modalinfomed"><font><font>Plus d'info</font></font></a>
                            </div>
                            <!--/.Content-->
                        </div>
                        <!--/.Pricing card-->

                    </div>
                    <!-- SSR carte de prix -->
                    <div class="col-md-6">
                        <!--Pricing card-->
                        <div class="card pricing-card">
                            <!--HEADER-->
                            <div class="price header indigo darken-2">
                                <h1 class="price">189</h1>
                                <div class="version">
                                    <h5>SSR</h5>
                                </div>
                            </div>
                            <!--HEADER-->
                            <!--Content-->
                            <div class="card-block striped">
                                <ul>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Soins</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font>Kinésithérapie</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Ergothérapie</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Assistante sociale</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Psychologue</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-check green-text"></i><font><font> Diététicienne</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> La télévision n'est pas compris dans le forfait (vous pouvez louer au tarifs de 3€TTC/jours)</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> La téléphone n'est pas compris dans le forfait (Pour tout renseignement, voir avec le bureau des entrées)</font></font></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-times red-text"></i><font><font> Pas d'Internet, pensez à enmener une clé 3G/4G</font></font></p>
                                    </li>
                                </ul>
                                <!--CTA-->
                                <a class="btn btn-danger btn-etc waves-effect waves-light" data-toggle="modal" data-target="#modalinfossr"><font><font>Plus d'info</font></font></a>

                            </div>
                            <!--/.Content-->
                        </div>
                        <!--/.Pricing card-->

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/Section: Nos Tarifs v.4-->

   <!--Documents à télécharger-->
    <div class="container">
        <hr class="between-sections">
        <section class="section">
            <h1 class="section-heading">Les documents à télécharger</h1>
        <div class="row">
            <!--Card Charte de la personne Hospitalisée-->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay view hm-bluegrey-light">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/medical/resident.jpg" class="img-fluid" alt="Residents">
                        <a href="<?php bloginfo( 'template_directory' ); ?>/img/charte_pershospitalisee.pdf" target="_blank">
                            <div class="mask waves-effect waves-light hm-blue-strong"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title cyan-text"><i class="fa fa-heartbeat fa-2x"></i> Charte de la personne Hospitalisée</h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text text-justify">L'objectif de la présente charte est de faire connaître aux personnes
                            malades, accueillies dans les établissements de santé, leurs droits essentiels
                            tels qu’ils sont affirmés par les lois – notamment la loi du 4 mars 2002 relative
                            aux droits des malades et à la qualité du système de santé – et les principaux
                            décrets, arrêtés, circulaires et chartes dont les références figurent en annexe..</p>
                        <div class="text-center" style="margin-top: 40px;">
                            <a class="btn btn-primary" href="<?php bloginfo( 'template_directory' ); ?>/img/charte_pershospitalisee.pdf" target="_blank">Plus d'info</a>
                        </div>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>
            <!--./Card Charte de la personne Hospitalisée-->
            <!--Card personne de confiance-->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay view hm-bluegrey-light">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/confiance.jpg" class="img-fluid" alt="Residents">
                        <a href="<?php bloginfo( 'template_directory' ); ?>/img/pers_confiance.pdf" target="_blank">
                            <div class="mask waves-effect waves-light hm-blue-strong"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title cyan-text"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Personne de confiance </h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text text-justify">Vous pouvez désigner dans votre entourage une personne de confiance qui peut, si vous le souhaitez, vous accompagner dans vos démarches de santé
                            − y compris lors des consultations médicales − et transmettre à l’équipe soignante vos volontés au cas où vous seriez hors d’état de vous exprimer.Elle peut vous accompagner dans vos démarches, assister à vos entretiens
                            médicaux et, éventuellement, vous aider à prendre des décisions concernant votre santé.
                        </p>
                        <div class="text-center">
                            <a class="btn btn-primary" href="<?php bloginfo( 'template_directory' ); ?>/img/pers_confiance.pdf" target="_blank">Plus d'info</a>
                        </div>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>
            <!--./Card personne de confiance-->
        </div>
        </section>
    </div>
    <!--/.Documents à télécharger-->

</main>



</main>

<!--/.Main layout-->
<?php get_footer(); ?>
