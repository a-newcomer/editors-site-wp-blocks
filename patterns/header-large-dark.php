<?php
/**
 * Title: header-large-dark
 * Slug: foreditors/header-large-dark
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dlarge, 8rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:template-part {"slug":"header","theme":"foreditors","tagName":"header","align":"wide"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:0px"><!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dfont-size\u002d\u002dcolossal, clamp(3.25rem, 8vw, 6.25rem))","lineHeight":"1.15"}}} -->
<h3 class="alignwide" style="font-size:var(--wp--custom--typography--font-size--colossal, clamp(3.25rem, 8vw, 6.25rem));line-height:1.15"><strong><em>The Hatchery</em>: a blog about my adventures in bird watching</strong></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/flight-path-on-transparent-c.png" alt="<?php echo esc_attr_e( 'Illustration of a bird flying.', 'Twenty Twenty-Two' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"66px"} -->
<div style="height:66px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->