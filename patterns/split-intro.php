<?php
/**
 * Title: Split Intro
 * Slug: theme-slug/split-intro
 * Categories: featured
 * Description: An asymmetric split-screen intro section with large heading and descriptive text.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4.5rem)","lineHeight":"1.1","fontStyle":"normal","fontWeight":"800","letterSpacing":"-0.02em"}}} -->
			<h1 class="wp-block-heading" style="font-size:clamp(2.5rem, 5vw, 4.5rem);font-style:normal;font-weight:800;letter-spacing:-0.02em;line-height:1.1">Ideas that<br>move forward.</h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:separator {"style":{"separators":{"width":"3px"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="border-bottom-width:3px"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
			<p style="line-height:1.7">We craft thoughtful digital experiences rooted in clarity, intention, and a deep respect for the people who use them. Every detail matters.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"border":{"radius":"0px"},"typography":{"fontSize":"0.85rem","letterSpacing":"0.05em","textTransform":"uppercase"}}} -->
				<div class="wp-block-button has-custom-font-size" style="font-size:0.85rem;letter-spacing:0.05em;text-transform:uppercase"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" style="border-radius:0px">Explore Our Work</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->