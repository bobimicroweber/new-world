<?php

/*

type: layout

name: Features

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-26 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto text-center">
                    <div class="row features-holder">
                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Student-Hat safe-element"></i>
                                <h4><?php _lang("Lessons", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Computer-2 safe-element"></i>
                                <h4><?php _lang("Development", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Vector-4 safe-element"></i>
                                <h4>UI/UX <?php _lang("Design", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Cloud safe-element"></i>
                                <h4><?php _lang("Hosting", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Gamepad-2 safe-element"></i>
                                <h4><?php _lang("Game", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Add-Cart safe-element"></i>
                                <h4><?php _lang("Online Store", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Soup safe-element"></i>
                                <h4><?php _lang("Food", "templates/new-world"); ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 mx-auto cloneable">
                            <div class="icon-holder shadow-md">
                                <i class="icon mw-micon-Money-2 safe-element"></i>
                                <h4><?php _lang("Money", "templates/new-world"); ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="row element m-t-70">
                        <div class="col-12 text-center">
                            <module type="btn" template="bootstrap" button_style="btn-primary" button_text="Contact Us"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
