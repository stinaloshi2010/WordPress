<?php get_header(); ?>

<div id="primary">
    <main id="main">
        <div class="site-main">
            <div class="container">
                <h1>Search result for: <?php echo get_search_query(); ?></h1>

            <?php
            get_search_form();

            while(have_posts()):
                the_post(); 
                get_template_part('parts/content', 'search');

            endwhile;
            the_posts_pagination();




            ?>
            </div>
        </div>

        </div>



</div>


<?php get_footer(); ?>