<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 ?>

<div class="detailpage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <header class="entry-header alignwide pb-3 mb-0" style="border-bottom: 0;">
                <div class="row title">
                    <div class="col-md-10 col-xs-9">
                        <?php the_title('<h1 class="entry-title font-weight-bold m-0 p-0" style="font-size: 2.1em">', '</h1>'); ?>
                        <?php twenty_twenty_one_post_thumbnail(); ?>
                    </div>
                    <div class="col-md-2 col-xs-3">
                        <div class="headlinesdate" id="date-title-module-6">
                            <div class="headlinesdm">
                                <div class=" headlinesday">
                                    <?php the_time('d'); ?>
                                </div>
                                <div class="headlinesmonth">
                                    <?php the_time('m'); ?>
                                </div>
                            </div>
                            <div class="headlinesyear">'
                                <?php the_time('y'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="overviewline"></div>
                    </div>
                </div>
            </header><!-- .entry-header -->
            <!-- <div class="row overview"></div> -->
            <!-- <div class="row overview_thumb"></div> -->
            <div class="row maincontent">

            <div class="entry-content mt-0">
    <div class="categories" style="width: 20%">
    </div>
    <?php
        // Lấy nội dung của bài viết và áp dụng bộ lọc nội dung
        $content = apply_filters('the_content', get_the_content());

        // Tách nội dung thành các đoạn dựa trên dấu xuống dòng
        $paragraphs = preg_split('/(\r?\n)+/', $content);

        // Hiển thị đoạn đầu tiên với chữ nghiêng
        if (!empty($paragraphs[0])) {
            echo '<p class="font-italic">' . wp_kses_post($paragraphs[0]) . '</p>';
        }

        // Hiển thị các đoạn còn lại với chữ bình thường
        for ($i = 1; $i < count($paragraphs); $i++) {
            if (!empty(trim($paragraphs[$i]))) { // Bỏ qua đoạn rỗng
                echo '<p>' . wp_kses_post($paragraphs[$i]) . '</p>';
            }
        }

        // Hiển thị các trang nếu bài viết có nhiều trang
        wp_link_pages(
            array(
                'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                'after' => '</nav>',
                'pagelink' => esc_html__('Page %', 'twentytwentyone'),
            )
        );
    ?>
</div>
        </div>
        <div class="col-md-3">

        </div>
    </div><!-- #post-<?php the_ID(); ?> -->