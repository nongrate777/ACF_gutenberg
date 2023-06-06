<?php
$fields = get_fields();

?>

    <section class="banner">
        <div class="container">
            <div class="banner__inner">
                <?php if (!empty($fields['title'])) { ?>
                    <div class="banner__title"><?php echo wp_kses_post($fields['title']); ?></div>
                <?php } ?>
                <div class="banner__svg">
                    <img src="data:image/svg+xml,%3Csvg width='1048' height='233' viewBox='0 0 1048 233' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.625 123.823V216.357H134.016V233H0V0H132.354V16.6429H17.625V107.18H124.04V123.823H17.625Z' fill='%232E2E2E'/%3E%3Cpath d='M253.801 113.171L331.284 233H310.999L243.824 129.149L176.65 233H156.032L233.515 113.171L160.355 0H180.64L243.824 97.5272L306.676 0H326.961L253.801 113.171Z' fill='%232E2E2E'/%3E%3Cpath d='M520.916 104.85V0H538.541V233H520.916V121.493H385.57V233H367.945V0H385.57V104.85H520.916Z' fill='%232E2E2E'/%3E%3Cpath d='M771.498 233H752.875L730.262 173.751H613.538L590.925 233H572.302L662.755 0H681.378L771.498 233ZM672.066 21.6357L620.189 157.109H723.944L672.066 21.6357Z' fill='%232E2E2E'/%3E%3Cpath d='M805.386 233V0H823.011V233H805.386Z' fill='%232E2E2E'/%3E%3Cpath d='M1048 233H1027.71L971.847 137.47H898.354V233H880.729V0H972.512C991.356 0 1007.54 6.76809 1021.06 20.3043C1034.59 33.8405 1041.35 50.0395 1041.35 68.9014C1041.35 84.4348 1036.47 98.4148 1026.72 110.841C1017.18 123.046 1004.99 131.146 990.137 135.14L1048 233ZM972.512 16.6429H898.354V120.827H972.512C986.701 120.827 998.783 115.834 1008.76 105.849C1018.74 95.641 1023.72 83.3252 1023.72 68.9014C1023.72 54.4776 1018.74 42.1619 1008.76 31.9543C998.783 21.7467 986.701 16.6429 972.512 16.6429Z' fill='%232E2E2E'/%3E%3C/svg%3E%0A">
                </div>
                <?php
                if (!empty($fields['description'])) { ?>
                    <div class="banner__description"><?php echo wp_kses_post($fields['description']); ?></div>
                <?php }
                if (!empty($fields['button'])) { ?>
                    <div class="banner__button">
                        <a href="#" id="open-modal"><?php echo wp_kses_post($fields['button']); ?></a>
                    </div>
                <?php }
                if (!empty($fields['address'])) { ?>
                    <div class="banner__address"><?php echo wp_kses_post($fields['address']); ?></div>
                <?php } ?>
            </div>
            <?php
            if (!empty($fields['image'])) { ?>
                <div class="banner__image">
                    <img src="<?php echo $fields['image']['url']; ?>">
                </div>
            <?php } ?>
        </div>
    </section>

<?php

get_template_part('blocks/modal/modal');
