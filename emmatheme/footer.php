
	</div>
	<?php wp_footer(); ?>
	    <footer class="navbar-dark bg-dark">
	        <div class="row text-center">
	            <div class="col-sm-12 col-md-12 col-lg-12">
	                <?php wp_nav_menu([
					        'menu' => 'footer',
					        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
					    ]);?>
	            </div>
	        </div>
	        <div class="row text-center">
	            <div class="col-sm-12 col-md-12 col-lg-12 text-muted">
	                <div>Copyright &copy; 2021 | <?php bloginfo('name'); ?></div>
	            </div>
	        </div>
	    </footer>
	</body>
</html>

