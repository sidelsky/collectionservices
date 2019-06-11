<?php
	 /**
		* This themeData file is included into the header.php file
		* @author Errol Sidelsky
		*/
	 $themeData = [
			
			//Copyright Info
			'copyright'    => [
				 'details'   => '&copy; Copyright' . date('Y') . ' ' . get_bloginfo('title') . ' | All rights reserved | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-conditions">Terms & Conditions</a>'
			],

			//Footer content
			'footerNavigation' => [
				 'adviceGuidance' => [
						'columnTitle' => 'Our Company',
						'items' => [
							 [
									'title' => 'About SafeToNet',
									'url' => '/about_safetonet'
							 ],
							 [
									'title' => 'Industry Recognition',
									'url' => '/about_safetonet/industry-recognition'
							 ],
							 [
									'title' => 'FAQs',
									'url' => '/about_safetonet/frequently-asked-questions'
							 ],
							 [
									'title' => 'Contact',
									'url' => '/contact'
							 ],
						]
				 ]

				],

			//Social info
			'social' => [
				 'facebook' => [
						'title'  => 'facebook',
						'url'    => 'https://www.facebook.com/arcollect.net/',
						'target' => '_blank',
						'icon'   => 'facebook'
				 ],
				 'twitter' => [
						'title'  => 'twitter',
						'url'    => 'https://twitter.com/AlwaysCollect',
						'target' => '_blank',
						'icon'   => 'twitter'
		 ],
		 'youtube' => [
						'title'  => 'youtube',
						'url'    => 'https://www.youtube.com/channel/UCuydc0mtQucTPCxa1avAE0w',
						'target' => '_blank',
						'icon'   => 'youtube'
				 ]

			]

	 ];