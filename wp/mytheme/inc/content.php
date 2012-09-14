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
						?>
					</article>
		<?php } ?>

	</div>