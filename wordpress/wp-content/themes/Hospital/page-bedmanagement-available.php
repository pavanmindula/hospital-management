<?php

/**
 * Template Name: aval-beds
 */
get_header();

?>

<div class="container-fluid p-0 m-0 height-max">
    <div class="row head-row p-0 m-0">
        <div class="col-4 logo-tag">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="logo"> Hospital Bed Management System
        </div>
        <div class="col-8">
        </div>
    </div>

    <div class="row">
        <div class="col-2 side-bar">
            <div class="side-inner">
                <div class="row">
                    <div class="col-12 bed-filter"> <a href="<?php echo home_url(); ?>/">All Beds</a></div>
                    <div class="col-12 bed-filter active"> <a href="<?php echo home_url(); ?>/beds-available">Available Beds</a></div>
                    <div class="col-12 bed-filter"> <a href="<?php echo home_url(); ?>/unavailable-beds">Unavailable Beds</a></div>

                    <div class="col-10 stats">Total Bed Count</div>
                    <div class="col-2 stats">
                        <?php
                        $loop = new WP_Query(array('post_type' => 'bed', 'posts_per_page' => -1));
                        $postCount = $loop->post_count;
                        $i = 0;
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                        endwhile;
                        wp_reset_query();
                        echo '<div class="">' . $i . '</div>';
                        ?>
                    </div>

                    <div class="col-10 stats">Available Bed Count</div>
                    <div class="col-2 stats">
                        <?php

                        $loop = new WP_Query(array('post_type' => 'bed', 'posts_per_page' => -1, 'tax_query' => array(array('taxonomy' => 'bed_availability', 'field' => 'name', 'terms' => array('Available')))));
                        $postCount = $loop->post_count;
                        $i = 0;
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                        endwhile;
                        wp_reset_query();
                        echo '<div class="">' . $i . '</div>';
                        ?>
                    </div>


                    <div class="col-10 stats">Unavailable Bed Count</div>
                    <div class="col-2 stats">
                        <?php

                        $loop = new WP_Query(array('post_type' => 'bed', 'posts_per_page' => -1, 'tax_query' => array(array('taxonomy' => 'bed_availability', 'field' => 'name', 'terms' => array('Unavailable')))));
                        $postCount = $loop->post_count;
                        $i = 0;
                        while ($loop->have_posts()) : $loop->the_post();
                            $i++;
                        endwhile;
                        wp_reset_query();
                        echo '<div class="">' . $i . '</div>';
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="main-body">
                <div class="card" data-aos="zoom-in">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1"> Bed</div>
                            <div class="col-2"> Patient Name</div>
                            <div class="col-2"> Patient Number</div>
                            <div class="col-2"> Date of Admission</div>
                            <div class="col-2"> Date of Discharge</div>
                            <div class="col-2"> Bed Status</div>
                            <div class="col-1"> </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">

                        <?php
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                        $args = array('post_type' => 'bed', 'posts_per_page' => 13, 'tax_query' => array(array('taxonomy' => 'bed_availability', 'field' => 'name', 'terms' => array('Available'))), 'paged' => $paged);
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <li class="list-group-item ">
                                    <div class="row">
                                        <div class="col-1"> <?php the_title(); ?></div>
                                        <div class="col-2"> <?php the_field('patient_name'); ?></div>
                                        <div class="col-2"> <?php the_field('patient_number'); ?></div>
                                        <div class="col-2"> <?php the_field('date_of_admission'); ?></div>
                                        <div class="col-2"> <?php the_field('date_of_discharge'); ?></div>
                                        <div class="col-2">

                                            <?php

                                            if (get_field('bed_status') == 'Occupied') : ?>
                                                <p style="color: red;">Occupied</p>
                                            <?php
                                            elseif (get_field('bed_status') == 'Unavailable') : ?>
                                                <p style="color: red;">Unavailable</p>
                                            <?php
                                            else : ?>
                                                <p style="color: green;">Available</p>

                                            <?php endif; ?>

                                        </div>
                                        <div class="col-1"><?php edit_post_link(__('Edit')); ?></div>
                                    </div>
                                </li>

                            <?php endwhile; ?>
                            <nav class="pagination pagination-bed">
                                <?php pagination_bar($the_query); ?>
                            </nav>
                        <?php wp_reset_postdata();
                        endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>