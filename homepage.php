<?php 
/*  
* Template Name: Accueil  
* Description: Homepage  
*/

 get_header(); ?>

<!-- POPUP coordonnées -->
<!--Information complémentaires Tarif EHPAD-60 -->
<div class="modal fade" id="modalinfo-60" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
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
                    <p class="text-gray font-weight-normal"><b><u>Tarif journalier Maison de Retraite (EHPAD) : </b></u> <br></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Forfait soins</th>
                            <th>Hébergement</th>
                            <th>Dépendance</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Hébergement</th>
                            <td><i class="fa fa-times red-text"></i> </td>
                            <td class="blue-text font-weight-bold">49€ TTC/jrs</td>
                            <td><i class="fa fa-times red-text"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">Gir 1 à 6</th>
                            <td class="blue-text font-weight-bold">26.19€ TTC/jrs</td>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td><i class="fa fa-times red-text"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">Gir 1 et 2</th>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td class="blue-text font-weight-bold">25,22€ TTC/jrs</td>
                        </tr>
                        <tr>
                            <th scope="row">Gir 3 et 4</th>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td class="blue-text font-weight-bold">15,32€ TTC/jrs</td>
                        </tr>
                        <tr>
                            <th scope="row">Gir 5 et 6</th>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td><i class="fa fa-times red-text"></i></td>
                            <td class="blue-text font-weight-bold">5,88€ TTC/jrs</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">Si vous souhaitez internet, vous pouvez souscrire un forfait auprès de n'importe quels opérateurs.</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">Une coiffeuse est sur place tous les Vendredis, le paiement est a effectuer directement auprès d'elle.</th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-1-half">
                    <button type="button" class="btn btn-secondary blue darken-2" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--/.Information complémentaires Tarif EHPAD-60 -->

