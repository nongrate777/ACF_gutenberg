<?php
$fields = get_fields();
?>
<section class="testimonials">
    <div class="container">
        <div class="testimonials__title-wrapper">
            <?php if (!empty($fields['title_section'])) : ?>
                <div class="second-title second-title--mobile">
                    <h2><?php echo wp_kses_post($fields['title_section']); ?></h2>
                </div>
            <?php endif; ?>
            <?php if (!empty($fields['instagram'] && $fields['instagram_link'])) : ?>
            <div class="testimonials__title-wrapper-instagram">
                <a href="<?php echo wp_kses_post($fields['instagram_link']); ?>">
                    <?php echo wp_kses_post($fields['instagram']); ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <div class="swiper-wrapper-index">
            <div class="swiper-inner-container swiper1">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($fields['testimonials'] as $t) {
                            ?>
                            <div class="swiper-slide swiper-slide-item">
                                <div class="swiper-slide__center">
                                    <a href="<?php echo $t['video_url']; ?>" class="video-link">
                                        <img class="testimonials__video-link" src="<?php echo $t['photo']['url']; ?>" data-video="<?php echo $t['video_url']; ?>">
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <button class="swiper-next"></button>
            <button class="swiper-prev"></button>
        </div>
    </div>
</section>
<div class="modal-overlay">
    <div class="modal">
        <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreenы controls autoplay></iframe>
        <button class="close-modal"></button>
    </div>
</div>
