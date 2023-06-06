<?php
$fields = get_fields();


?>

<section class="feedback">
    <div class="container">
        <div class="feedback__left">
            <?php if (!empty($fields['title'])) { ?>
                <h2><?php echo wp_kses_post($fields['title']); ?></h2>
            <?php }

            if (!empty($fields['description'])) { ?>
                <p><?php echo wp_kses_post($fields['description']); ?></p>
            <?php } ?>
        </div>
        <div class="feedback__right">
            <?php if (!empty($fields['form_id'])) { ?>
                <p><?php echo do_shortcode('[contact-form-7 id="' . $fields['form_id'] . '" html_id="contactForm"]'); ?></p>
            <?php } ?>
        </div>

    </div>
</section>
