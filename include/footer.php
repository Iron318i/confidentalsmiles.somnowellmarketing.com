<footer class="footer-wrapp">
	<div class="margin">
    	
		<div class="footer-row1">
			<ul class="footer-bar1">
				<li>Copyright © Confidental Smiles</li>
                <li>|</li>
                <li>Site last updated: <?php
                                $today = current_time('mysql', 1);
                                $count = 1;
                                    if ( $recentposts = $wpdb->get_results("SELECT ID,post_modified FROM $wpdb->posts WHERE post_status = 'publish' AND post_modified_gmt < '$today' ORDER BY post_modified_gmt DESC LIMIT $count")):

                                        foreach ($recentposts as $post) {
                                            echo mysql2date("j F Y",$post->post_modified);
                                        }

                                    endif;
                            ?></li>
                <li>|</li>
                <li>Made by <a href="https://digimax.dental" target="_blank">Digimax Dental Marketing</a>.</li>
            </ul>
        </div>
        <div class="footer-row2">
			<ul class="footer-bar2">
				<?php wp_nav_menu(array('menu'=>'Footer Menu 2','container'=>'none','menu_class'=>'footer-bar2'));?>
        </div>
    
    </div>
</footer>

<script>
var click=4;
function LoadMOre(total){
    var initial=click+1;
    var final=click+4;
    while(initial<=final){
        jQuery(".appear_"+initial).fadeIn(3000);
        initial++;
    }

	click=click+4;
 	if(click>=total){
        jQuery(".loadmoretestimonialsmaonpage").fadeOut(3000);
    }
}
var clickv=4;
function LoadMOrevideo(totalv){
    var initial=clickv+1;
    var final=clickv+4;
    while(initial<=final){
        jQuery(".appear_video_"+initial).fadeIn(3000);
        initial++;
    }

	clickv=clickv+4;
	if(clickv>=totalv){
        jQuery(".loadmoretestimonialsmaonpagevideo").fadeOut(3000);
    }
}
</script>
