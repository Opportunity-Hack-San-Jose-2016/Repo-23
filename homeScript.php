<?php
$the_query = new WP_Query( 'tag=work2future');

if ( $the_query->have_posts() ) {
    echo '<ul id="dynamic_post">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<b><h1>' . get_the_title() . '</b></h1>';
        echo '<div id="dynamic_post_content">' . get_the_content() . '</div>';
        echo '<p><br><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=EW8EK849X9ZC6" target="_blank"><img class="alignleft" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="" width="152" height="43" /></a>';
    }
    echo '</ul>';
} else {
    echo 'no posts found';
}
/* Restore original Post Data */
wp_reset_postdata();
?>