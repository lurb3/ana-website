<?php

/**
 * Template Name: homepage
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */
get_header();
?>
<div id="homeScreen" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background-image.jpg);'">
    <div class="bgImg"></div>
    <div class="w-100 nameTitle">
        <h2>
            <span class="anaTitle">
                ANA
            </span>
            PENEDA
        </h2>
    </div>

    <div class="w-100 servicesTitle">
        <h1>
            TRANSLATION & PROOFREADING<br>SERVICES
        </h1>
    </div>

    <div class="w-100 learnMore">
        <span class="learnMoreCopy">Learn more about me</span>
        <span class="learnMoreArrow"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"></span>
    </div>
</div>

<?php get_footer(); ?>