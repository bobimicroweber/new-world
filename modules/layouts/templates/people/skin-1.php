<?php

/*

type: layout

name: People - Team cards

position:

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
<section class="section-24 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-people-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-xl-8 col-lg-8 text-center m-b-20 mx-auto">
                    <h1 class="m-b-10"><?php _lang("Our Team", "templates/new-world"); ?></h1>
                    <p class="lead"><?php _lang("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.", "templates/new-world"); ?> </p>
                    <hr class="hr"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xl-10 mx-auto">
                    <div class="row text-center text-white">
                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-1.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("Charley Doe", "templates/new-world"); ?></h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-2.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("Charley Doe", "templates/new-world"); ?></h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-3.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("Charley Doe", "templates/new-world"); ?></h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-4.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("harley Doe", "templates/new-world"); ?>C</h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-5.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("Charley Doe", "templates/new-world"); ?></h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/people-6.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <h5><?php _lang("Charley Doe", "templates/new-world"); ?></h5>
                                        <p class="m-t-10"><?php _lang("Charley is a senior developer in our company. He is doing great code and software solutions. Educated in Sofia, Bulgaria.", "templates/new-world"); ?></p>

                                        <div class="element socials-holder">
                                            <module type="social_links"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
