	<div class="content">
		<?php if (have_posts()) {
					the_post();
					$meta= get_post_custom();
		?>
					<article>
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>   	
						<?php
							if (count($meta['price'])>0){
								$price= $meta['price'][0];
								echo "<p>Price: $price $</p>";
							}

							if (count($meta['img'])>0){
								echo "<div class='get_img'>";
								foreach ($meta['img'] as $img_id) {
									$img_small= wp_get_attachment_image($img_id,'thumbnail');
									$img_larg= wp_get_attachment_image_src($img_id, 'larg');
									echo "<a href='$img_larg[0]'>$img_small</a>";
								}
								echo "</div>";
							}
						?>
					</article>
		<?php } ?>

	</div>