<?php
require_once ('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
	<?php
	require_once ('templates/head.php');
	?>
	<body>
		<?php
		require_once ('templates/header.php');
		?>
		<div class="container">
			<div class="col-xs-6 col-sm-3 sidebar-offcanvas selection-sidebar" id="sidebar" role="navigation">
				<div class="list-group">
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<label class="list-group-item" for="US">
					<input type="checkbox" name="US" id="US">
						United States
					</label>
					<!-- OLD: <a href="#" class="list-group-item">Link</a> -->
				</div>
			</div><!--/span-->
		</div><!--/row-->
		
		<?php
		
		
		
		?>

		<div class="container">
			<hr>
			<footer>
				<p>
					© Company 2014
				</p>
			</footer>

			<!-- FOOTER -->
			<footer>
				<p class="pull-right">
					<a href="#">Back to top</a>
				</p>
				<p>
					&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
				</p>
			</footer>

		</div><!-- /.container -->

		<div class="map-canvas"></div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/docs.min.js"></script>
		<script src="/js/af-map.js"></script>
	</body>
</html>
