<?php
$fields = get_fields();
?>

<section class="accordion">
    <div class="container">
        <?php if (!empty($fields['title'])) { ?>
        <h2><?php echo wp_kses_post($fields['title']); ?></h2>
        <div class="accordion__inner">

            <?php }

            if (!empty($fields['accordion'])) {
                foreach ($fields['accordion'] as $faq) { ?>
                    <div class="accordion__faq">
                        <div class="accordion__question">
                            <?php if (!empty($faq['question'])) { ?>
                                <div class="accordion__question-item">
                                    <?php echo wp_kses_post($faq['question']); ?>
                                </div>
                            <?php }
                            if (!empty($faq['sub_question'])) {
                                foreach ($faq['sub_question'] as $sub) { ?>
                                    <div class="accordion__question-sub"><?php echo wp_kses_post($sub['sub']); ?></div>
                                <?php }
                            } ?>
                        </div>
                        <div class="accordion__faq-content accordion__answer content">
                            <div class="content-left">
                                <?php
                                if (!empty($faq['answer'])) { ?>
                                    <div class="accordion__answer-text">
                                        <?php echo $faq['answer']; ?>
                                    </div>
                                <?php }
                                if (!empty($faq['button'] && $faq['button_link'])) { ?>
                                    <div class="accordion__answer-button">
                                        <a href="<?php echo wp_kses_post($faq['button_link']); ?>"><?php echo wp_kses_post($faq['button']); ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-right">
                                <?php
                                if (!empty($faq['photo'])) { ?>
                                    <div class="accordion__answer-photo">
                                        <img src="<?php echo wp_kses_post($faq['photo']['url']); ?>"/>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>
