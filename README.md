# Medium Clone

[![Build Status](https://travis-ci.org/jojoee/medium-clone.svg)](https://travis-ci.org/jojoee/medium-clone)

medium.com clone for wordpress

## Getting started (development purpose)

1. Install [Node.js](https://nodejs.org/)
2. Set path (e.g. `cd wp-content/themes/medium-clone/`)
3. Install global: `npm install -g bower gulp jscs`
4. Install dependencies: `npm install & bower install`
5. Set proxy on `devUrl` in `wp-content\themes\medium-clone\assets\manifest.json`
6. Build current source: `gulp`
6. Run task runner: `gulp watch`

## Support

* [ ] [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
* [ ] [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* [ ] [Really Simple CAPTCHA](https://wordpress.org/plugins/really-simple-captcha/)
* [ ] [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) breadcrumb (page only)
* [ ] [Breadcrumb NavXT](https://wordpress.org/plugins/breadcrumb-navxt/)
* [ ] [Yet Another Related Posts Plugin (YARPP)](https://wordpress.org/plugins/yet-another-related-posts-plugin/)
* [ ] [WordPress Popular Posts](https://wordpress.org/plugins/wordpress-popular-posts/)
* [ ] [Facebook Comments](https://wordpress.org/plugins/facebook-comments-plugin/)
* [ ] Gallery of [Jetpack by WordPress.com](https://wordpress.org/plugins/jetpack/) / [Slim Jetpack](https://wordpress.org/plugins/slimjetpack/)
* [ ] [Ninja Forms](https://wordpress.org/plugins/ninja-forms/)
* [ ] [MailChimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/)
* [ ] [Disqus Comment System](https://wordpress.org/plugins/disqus-comment-system/)
* [ ] [Page Builder by SiteOrigin](https://wordpress.org/plugins/siteorigin-panels/)
* [ ] [SiteOrigin Widgets Bundle](https://wordpress.org/plugins/so-widgets-bundle/)
* [ ] [NextGEN Gallery](https://wordpress.org/plugins/nextgen-gallery/)
* [ ] [WooCommerce](https://wordpress.org/plugins/woocommerce/) and test with dummy woocommerce content
* [ ] [bbPress](https://wordpress.org/plugins/bbpress/)
* [ ] [BuddyPress](https://wordpress.org/plugins/buddypress/)

## Future update

* [ ] Lightbox: (e.g. [MediumLightbox](https://github.com/davidecalignano/MediumLightbox), [Fluidbox](https://github.com/terrymun/Fluidbox), [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/))
* [x] Google Fonts: [Web Font Loader](https://github.com/typekit/webfontloader)
* [ ] Theme Customizer by [Kirki](https://kirki.org/)
* [ ] [FastClick](https://github.com/ftlabs/fastclick)
* [ ] Navmenu: when hover then show scrollbar
* [ ] Fix `.travis.yml`
* [ ] Translation ready
* [ ] Fix `PACE`

## Checklist

* [x] Theme unit test: [wptest.io](http://wptest.io/)
* [ ] Page Layout - [Home](http://localhost:3000/)
* [ ] Page Layout - Archive: [Category](http://localhost:3000/category/codex/)
* [ ] Page Layout - Archive: [Tag](http://localhost:3000/tag/8bit/)
* [ ] Page Layout - Archive: [Author](http://localhost:3000/author/joe/)
* [ ] Page Layout - Archive: [Date](http://localhost:3000/2012/12/)
* [ ] Page Layout - Singular: [Post](http://wp11.dev/image-alignment/)
* [ ] Page Layout - Singular: [Page](http://localhost:3000/about/)
* [ ] Page Layout - [Attachment](http://localhost:3000/photo-1428189923803-e9801d464d76/)
* [ ] Page Layout - [Search](http://localhost:3000/?s=test)
* [ ] Page Layout - [404](http://localhost:3000/404/)
* [ ] Component layout - Widget tested by [Monster Widget](https://wordpress.org/plugins/monster-widget/)
* [ ] Component layout - Menu
* [ ] Fixed `REQUIRED` of [Theme Check](https://wordpress.org/plugins/theme-check/)
* [ ] [Log Deprecated Notices](https://wordpress.org/plugins/log-deprecated-notices/)
* [ ] [RTL Tester](https://wordpress.org/plugins/rtl-tester/)

## Reference & Thank you

* [Wordpress.org](https://wordpress.org/themes/)
* Original website: [Medium](https://medium.com/)
