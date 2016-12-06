<div id="thecontent">

					<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-align-center"><?php the_post_thumbnail('large', array( 'class' => 'uk-align-center' )); ?></div>
					
										<?php
				}
			 ?>
<?php the_content(); ?>
</div>

