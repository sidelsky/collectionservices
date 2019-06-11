<?php
	use App\Helper\WordpressHelper;
	$wordpress = new WordpressHelper;
?>

			</main>
	 	</div>

		<?php 
		wp_footer(); 

		$googleAnalyticID = get_field('google_analytics', 'option');
		
		//Google Analytics
		$template = 'c-google-analytics';
		$data = [
			'UA' => $googleAnalyticID
		];
		echo $render->view('Components/' . $template, $data);

		?>
	</body>
</html>
