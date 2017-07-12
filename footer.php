
<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>


<!--Footer-->
<footer class="page-footer blue center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-md-3 offset-md-1 text-center">
                <h5 class="title"><i class="fa fa-map-marker"></i> Nos Coordonnées</h5>
                <ul>
                    <li>Hôpital Intercommnual du Pays de Retz</li>
                    <li>La Chaussée Route de Nantes </li>
                    <li>44 213 PORNIC CEDEX</li>
                    <li>02.51.74.xx.xx</li>

                </ul>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-3 text-center" style="margin-left: 3%">
                <h5 class="title"><i class="fa fa-map-o"></i> PLAN DU SITE</h5>
                <?php
                wp_nav_menu( array(
                        'menu'              => 'footer1',
                        'theme_location'    => 'footer1',
                        'depth'             => 1
                    )
                );
                ?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--third column-->
            <div class="col-md-3 text-center"  style="margin-left: 3%">
                <h5 class="title"><i class="fa fa-share-alt-square"></i> Liens utiles</h5>
                <ul>
                    <li><a href="www.ch-stnazaire.com" target="_blank">Centre Hospitalier de St Nazaire</a></li>
                    <li><a href="www.chu-nantes.com" target="_blank">Centre Hospitalier Universitaire de Nantes</a></li>
                    <li><a href="www.fhf.fr" target="_blank">FHF</a></li>
                    <li><a href="www.ars.fr" target="_blank">Agence régionale de Santé</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            &copy; <?php echo Date('Y') ?> - <a href="https://www.hipr44.fr"  rel="nofollow"> <?php bloginfo('name')?> </a> - Réalisation :  Fabienne BERNARD <a href="<?php bloginfo('wpurl');?>/wp-admin"><i class="fa fa-medkit"></i></a>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

   <script>


       /** Etablissement MontPlaisir Pornic Centre
      function initMap() {
          var pc = {lat: 47.116054, lng: -2.101170};
          var map = new google.maps.Map(document.getElementById('map-Pornic-Centre'), {
              zoom: 18,
              center: pc
          });
          var marker = new google.maps.Marker({
              position: pc,
              map: map
          });
      }
       /** Etablissement St Père
       function initMap() {
           var stp = {lat: 47.209801, lng: -2.046509};
           var map = new google.maps.Map(document.getElementById('map-stp'), {
               zoom: 17,
               center: stp
           });
           var marker = new google.maps.Marker({
               position: stp,
               map: map
           });
       }
       /** Etablissement Paimboeuf
       function initMap() {
           var pbf = {lat: 47.287507, lng: -2.032142};
           var map = new google.maps.Map(document.getElementById('map-pbf'), {
               zoom: 17,
               center: pbf
           });
           var marker = new google.maps.Marker({
               position: pbf,
               map: map
           });
       }**/

    </script>
    <script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB-h7bDgrw8tH9CUtyvM8J27RjCDZCtvU&callback=initMap">
    </script>


</body>
</html>