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
<div id="homeScreen" class="container mw-100 p-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background-image.jpg);'">
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

<div id="servicesScreen" class="container">

    <div class="row servicesTitle">
        <h3 class="m-auto">SERVICES</h3>
    </div>

    <div class="servicesWrapper row">
        <div class="service col-lg-4 col-md-12 text-center">
            <span class="d-block"><img src="<?php echo get_template_directory_uri(); ?>/images/translation-icon.svg"></span>
            <h2>Translation</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta nec velit vel tincidunt. Praesent hendrerit, tellus nec pellentesque viverra, lectus lectus molestie risus
            </p>
            <button>Contact Me</button>
        </div>
        <div class="service col-lg-4 col-md-12 text-center">
            <span class="d-block"><img src="<?php echo get_template_directory_uri(); ?>/images/proofreading-icon.svg"></span>
            <h2>ProofReading</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta nec velit vel tincidunt. Praesent hendrerit, tellus nec pellentesque viverra, lectus lectus molestie risus
            </p>
            <button>Contact Me</button>
        </div>
        <div class="service col-lg-4 col-md-12 text-center">
            <span class="d-block"><img src="<?php echo get_template_directory_uri(); ?>/images/interpretation-icon.svg"></span>
            <h2>Interpretation</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta nec velit vel tincidunt. Praesent hendrerit, tellus nec pellentesque viverra, lectus lectus molestie risus
            </p>
            <button>Contact Me</button>
        </div>
    </div>

</div>

<div id="contactScreen" class="container mw-100" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background-image.jpg);'">

    <div class="row contactTitle">
        <h3 class="m-auto">CONTACT ME</h3>
    </div>

    <div class="row m-0">
        <form action="/action_page.php" class="m-auto">
            <span>First name:</span><br>
            <input type="text" name="firstname">
            <br>
            <span>Last name:</span><br>
            <input type="text" name="lastname">
            <br>
            <span>Message:</span><br>
            <textarea name="message"></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form> 
    </div>

</div>

<?php get_footer(); ?>