<!--Main layout-->
<main id="top-section">
    <!--Carousel Wrapper-->
    <div class="container-fluid " style="margin: 0;padding: 0">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <div class="view hm-black-light">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/LC2.jpg" alt="First slide">
                </div>
                <div class="carousel-caption">
                    <h2 class="h2-responsive">Hôpital de Pornic (Siège social)</h2>
                    <p>Bientôt la certification V2</p>
                </div>

            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <div class="view hm-black-light">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/bgf2-2000x1098.jpg" alt="Second slide">
                </div>
                <div class="carousel-caption">
                    <h2 class="h2-responsive">EHPAD de Villeneuve en Retz</h2>
                    <p>Toute refaite à neuve</p>
                </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <div class="view hm-black-light">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/PC4.jpg" alt="Third slide">
                </div>
                <div class="carousel-caption">
                    <h2 class="h2-responsive">EHPAD de Pornic Centre</h2>
                    <p>Toute refaite à neuve</p>
                </div>
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    </div>
    <!--/.Carousel Wrapper-->
       <!--A Propos-->
        <div class="container">
            <section id="apropos" class="section feature-box mt-4 mb-3">
                <div class="card testimonial-card wow fadeIn" data-wow-delay="0.2s">
                    <!--Background color-->
                    <div class="card-up  cyan darken-1">
                    </div>

                    <!--Avatar-->
                    <div class="avatar"><img src="<?php bloginfo( 'template_directory' ); ?>/img/directeur.jpg" class="rounded-circle img-responsive">
                    </div>

                    <div class="card-block">
                        <!--Name-->
                        <h3 class="card-title">Thierry FILLAUT</h3>
                        <h4 class="card-title">Directeur</h4>
                        <hr>
                        <!--Histoire-->
                        <h4 class="wow fadeIn text-center cyan-text" data-wow-delay="0.2s">
                            En 1999, L'Hôpital intercommunal du Pays de Retz voit le jour, suite à une fusion des établissements de Bourgneuf, Pornic et Paimboeuf.
                        </h4>
                        <hr>
                        <p class="section-description wow fadeIn" data-wow-delay="0.2s" style="line-height: 2em">
                            En 2005, la fin de la construction du nouvel hôpital achève cette fusion, et l'hôpital de la chaussée devient le siège social de l'ensemble des établissements.

                            En 2013, une restructuration de l'Ehpad de Pornic fût engagée avec l'ouverture d'un nouveau bâtiment "MontPlaisir", alliant modernité technique et confort de vie.

                            En 2016, une nouvelle contruction d'un Ehpad voit le jour à Villeneuve en Retz ex-commune de Bourgneuf.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!--/.A Propos-->

        <!--Section: ce qu'il faut savoir-->
        <div class="container">
            <section id="features" class="section feature-box mt-4 mb-3">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">CE QU'IL FAUT SAVOIR</h1>
                <!--First row-->
                <div class="row features-big">
                    <!--First column-->
                    <div class="col-md-4 mb-1 wow fadeIn" data-wow-delay="0.4s">
                        <div class="avatar rounded-circle cyan" style="height: 110px;width: 110px;margin-left: 33%;padding: 0"><i class="fa fa-ambulance white-text" style="margin-top: 25px;margin-left: -5px;padding-left: 0"></i></div>
                        <h4 class="feature-title">Urgence</h4>
                        <p class="text-gray-dark">Nous n'assurerons pas de service d'urgence. <span class="cyan-text"> <b>Faites le 15</b></span>, pour que les médecins vous orientent vers le bon établissement.<br />
                            Une permanence des soins est organisée à partir de 20h tous les jours.</p>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 mb-1 wow fadeIn" data-wow-delay="0.4s">
                        <div class="avatar rounded-circle cyan" style="height: 110px;width: 110px;margin-left: 33%;padding: 0"><i class="fa fa-user-md white-text" style="margin-top: 20px;padding-left: 0"></i></div>
                        <h4 class="feature-title">Nos consultations</h4>
                        <p class="text-gray-dark">Nos spécialistes à votre écoute :
                            <ul class="text-gray-dark">
                                <li>Pneumologie,</li>
                                <li>Endocrinologie,</li>
                                <li> Alcoologie,</li>
                                <li>Gériatrie,</li>
                                <li>Rhumatologie.</li>
                            </ul>
                            Retrouvez les horaires et les coordonnées.
                        <a href="http://proj6.dev:88/nos-consultations" data-offset="100" class="btn btn-rounded btn-cyan-2 wow fadeInUp" data-wow-delay="0.2s">Plus d'info</a>

                        </p>
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mb-1 wow fadeIn" data-wow-delay="0.4s">
                        <div class="avatar rounded-circle cyan" style="height: 110px;width: 110px;margin-left: 33%;padding: 0"><i class="fa fa-gavel white-text" style="margin-top: 20px;padding-left: 0"></i></div>
                        <h4 class="feature-title">Nos Marchés Publics</h4>
                        <p class="text-gray-dark">Conformément aux dispositions de l’article 138 du Code des Marchés Publics et de l’arrêté du 27 mai 2004 pris en son application et relatif à la liste des marchés conclus l’année précédente par les personnes publiques :</p>
                        <a href="#" data-offset="100" class="btn btn-rounded btn-cyan-2 wow fadeInUp" data-wow-delay="0.2s">Plus d'info</a>

                    </div>
                    <!--/Third column-->
                </div>
                <!--/First row-->

            </section>
        </div>
        <!--/Section: ce qu'il faut savoir-->

        <!-- Parallax -->
        <div class="streak streak-lg streak-photo view intro mb-3 " style='background: url("<?php bloginfo( 'template_directory' ); ?>/img/medical/consult_header.jpg")no-repeat center center fixed; background-size: cover;'>
            <div class="hm-cyan-strong">
                <div class="mask flex-center " style="background-attachment: fixed;">
                    <ul class="white-text smooth-scroll wow fadeIn" data-wow-delay="0.2s">
                        <li><h2 style="color: " class="h2-responsive">Au plus proche des Patients</h2></li>
                        <li><h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Devise de l'établissement</h5></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/Parallax-->

        <!-- Nos établissements -->
        <div class="container">
            <section id="services" class="section">
                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Nos Etablissements</h1>
                <!--Section description-->
                <p class="section-description wow fadeIn" data-wow-delay="0.2s">l'hôpital Intercommunal du Pays de Retz, possèdent 4 EHPAD (établissements d'hébergement pour personnes âgées dépendantes)</p>
                <div class="row text-center">
                    <!--PAIMBOEUF-->
                    <div class="col-lg-4 col-md-12 mb-r wow fadeIn" data-wow-delay="0.4s">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-2">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/pbf-2000x1330.jpg">
                        </div>
                        <!--Excerpt-->
                        <div class="card-block">
                            <a href="<?php bloginfo('wpurl');?>/paimboeuf/#googlemap" class="cyan-text"><h5><i class="fa fa-info-circle"></i> TOUTES LES COORDONNEES</h5></a>
                            <h3>LES ACACIAS</h3>
                            <p><a class="grey-text"> Située dans la ville de PAIMBOEUF, la maison de retraite MAISON DE RETRAITE DE L HOPITAL DE PAIMBOEUF est un EHPAD (établissement d‘hébergement pour personnes âgées dépendantes) public de 127 places. Cet EHPAD ne dispose pas d‘une unité Alzheimer.</a></p>
                            <a href="<?php bloginfo('wpurl');?>/paimboeuf/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>
                        </div>

                    </div>
                    <!--/PAIMBOEUF-->

                    <!--PORNIC CENTRE-->
                    <div class="col-lg-4 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s">

                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-2">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/BGF5.jpg">
                        </div>

                        <!--Excerpt-->
                        <div class="card-block">
                            <a href="<?php bloginfo('wpurl');?>/montplaisir/#googlemap" class="cyan-text"><h5><i class="fa fa-info-circle"></i> TOUTES LES COORDONNEES</h5></a>
                            <h3>MONTPLAISIR</h3>
                            <p><a class="grey-text">Située dans la ville de PORNIC, la maison de retraite MAISON DE RETRAITE DE L‘HOPITAL DE PORNIC est un EHPAD (établissement d‘hébergement pour personnes âgées dépendantes) public de 75 places. Cet EHPAD ne dispose pas d‘une unité Alzheimer.</a></p>
                            <a href="<?php bloginfo('wpurl');?>/montplaisir/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>
                        </div>

                    </div>
                    <!--/PORNIC CENTRE-->

                    <!--ST PERE-->
                    <div class="col-lg-4 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s">

                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-2">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/stp2000x1330.jpg">
                        </div>

                        <!--Excerpt-->
                        <div class="card-block">
                            <a href="<?php bloginfo('wpurl');?>/les-hortensias/#googlemap" class="cyan-text"><h5><i class="fa fa-info-circle"></i> TOUTES LES COORDONNEES</h5></a>
                            <h3>LES HORTANSIAS</h3>
                            <p><a class="grey-text">Située dans la ville de ST PERE EN RETZ, la maison de retraite LES HORTENSIAS est un EHPAD (établissement d‘hébergement pour personnes âgées dépendantes) public de 40 places. Cet EHPAD ne dispose pas d‘une unité Alzheimer.</a></p>
                            <a href="<?php bloginfo('wpurl');?>/les-hortensias/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>
                        </div>

                    </div>
                    <!--/ST PERE-->

                    <!--VILLENEUVE-->
                    <div class="col-lg-4 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s">

                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-2">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/sites/BGF2.jpg">
                        </div>

                        <!--Excerpt-->
                        <div class="card-block">
                            <a href="<?php bloginfo('wpurl');?>/nos-ehpad/villeneuve/#googlemap" class="cyan-text"><h5><i class="fa fa-info-circle"></i> TOUTES LES COORDONNEES</h5></a>
                            <h3>LA BAIE</h3>
                            <p><a class="grey-text">Située dans la ville de VILLENEUVE EN RETZ, la résidence "LA BAIE" est un EHPAD (établissement d‘hébergement pour personnes âgées dépendantes) public de 40 places. Cet EHPAD ne dispose pas d‘une unité Alzheimer.</a></p>
                            <a href="<?php bloginfo('wpurl');?>/nos-ehpad/villeneuve/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>
                        </div>

                    </div>
                    <!--/VILLENEUVE-->
                </div>
                <!--/First row-->

            </section>

        </div>
        <!-- /Nos établissements -->
        
        <!-- Chiffres clés de l'établissements -->
        <div class="container-fluid mt-3 background-dark">
            <div class="mask flex-center">
                <div class="container">

                    <h3 class="text-center text-white font-up font-bold mt-5 mb-2 wow fadeIn" data-wow-delay="0.2s">Chiffres clés de l'établissement</h3>

                    <!--First row-->
                    <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

                        <!--First column-->
                        <div class="col-md-3 mt-2">
                            <h1 class="cyan-text font-bold">+5</h1>
                            <p>Nombre d'établissements</p>
                        </div>
                        <!--/First column-->

                        <!--Second column-->
                        <div class="col-md-3 mt-2">
                            <h1 class="cyan-text font-bold">+463</h1>
                            <p>Nombre de lits</p>
                        </div>
                        <!--/Second column-->

                        <!--Third column-->
                        <div class="col-md-3 mt-2">
                            <h1 class="cyan-text font-bold">+10</h1>
                            <p>Nombre de médecins</p>
                        </div>
                        <!--/Third column-->

                        <!--Fourth column-->
                        <div class="col-md-3 mt-2 mb-5">
                            <h1 class="cyan-text font-bold">+512</h1>
                            <p>Nombre d'agents</p>
                        </div>
                        <!--/Fourth column-->

                    </div>
                    <!--/First row-->
                </div>
            </div>
        </div>
        <!-- /Chiffres clés de l'établissements -->

        <!-- Consultations Externe et coordonnées -->
        <div class="container">
            <!-- Consultations Externes -->
            <section id="services" class="section mt-4 mb-2">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Nos consultations externes</h1>
                <!--Section description-->
                <p class="section-description wow fadeIn" data-wow-delay="0.2s">Nous proposons différentes consultations, nos médecins sont des spécialites de l'hôpital de St Nazaire</p>
                <!--First row-->
                <div class="row wow fadeIn" data-wow-delay="0.4s">
                    <!--First column-->
                    <div class="col-md-12">
                        <div class="mb-2">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-pills pills-primary flex-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab"><i class="fa fa-stethoscope fa-2x"></i><br> Dr Mabile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel32" role="tab"><i class="fa fa-heartbeat fa-2x"></i><br> Dr Artmingeat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel33" role="tab"><i class="fa fa-user-md fa-2x"></i><br> Dr Chow</a>
                                </li>
                            </ul>

                        </div>

                        <!--Tab panels-->
                        <div class="tab-content">
                            <!--Panel 1-->
                            <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
                                <br>
                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-3 offset-lg-1 col-md-6 mb-3">
                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="https://mdbootstrap.com/img/Photos/Vertical/People/img%20%281%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Dr Mabile</h4>

                                        <!--Description-->
                                        <p class="grey-text" align="justify">Spécialiste en pneumologie. La pneumologie est la branche de la médecine étudiant et traitant les maladies pulmonaires et du système respiratoire en général..</p>
										<a href="<?php bloginfo( 'wpurl' ); ?>/consultations-externes/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>
                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel32" role="tabpanel">
                                <br>
                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-3 offset-lg-1 col-md-6 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="https://mdbootstrap.com/img/Photos/Vertical/People/img%20%284%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Dr Artmingeat</h4>

                                        <!--Description-->
                                        <p class="grey-text" align="justify">Spécialiste en Rhumathologie. La rhumatologie est une spécialité médicale dédiée aux maladies musculosquelettiques.</p>
										<a href="<?php bloginfo( 'wpurl' ); ?>/consultations-externes/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 2-->

                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel33" role="tabpanel">
                                <br>

                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-3 offset-lg-1 col-md-6 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="https://mdbootstrap.com/img/Photos/Vertical/People/img%20%281%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Dr Chow</h4>

                                        <!--Description-->
                                        <p class="grey-text" align="justify">Spécialiste en Alcoologie. Partie de la médecine qui étudie les effets de l’alcool sur l’organisme et particulièrement la dépendance qu’il entraîne et les moyens de la soigner.</p>
										<a href="<?php bloginfo( 'wpurl' ); ?>/consultations-externes/" class="btn btn-rounded btn-cyan-2"><i class="fa fa-clone left"></i>Plus d'info</a>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 3-->

                        </div>
                        <!--/Tab panels-->

                    </div>
                    <!--/First column-->

                </div>
                <!--/First row-->

            </section>
            <!--/Consultations Externes-->

            <hr class="between-sections">

            <!--Section: Contact v.1-->
            <section id="contact" class="section mb-5">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Comment venir chez nous!</h1>
                <!--Section sescription-->
                <p class="section-description grey-text mb-5 wow fadeIn" data-wow-delay="0.2s">Si vous venez de Nantes, au premier rond point en arrivant sur Pornic, 4ème sortie du rond point, puis au 2ème rond point, 3ème sortie.</p>

                <div class="row">

                    <!--Second column-->
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half map-container" style="height: 400px"></div>

                        <br>
                        <script>
                            /** Etablissement la Chaussée **/
                            function initMap() {
                                var uluru = {lat: 47.111241, lng: -2.064708};
                                var map = new google.maps.Map(document.getElementById('map-container'), {
                                    zoom: 15,
                                    center: uluru
                                });
                                var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                });


                            }
                        </script>
                        <!--Buttons-->
                        <div class="row text-center mt-1">
                            <div class="col-md-4">
                                <a class="btn-floating btn-small btn-grey-2"><i class="fa fa-map-marker"></i></a>
                                <p><div class="mb-1">La Chaussée - Pornic 44213 Cedex</div></p>
                                <p>France</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating btn-small btn-grey-2"><i class="fa fa-phone"></i></a>
                                <p><div class="mb-1">+ 02 xx xx xx xx</div></p>
                                <p>lundi - vendredi, 8:30-17:30</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating btn-small btn-grey-2"><i class="fa fa-envelope"></i></a>
                                <p><div class="mb-1"><a href="mailto:contact@hipr44.fr" >contact@hipr44.fr</a></div></p>
                            </div>
                        </div>

                    </div>
                    <!--/Second column-->

                </div>

            </section>
            <!--/Section: Contact v.1-->
        </div>
    <!--/.Content-->

</main>

<!--/.Main layout-->
<?php get_footer(); ?>
