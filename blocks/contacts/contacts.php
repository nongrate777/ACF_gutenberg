<?php
$fields = get_fields();
?>

<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__inner-left">
                <div class="contacts__inner-left-row">
                    <?php if (!empty($fields['title'])) { ?>
                        <h2><?php echo wp_kses_post($fields['title']); ?></h2>
                    <?php } ?>
                </div>
                <div class="contacts__inner-left-row coloumn">
                    <div class="row-item">
                        <?php if (!empty($fields['addres_title'])) { ?>
                            <p class="title"><?php echo wp_kses_post($fields['addres_title']); ?></p>
                        <?php }
                        if (!empty($fields['addres'])) { ?>
                            <p><?php echo wp_kses_post($fields['addres']); ?></p>
                        <?php }
                        if (!empty($fields['work_time_title'])) { ?>
                            <p class="title"><?php echo wp_kses_post($fields['work_time_title']); ?></p>
                        <?php }
                        if (!empty($fields['work_time'])) { ?>
                            <p><?php echo wp_kses_post($fields['work_time']); ?></p>
                        <?php } ?>
                    </div>
                    <div class="row-item">
                        <?php if (!empty($fields['phone_title'])) { ?>
                            <p class="title"><?php echo wp_kses_post($fields['phone_title']); ?></p>
                        <?php }
                        if (!empty($fields['phone'])) { ?>
                            <p><a href="tel:<?php echo wp_kses_post($fields['phone']); ?>"><?php echo wp_kses_post($fields['phone']); ?></a></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="contacts__inner-left-row">
                    <?php if (!empty($fields['button_title'])) { ?>
                        <a class="button_link" href="#" id="open-modal">
                            <?php echo wp_kses_post($fields['button_title']); ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="contacts__inner-right">
                <?php if (!empty($fields['google'])) {
                    echo $fields['google'];
                } ?>
            </div>
        </div>
    </div>
</section>

