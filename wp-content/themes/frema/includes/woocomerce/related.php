
	<div id="primary" class="content-area destacados">
		<main id="main" class="site-main" role="main">

			<header class="site-main__header">
				<h2>Productos destacados</h2>
			</header>

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
				echo do_shortcode( '[recent_products per_page="8" columns="3" category="destacado"]' );
			?>


		</main><!-- #main -->
	</div><!-- #primary -->
