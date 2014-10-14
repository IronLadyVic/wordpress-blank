<?php get_header(); ?>

<div class="services">
	<?php while (have_posts()) : the_post(); ?>		
		<article class="service">

			<div class="service-header">
				<h2><?php echo the_title()?></h2>

				<span class="service-price">
				$<?php echo types_render_field("price", array("raw"=>true))?> <span>per month</span>
				</span>
			</div>

			<ul class="service-list">
				<li><?php echo types_render_field("feature", array("raw"=>true,"separator"=>"</li><li>"))?></li>
			</ul>

		</article>

	<?php endwhile; ?>			
</div>

<?php get_footer(); ?>
