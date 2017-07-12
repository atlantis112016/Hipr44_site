<?php

add_action ('admin_menu', 'my_panel');

/** définition du menu et des sous menu à ajouter */
function my_panel() {
	add_menu_page( 'HIPR44 OPTIONS', 'Hipr44 Options', 'manage_options', 'hipr44_options', 'my_panel_options', 'dashicons-admin-generic', 86 );
	add_submenu_page('hipr44_options', 'hompepage', 'Page Homepage', 'manage_options', 'homepage-panel', 'render_homepage');
	add_submenu_page('hipr44_options', 'medecine', 'Page Médecine', 'manage_options', 'medecine-panel', 'render_medecine');
	add_submenu_page('hipr44_options', 'nosetabl', 'Page Nos établissements', 'manage_options', 'nosetabl-panel', 'render_nosetabl');
	add_submenu_page('hipr44_options', 'nosconsult', 'Page Nos consultations', 'manage_options', 'consult-panel', 'render_consult');
	add_submenu_page('hipr44_options', 'nousrecrutons', 'Page Nous recrutons', 'manage_options', 'nousrecrutons-panel', 'render_nousrecrutons');
	add_submenu_page('hipr44_options', 'nosmarches', 'Page Nos marchés publics', 'manage_options', 'nosmarches-panel', 'render_nosmarches');
}

/** Mise en place des boutons sur la page HIPR44_OPTIONS */
function my_panel_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
			<h1 class="wp-heading-inline"><span class="dashicons dashicons-admin-multisite" style="font-size: 30px"></span>&nbsp;&nbsp;&nbsp;Options Générales</h1>
			<span class="title-count theme-count">6</span>
			<hr class="wp-header-end">
				<div class="welcome-panel" style="">
					<div class="welcome-panel-content">
						<div class="welcome-panel-column-container">
							<div class="welcome-panel-column">
								<ul>
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=homepage-panel" class="button button-primary button-hero"><span class="dashicons dashicons-admin-home"></span>Page Homepage</a></li>
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=medecine-panel" class="button button-primary button-hero"><span class="dashicons dashicons-layout"></span>Page Médecine</a></li>
								</ul>
							</div>
							<div class="welcome-panel-column">
								<ul>
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=nosetabl-panel" class="button button-primary button-hero"><span class="dashicons dashicons-admin-page"></span>Page Nos établissements</a></li>
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=consult-panel" class="button button-primary button-hero"><span class="dashicons dashicons-share"></span>Page Nos consultations</a></li>									
								</ul>
							</div>
							<div class="welcome-panel-column">
								<ul>
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=nousrecrutons-panel" class="button button-primary button-hero"><span class="dashicons dashicons-share-alt"></span>Page Nous recrutons</a></li>							
									<li style="text-align: center"><a href="<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin.php?page=nosmarches-panel" class="button button-primary button-hero"><span class="dashicons dashicons-art"></span>Page Nos marchés publics</a></li>								
								</ul>
							</div>								
						</div>
					</div>
				</div>
		</div>

<?php
}

function render_homepage() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	    
   	if (isset($_POST['panel_update'])){

    if (!wp_verify_nonce($_POST['panel_noncename'],'my_panel')){
            die('token non valide');
        }
        foreach ($_POST['options'] as $name => $value) {
            if(empty($value)){
                delete_option($name);
            }else{
                update_option($name, $value);
            }
        }
		?>
        <!-- Message confirmation d'enregistrement -->
		<div id="message" class="updated fade">
			<p><strong>Bravo!</strong>Options sauvegardées avec succès.</p>
		</div>
	<?php
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page d'Accueil"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la page "Accueil":</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="options[apropos]" id="apropos" value="<?= get_option('apropos',''); ?>" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<!--<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>-->
						</tr>
					</tbody>
				</table>
			</div>
			<input type="hidden" name="panel_noncename" value="<?= wp_create_nonce('my_panel');?>">
            <p class="submit">
                <input type="submit" name="panel_update" class="button-primary  autowidth" value="Sauvegarder">
            </p>
		</form>
	</div>
<?php
}

function render_medecine() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page Médecine/SSR"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la page "Médecine":</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="apropos" value="" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</form>
	</div>
<?php
}

function render_nosetabl() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page Nos établissements"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la page "Nos établissements":</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="apropos" value="" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</form>
	</div>
<?php
}

function render_consult() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page Nos Consultations"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la page "Nos Consultations:</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="apropos" value="" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</form>
	</div>
<?php
}
function render_nousrecrutons() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page Nous Recrutons"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la page "Nous recrutons":</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="apropos" value="" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</form>
	</div>
<?php
}

function render_nosmarches() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'Vos permissions sont insuffisantes.' ) );
	}
	?>
		<div class="wrap theme-options-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Options Générales "Page Nos Marchés Publics"</h2>
		<form action="" method="POST">
			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Les options de la "Page Nos Marchés Publics":</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="apropos">A Propos:</label>
							</th>
							<td>
								<textarea name="apropos" value="" style="width: 70%"></textarea>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="apropos">Parallax:</label>
							</th>
							<td>
								<input type="file" name="textfield"> 
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</form>
	</div>
<?php
}
?>