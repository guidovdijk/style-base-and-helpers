<?php get_header(); ?>

    <section role="main">

        <?php if ( have_posts() ) : ?>

            <header>

                <h1>
                
                    <?php printf( __( 'Search Results for: %s', 'my_theme' ), get_search_query() ); ?>
                
                </h1>

            </header>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'entry' ); ?>

            <?php endwhile; ?>

            <?php get_template_part( 'nav', 'below' ); ?>

        <?php else : ?>

            <article>

                <header>

                    <h2>
                    
                        <?php _e( 'Nothing Found', 'my_theme' ); ?>
                    
                    </h2>

                </header>

                <section>

                    <p>

                        <?php _e( 'Sorry, nothing matched your search. Please try again.', 'my_theme' ); ?>
                    
                    </p>

                    <?php get_search_form(); ?>

                </section>

            </article>

        <?php endif; ?>

    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
