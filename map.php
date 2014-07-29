<?php
require_once ('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
	<?php
	require_once ('templates/map-head.php');
	?>
	<body>
		<?php
		require_once ('templates/header.php');
		?>
		
		<div id="map-canvas">
		</div>
		
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

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/festival-of-code-project/map.php//js/bootstrap.min.js"></script>
		<script src="/festival-of-code-project/map.php//js/docs.min.js"></script>
		<script src="/festival-of-code-project/map.php//js/af-map.js"></script>
	</body>
</html>
