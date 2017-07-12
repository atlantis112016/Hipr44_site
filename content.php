<div class="container" style="margin-top: 5%">
    <div class="card">
        <!--Post data-->
        <a href="<?php echo get_permalink() ?>"><h1 class="h1-responsive cyan-text text-center"><?php the_title(); ?></h1></a>
        <h5>Written by <a href=""><?php the_author(); ?></a>, <?php echo get_the_date(); ?></h5>
        <br>
        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half">
            <?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-2')); ?>
            <a href="<?php echo get_permalink(); ?>">
                <div class="mask"></div>
            </a>
            </div>

        <br>
        <!--Post excerpt-->

          <?php
          if (is_single()){ ?>
              <p class="card-text" style="padding: 20px"><?php echo the_content(); ?> </p>
          <?php }
          else {?>
              <p class="card-text" style="padding: 20px"><?php echo the_excerpt(); ?> </p>

            <!--"Read more" button-->
            <a href="<?php echo get_permalink() ?>" class="btn btn-danger btn-etc waves-effect waves-light">Plus d'info</a>
          <?php
          }
          ?>
        </div>
    </div>
</div>
                            