<?php

/*

type: layout

name: Contact Information

position: 3

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-30';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-30';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto allow-drop text-center">
                <h2 class="m-b-10">Ask Your Question to Us</h2>
                <p class="lead">Read what our lients says for our services.</p>
                <br />
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 mx-auto">
                <module type="contact_form"/>
            </div>
        </div>
    </div>
</section>
