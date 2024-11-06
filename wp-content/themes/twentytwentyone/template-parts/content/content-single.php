<style>
body {
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
}

.headlines {
    background: #56bdbf;
    overflow: hidden;
    padding: 20px 30px;
}

.headlines ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.headlines ul>li {
    overflow: hidden;
    display: table;
    margin-bottom: 5px;
    width: 100%;
}

.headlines .headlinesdates {
    font-size: 0.8em;
    width: 15%;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
}

.headlinesdates .headlinesdms,
.news>.headlines .headlinesdates,
.headlinesdates {
    float: left;
    font-family: 'Prata', serif;
}

.headlinesdates .headlinesdms,
.news>.headlines .headlinesdates,
.headlinesdates {
    float: left;
    font-family: 'Prata', serif;
}

.list_news .headlines .headlinesdays,
.detail .headlinesdates .headlinesdays {
    border-bottom: 1px solid #000;
}

.headlinesdates .headlinesday {
    border-bottom: 1px solid #fff;
}

.headlinesdates .headlinesdays,
.news>.headlines .headlinesmonths {
    line-height: 1.7em;
}

.headlinesdates .headlinesyears {
    line-height: 3.5em;
    float: left;
    margin-left: 3px;
}

.headlines ul>li>.headlinestitle {
    display: table-cell;
    vertical-align: middle;
    width: 95%;
}

.list_news .headlines a {
    color: #000;

}

.headlines {
    background: #56bdbf;
    overflow: hidden;
    padding: 20px 30px;
}

.headlines ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.headlines ul>li {
    overflow: hidden;
    display: table;
    margin-bottom: 5px;
    width: 100%;
}

.headlinesdate .headlinesdm,
.news>.headlines .headlinesdate,
.headlinesdate {
    float: left;
    font-family: 'Prata', serif;
}

.headlines .headlinesdate {
    font-size: 0.8em;
    width: 15%;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
    font-weight: bold;
}

.headlinesdate .headlinesday {
    border-bottom: 1px solid #fff;
}

.headlinesdate .headlinesday,
.news>.headlines .headlinesmonth {
    line-height: 1.7em;
}

.headlinesdate .headlinesday,
.news>.headlines .headlinesmonth {
    line-height: 1.7em;
}

.headlinesdate .headlinesyear {
    line-height: 3.5em;
    float: left;
    margin-left: 3px;
}

.headlinesdate {
    color: white;
    font-weight: bold;
}

.headlines ul>li>.headlinestitle {
    vertical-align: middle;
    width: 85%;
    padding-top: 6px;
}

.headlinestitle>a:hover,
.newsall:hover {
    text-decoration: underline;
}

.headlinestitle>a:focus {
    text-decoration: underline !important;
    background: #56bdbf !important;
}

.newsall:focus {
    text-decoration: underline !important;
    background: #62C6C8 !important;
}
.newsall:hover {
    text-decoration: underline;
    color: #fff;
}

.news a {
    color: #FFFFFF;
}


.headlines ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.headlines ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.headlines .headlinesdate {
    font-size: 0.8em;
    width: 15%;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
}

.headlines .headlinesdate {
    font-size: 0.8em;
    width: 15%;
    min-width: 55px;
    display: table-cell;
    vertical-align: middle;
}

.xem {
    color: #FFFFFF;
    background: #62c6c8;
    text-align: center;
    height: 40px;
    position: relative;

}

.xem a {
    color: #FFFFFF;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);


}

.news>.newsall {
    display: block;
    padding: 10px;
    text-align: center;
    background: #62c6c8;
    text-transform: uppercase;
    font-weight: bold;
}

.news a {
    color: #fff;
}
</style>

<body>
    <article class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <header class="entry-header alignwide">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <?php twenty_twenty_one_post_thumbnail(); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
				the_content();
		
				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
						'after'    => '</nav>',
						/* translators: %: Page number. */
						'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
					)
				);
				?>
                </div><!-- .entry-content -->

            </div>

            <!-- Model 10 recent post -->
            <div class="col-md-3">
                <div class="headlines">
                    <ul>
                        <?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3
						);

						$query = new WP_Query($args);

						// kiểm tra có bài viết
						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
								?>
                        <li>
                            <div class="headlinesdate">
                                <div class="headlinesdm">
                                    <div class="headlinesday"><?php echo get_the_date('d'); ?></div>
                                    <div class="headlinesmonth"><?php echo get_the_date('m'); ?></div>
                                </div>
                                <div class="headlinesyear"><?php echo get_the_date('y'); ?></div>
                            </div>
                            <div class="headlinestitle">
                                <a style="color: white" href="<?php the_permalink(); ?>">
                                    <p>
                                        <?php the_title_attribute(); ?>
                                    </p>
                                </a>
                            </div>
                        </li>
                        <?php
							endwhile;
							wp_reset_postdata();
						else :
							echo 'No posts found.';
						endif;

					?>

                    </ul>
                </div>

                <div class="xem"><a class="newsall" href="<?php echo esc_url(get_home_url()); ?>">XEM TẤT CẢ TIN TỨC</a>
                </div>

            </div>
        </div>

        <footer class="entry-footer default-max-width">
            <?php twenty_twenty_one_entry_meta_footer(); ?>
        </footer><!-- .entry-footer -->

        <?php if ( ! is_singular( 'attachment' ) ) : ?>
        <?php get_template_part( 'template-parts/post/author-bio' ); ?>
        <?php endif; ?>

    </article><!-- #post-<?php the_ID(); ?> -->