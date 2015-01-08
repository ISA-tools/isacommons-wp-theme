<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width:100%">
		<div id="content" role="main" >


<div class="breadcrumbs">

		</div>
		      <div class="col-md-12">
                                  <ol class="breadcrumb" id="site-breadcrumbs">

                                  <li><a href="/">Projects</a></li>
                                  <li class="active"><?php echo the_title(); ?></li>
                                  </ol>
                                  </div>


<div class="cf"></div><br/>
            <div style="width: 80%; margin: 0 auto" align="center">
            <div class="person-detail-image" style="background:url(<?php echo get_post_meta( get_the_ID(), 'project_info_logo', true ); ?>) no-repeat; background-size: 100%;">
            </div>
            <br/>


                            <div class="name" style="font-weight:bolder; font-size: 1.3em"><a href="<?php echo get_post_meta( get_the_ID(), 'project_info_project_url', true )?>" target="_blank"><?php echo the_title() ?></a></div>

<div class="clearfix"></div>
                            <div class="description">

                            <?php echo $post->post_content ?>

                            </div>

                    </div>

             </div>

</div>


               <div class="cf"></div>
               <br/><br/>
               <?php edit_post_link( __( 'Edit Project', 'projects' ), '<span class="edit-link">', '</span>' ); ?>
               <div class="cf"></div>
               <br/><br/>


		</div><!-- #content -->
	</div><!-- #primary -->


<style>
    .person-detail-image {
        width: 150px;
        height: 150px;

    }

    .contact-details a {
        color: #414241;
    }
</style>
<?php get_footer(); ?>