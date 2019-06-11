<?php

use App\Helper\Render;
use Theme\Model\Layout;

$render = new Render;
$layout = new Layout;

$allLayouts = $layout->getLayout();

$page_id = 8;
$page_object = get_page( $page_id );

//print_r($allLayouts);

include("header.php"); ?>

<div class="c-body-wrap">

<section class="u-section">
    <div class="u-l-container u-l-container--row">

        <div class="u-column u-column u-column--half-width">
            <h1 class="c-site-headings c-site-headings--h1"><?php echo $page_object->post_title; ?></h1>
        </div>

        <div class="u-column u-column--half-width">
            <div class="u-paragraph u-paragraph--white">
                <div class=" u-paragraph__container u-paragraph__container--align-bottom"><?php echo $page_object->post_content; ?></div>
            </div>
        </div>
        
    </div>
</section>

</div>

<?php include("footer.php"); ?>


