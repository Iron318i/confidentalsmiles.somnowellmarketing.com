<div class="flexslider">
	<ul class="slides">
		<?php 
		$rows = get_field('inner_banner','option'); 
		if(!empty($rows)){
		$total_items = count($rows);
		if($rows) $i = 0; { 
		    shuffle( $rows ); 
		    foreach($rows as $row) { 
		    	if(!empty($row['inner_banner_image'])){
		    	$img = $row['inner_banner_image']['url']
		?>
	        	<li class="bgflex header<?php echo $i+1; ?>" style="background-image:url('<?php echo aq_resize($img, 1500, 614, true, true, true); ?>')"></li>
	    <?php $i++; 
	    if($i==$total_items) break; 
	    	}
	    }
	    } 
	     }

	    ?>
	</ul>
</div>