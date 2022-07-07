  <?php get_search_form(); ?>


<?php
        $paged = $_POST['page'];
        $args = [
            'post_type' => 'post',
            'posts_per_page' => get_option('posts_per_page'),
            'post_status' => 'publish',
            'paged' => $paged,
        ];
        $the_query = new WP_Query($args);
        // Mise en buffer
        ob_start();
        include('template-parts/post-list.php');
        echo '<script>ajaxizePageLinks()</script>';
        // Récupération du contenu du buffer
        echo ob_get_clean();
        wp_die();

?>