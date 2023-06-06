<?php
$fields = get_field('footer', 'options');
?>
</main>
<footer class="footer">
    <div class="container">
        <img src="data:image/svg+xml,%3Csvg width='103' height='30' viewBox='0 0 103 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10.663 30C7.99725 30 5.72025 29.3906 3.83201 28.1717C1.94378 26.9252 0.666437 25.2493 0 23.144L1.91601 22.0222C2.4436 23.8504 3.45714 25.2909 4.95663 26.3435C6.45611 27.3684 8.35823 27.8809 10.663 27.8809C12.9678 27.8809 14.7588 27.3546 16.0361 26.3019C17.3412 25.2493 17.9938 23.8366 17.9938 22.0637C17.9938 20.4848 17.3829 19.2521 16.1611 18.3657C14.9948 17.5346 13.0927 16.6898 10.4547 15.831L8.37212 15.1662L6.53941 14.4598C5.6786 14.0997 5.08158 13.8089 4.74836 13.5873C3.41549 12.7562 2.55468 12.0083 2.16592 11.3435C1.52725 10.2355 1.20792 9.05817 1.20792 7.81164C1.20792 5.45706 2.04096 3.57341 3.70706 2.16066C5.40092 0.720221 7.5113 0 10.0382 0C12.2597 0 14.1757 0.554017 15.7862 1.66205C17.4246 2.77008 18.6325 4.25208 19.41 6.10803L17.5356 7.14681C16.175 3.79501 13.6758 2.11911 10.0382 2.11911C8.06667 2.11911 6.46999 2.64543 5.24819 3.69806C4.05416 4.72299 3.45714 6.06648 3.45714 7.72853C3.45714 9.30748 4.01251 10.4848 5.12324 11.2604C6.23396 12.036 8.05278 12.8393 10.5797 13.6704C12.218 14.2244 13.4676 14.6814 14.3284 15.0416C15.2725 15.4294 16.2444 15.9418 17.2441 16.5789C19.2434 17.7978 20.243 19.6122 20.243 22.0222C20.243 24.4321 19.3683 26.3712 17.6189 27.8393C15.8973 29.2798 13.5787 30 10.663 30Z' fill='%232E2E2E'/%3E%3Cpath d='M49.4969 25.6371C46.5813 28.5457 43.027 30 38.834 30C34.641 30 31.0866 28.5457 28.171 25.6371C25.2553 22.7008 23.7975 19.1551 23.7975 15C23.7975 10.8449 25.2553 7.31302 28.171 4.40443C31.0866 1.46814 34.641 0 38.834 0C43.027 0 46.5813 1.46814 49.4969 4.40443C52.4126 7.31302 53.8704 10.8449 53.8704 15C53.8704 19.1551 52.4126 22.7008 49.4969 25.6371ZM29.7121 24.1413C32.2112 26.6343 35.2519 27.8809 38.834 27.8809C42.4438 27.8809 45.4706 26.6343 47.9142 24.1413C50.4133 21.5928 51.6629 18.5457 51.6629 15C51.6629 11.4266 50.4133 8.39335 47.9142 5.90028C45.4706 3.3795 42.4438 2.11911 38.834 2.11911C35.2519 2.11911 32.2112 3.3795 29.7121 5.90028C27.2407 8.42105 26.005 11.4543 26.005 15C26.005 18.5457 27.2407 21.5928 29.7121 24.1413Z' fill='%232E2E2E'/%3E%3Cpath d='M58.8489 19.8199V0.457063H61.0564V19.8199C61.0564 22.2853 61.7923 24.2521 63.264 25.7202C64.7635 27.1607 66.8461 27.8809 69.5119 27.8809C72.1776 27.8809 74.2602 27.1607 75.7597 25.7202C77.2592 24.2521 78.0089 22.2853 78.0089 19.8199V0.457063H80.2165V19.8199C80.2165 22.867 79.2307 25.3324 77.2592 27.2161C75.3154 29.072 72.733 30 69.5119 30C66.2907 30 63.7083 29.072 61.7645 27.2161C59.8208 25.3601 58.8489 22.8947 58.8489 19.8199Z' fill='%232E2E2E'/%3E%3Cpath d='M89.2547 0.457063V27.4654H103V29.5429H87.0472V0.457063H89.2547Z' fill='%232E2E2E'/%3E%3C/svg%3E%0A">
        <?php
        wp_nav_menu(array(
            'menu' => 'main_menu',
            'menu_class' => 'header__menu',
            'container' => false,
            'walker' => new Walker_Menu
        ));
        if (!empty($fields['copyright'])) { ?>
            <p class="footer__copyright"><?php echo date('Y') . ' ' . $fields['copyright']; ?></p>
        <?php } ?>
    </div>
</footer>
<?php
wp_footer();
?>
</body>
</html>
