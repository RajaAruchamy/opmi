
<?php 
/**
 * Template Name: Academics
 */
 get_header(); 
$args = array ( 'category' => academics, 'posts_per_page' => 5);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post);
 ?>
<?php endforeach;
 ?>



<div class="<?php echo 'ak-container-'.esc_attr($enlighten_page_layout); ?> <?php if($enlighten_page_layout != 'both'){echo 'ak-container';}?>">
    <?php if($enlighten_page_layout !== 'no'){
            if($enlighten_page_layout == 'both' || $enlighten_page_layout == 'left'){?>
                <div id="secondary" class="<?php echo esc_attr($enlighten_page_layout).'_left' ?> clearfix">
                    <?php
                        get_sidebar('left');
                    ?>
                </div>
            <?php } ?>
    <?php } ?>

<div class="effect_title">
<div class="after-effet1"></div>
<div class="section_title"><span class="title_one wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">SEE WHAT WE DO</span>
<span class="title_two wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">COURSES OFFERED</span></div>
<div class="section_title" style="padding: 30px 0;">Every year, OPMI helps hundreds of students from over 30 countries not only learn English, but also develop their skill set to work in English. Whether New York is regarded as your home or a place to visit you will find out that our economical and flexible courses make OPMI the ideal choice for your language and occupational education.</div>

<div class="module-card-wrap">

<div class="module-card">
<div class="portfolio_slide_loop wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

<div class="image_wrap_port wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a href="./esl/"><img src="/wp-content/uploads/2017/10/ESL.jpg" /></a></div>
<div class="title_content_wrap"><?php
                                                $enlighten_title = get_the_title();
                                                $enlighten_content = get_the_content();
                                                if($enlighten_title){
                                             ?>
<div class="anchor_title_wrap"><span class="port_title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a><?php echo esc_html($enlighten_title); ?></a></span></div>
<div class="port_content_wrap wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
</div>

</div>
</div>
<div class="module-card">
<div class="portfolio_slide_loop wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<div class="image_wrap_port wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a href="http://localhost/opmi/2017/08/14/lorem-ipsum/"><img src="http://localhost/opmi/wp-content/uploads/2017/10/vocational.jpg" /></a></div>
<div class="title_content_wrap">
<div class="anchor_title_wrap"><span class="port_title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a href="http://localhost/opmi/2017/08/14/lorem-ipsum/">Vocational Programs</a></span></div>
<div class="port_content_wrap wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</div>
</div>
</div>
</div>
</div>
</div>
    <?php if($enlighten_page_layout !== 'no'){
            if( $enlighten_page_layout == 'both' || $enlighten_page_layout == 'right'){ ?>
                <div id="secondary" class="<?php echo esc_attr($enlighten_page_layout).'_right' ?>">
                    <?php
                        get_sidebar();
                    ?>
                </div>
            <?php } ?>
    <?php } ?>
</div>
<?php
get_footer();
