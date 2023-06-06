<?php
$fields = get_field('modal', 'options');
?>
<div class="modal-overlay-back" id="modal">
    <div class="modal-window">
        <?php
        if (!empty($fields['modal_title'])) { ?>
            <div class="modal-window-title close-after">
                <?php echo $fields['modal_title']; ?>
            </div>
        <?php }
        if (!empty($fields['modal_description'])) { ?>
            <div class="modal-window-description close-after2">
                <?php echo $fields['modal_description']; ?>
            </div>
        <?php } ?>
        <div class="feedback__right">

            <p><?php echo do_shortcode('[contact-form-7 id="51" html_id="contactForm"]'); ?></p>
        </div>
        <div class="thankyou hidden">
            <?php
            if (!empty($fields['thankyou_title'])) { ?>
                <div class="thankyou-title">
                    <?php echo $fields['thankyou_title']; ?>
                </div>
            <?php }
            if (!empty($fields['thankyou_description'])) { ?>
                <div class="thankyou-description">
                    <?php echo $fields['thankyou_description']; ?>
                </div>
            <?php } ?>
        </div>
        <button class="close-modal"></button>
    </div>
</div>



