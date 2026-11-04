<?php
/**
 * Title: Veloura Hero Slider
 * Slug: veloura-lite/banner
 * Categories: banner, featured
 * Description: A refined three-slide fashion hero with accessible manual controls.
 */
?>

<!-- wp:group {"tagName":"section","className":"veloura-hero-slider","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group veloura-hero-slider" aria-roledescription="carousel" aria-label="<?php echo esc_attr__( 'Featured collections', 'veloura-lite' ); ?>" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:group {"className":"veloura-slides","layout":{"type":"default"}} -->
<div class="wp-block-group veloura-slides">

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-1.jpg' ); ?>","dimRatio":0,"minHeight":650,"minHeightUnit":"px","isDark":false,"className":"veloura-slide is-active","style":{"spacing":{"padding":{"top":"48px","right":"32px","bottom":"48px","left":"32px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover is-light veloura-slide is-active" style="padding-top:48px;padding-right:32px;padding-bottom:48px;padding-left:32px;min-height:650px" data-slide="0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-1.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"veloura-slide-content","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"constrained","contentSize":"520px","justifyContent":"left"}} -->
<div class="wp-block-group veloura-slide-content">
<!-- wp:paragraph {"className":"veloura-eyebrow","style":{"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<p class="veloura-eyebrow has-inter-font-family" style="font-size:12px;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'The Veloura Edit', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"veloura-hero-title","style":{"typography":{"fontSize":"clamp(2.8rem,6vw,5.4rem)","fontStyle":"normal","fontWeight":"400","lineHeight":"0.98"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"veloura-serif"} -->
<h2 class="wp-block-heading veloura-hero-title has-veloura-serif-font-family" style="margin-top:0;margin-bottom:0;font-size:clamp(2.8rem,6vw,5.4rem);font-style:normal;font-weight:400;line-height:0.98"><?php esc_html_e( 'Quiet Luxury, Made for Every Day', 'veloura-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"veloura-hero-copy","style":{"typography":{"fontSize":"16px","lineHeight":"1.7"}},"fontFamily":"inter"} -->
<p class="veloura-hero-copy has-inter-font-family" style="font-size:16px;line-height:1.7"><?php esc_html_e( 'Soft tailoring, considered knitwear and refined neutrals designed to move effortlessly through your wardrobe.', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"veloura-hero-button","backgroundColor":"contrast","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"28px","right":"28px"}},"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<div class="wp-block-button veloura-hero-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-inter-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:0px;padding-top:13px;padding-right:28px;padding-bottom:13px;padding-left:28px;font-size:12px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Shop the Collection', 'veloura-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-2.jpg' ); ?>","dimRatio":0,"minHeight":650,"minHeightUnit":"px","isDark":false,"className":"veloura-slide","style":{"spacing":{"padding":{"top":"48px","right":"32px","bottom":"48px","left":"32px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover is-light veloura-slide" style="padding-top:48px;padding-right:32px;padding-bottom:48px;padding-left:32px;min-height:650px" data-slide="1"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-2.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"veloura-slide-content","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"constrained","contentSize":"520px","justifyContent":"left"}} -->
<div class="wp-block-group veloura-slide-content">
<!-- wp:paragraph {"className":"veloura-eyebrow","style":{"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<p class="veloura-eyebrow has-inter-font-family" style="font-size:12px;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'Modern Tailoring', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"veloura-hero-title","style":{"typography":{"fontSize":"clamp(2.8rem,6vw,5.4rem)","fontStyle":"normal","fontWeight":"400","lineHeight":"0.98"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"veloura-serif"} -->
<h2 class="wp-block-heading veloura-hero-title has-veloura-serif-font-family" style="margin-top:0;margin-bottom:0;font-size:clamp(2.8rem,6vw,5.4rem);font-style:normal;font-weight:400;line-height:0.98"><?php esc_html_e( 'Structure Meets Softness', 'veloura-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"veloura-hero-copy","style":{"typography":{"fontSize":"16px","lineHeight":"1.7"}},"fontFamily":"inter"} -->
<p class="veloura-hero-copy has-inter-font-family" style="font-size:16px;line-height:1.7"><?php esc_html_e( 'Clean lines and relaxed proportions create polished pieces that feel as good as they look.', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"veloura-hero-button","backgroundColor":"contrast","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"28px","right":"28px"}},"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<div class="wp-block-button veloura-hero-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-inter-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:0px;padding-top:13px;padding-right:28px;padding-bottom:13px;padding-left:28px;font-size:12px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Discover Tailoring', 'veloura-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-3.jpg' ); ?>","dimRatio":0,"minHeight":650,"minHeightUnit":"px","isDark":false,"className":"veloura-slide","style":{"spacing":{"padding":{"top":"48px","right":"32px","bottom":"48px","left":"32px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover is-light veloura-slide" style="padding-top:48px;padding-right:32px;padding-bottom:48px;padding-left:32px;min-height:650px" data-slide="2"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/veloura-slide-3.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"veloura-slide-content","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"constrained","contentSize":"520px","justifyContent":"left"}} -->
<div class="wp-block-group veloura-slide-content">
<!-- wp:paragraph {"className":"veloura-eyebrow","style":{"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<p class="veloura-eyebrow has-inter-font-family" style="font-size:12px;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'The Neutral Wardrobe', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"veloura-hero-title","style":{"typography":{"fontSize":"clamp(2.8rem,6vw,5.4rem)","fontStyle":"normal","fontWeight":"400","lineHeight":"0.98"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"veloura-serif"} -->
<h2 class="wp-block-heading veloura-hero-title has-veloura-serif-font-family" style="margin-top:0;margin-bottom:0;font-size:clamp(2.8rem,6vw,5.4rem);font-style:normal;font-weight:400;line-height:0.98"><?php esc_html_e( 'Designed to Be Worn Together', 'veloura-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"veloura-hero-copy","style":{"typography":{"fontSize":"16px","lineHeight":"1.7"}},"fontFamily":"inter"} -->
<p class="veloura-hero-copy has-inter-font-family" style="font-size:16px;line-height:1.7"><?php esc_html_e( 'A calm palette, tactile layers and timeless silhouettes make getting dressed beautifully simple.', 'veloura-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"veloura-hero-button","backgroundColor":"contrast","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"28px","right":"28px"}},"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"fontFamily":"inter"} -->
<div class="wp-block-button veloura-hero-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-inter-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:0px;padding-top:13px;padding-right:28px;padding-bottom:13px;padding-left:28px;font-size:12px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Explore the Edit', 'veloura-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="veloura-slider-controls" aria-label="<?php echo esc_attr__( 'Slider controls', 'veloura-lite' ); ?>">
	<button class="veloura-slider-arrow veloura-slider-prev" type="button" aria-label="<?php echo esc_attr__( 'Previous slide', 'veloura-lite' ); ?>"><span aria-hidden="true">←</span></button>
	<div class="veloura-slider-dots" role="group" aria-label="<?php echo esc_attr__( 'Choose slide', 'veloura-lite' ); ?>">
		<button class="veloura-slider-dot is-active" type="button" data-slide-to="0" aria-label="<?php echo esc_attr__( 'Show slide 1', 'veloura-lite' ); ?>" aria-current="true"></button>
		<button class="veloura-slider-dot" type="button" data-slide-to="1" aria-label="<?php echo esc_attr__( 'Show slide 2', 'veloura-lite' ); ?>"></button>
		<button class="veloura-slider-dot" type="button" data-slide-to="2" aria-label="<?php echo esc_attr__( 'Show slide 3', 'veloura-lite' ); ?>"></button>
	</div>
	<button class="veloura-slider-arrow veloura-slider-next" type="button" aria-label="<?php echo esc_attr__( 'Next slide', 'veloura-lite' ); ?>"><span aria-hidden="true">→</span></button>
</div>
<!-- /wp:html -->

</section>
<!-- /wp:group -->
