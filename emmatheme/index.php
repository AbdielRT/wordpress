<?php get_header(); ?>

	<?php if (have_posts()) { ?>

		<div class="row">

			<?php while(have_posts()){
				the_post(); ?>

			<div class="col-sm-4">
				<div class="card">
					<?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']); ?>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<h6 class="card-subtitlemb-2 list-unstyled">
							<?php 
					            if(has_category()){ 
					                $categories = get_the_category();
					                foreach($categories as $category){
					                    $cat_link = get_category_link($category); ?>
					                    <div>
					                    <a class="badge rounded-pill bg-info" 
					                      href='<?php echo $cat_link ?>'>
					                        <?php echo $category->name; ?>
					                    </a>
					                </div>
					        <?php   } 
					            } ?>
					    </h6>

						<p class="card-text">
<!-- 							<?php the_content("Lire la suite"); ?> -->						
<!-- 							si il y a un extrait defini sur wp il affiche l'extrait sinon affiche the_content() --> 
								<?php the_excerpt(); ?>		
							</p>
						<a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<?php }else { ?>

			<h1>Pas d'article</h1>

		<?php } ?>

<?php get_footer(); ?>