=== Mediumm ===

[Build Status](https://travis-ci.org/jojoee/medium-clone)

Mediumm - WordPress theme, very inspired by [medium.com](https://medium.com/)

Mediumm WordPress Theme, Copyright 2017 Nathachai Thongniran
Mediumm is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/licenses/gpl-2.0.html.

Mediumm WordPress Theme is derived from Sage WordPress Theme, Copyright 2013 Ben Word and Scott Walkinshaw
Sage WordPress Theme is distributed under the terms of the MIT

Mediumm WordPress Theme bundles the following third-party resources:

FastClick, Copyright 2014 The Financial Times Ltd
FastClick is licensed under the terms of the MIT
Source: https://github.com/ftlabs/fastclick

Font Awesome, Copyright 2012 Dave Gandy
Font Awesome is licensed under the terms of the MIT
Source: http://fontawesome.io/

Pace, 2013 HubSpot
Pace.js is licensed under the terms of the MIT
Source: https://github.com/HubSpot/pace/

Jeans Kit, Copyright 2016 Nathachai Thongniran
Jeans Kit is licensed under the terms of the MIT
Source: https://github.com/jojoee/jeans-kit

The image is used in screenshot, Gabriel Garcia Marengo
The image is licensed under the terms of the CC0 1.0 Universal
Source: https://unsplash.com/@gabrielgm

=== Getting started (step to) ===

= Build =
1. Install [Node.js](https://nodejs.org/)
2. Set path (e.g. `cd wp-content/themes/medium-clone/`)
3. Install global: `npm install -g bower yarn`
4. Install dependencies: `yarn & bower install`
5. Set proxy on `devUrl` in `wp-content\themes\medium-clone\assets\manifest.json`
6. Build theme: `npm run build`

= Develop =
1. Follow "Build"
2. Run task runner: `npm run watch`

= Submit theme =
1. Follow "Build"
2. Build: `npm run build.prod`
3. Check
  * The directory have no uncommitted files
  * Line endings, [EOL conversion in notepad ++](https://stackoverflow.com/questions/16239551/eol-conversion-in-notepad)
4. Pack theme: `npm run pack`
5. Upload to [wordpress.org/themes/upload/](https://wordpress.org/themes/upload/)

=== Note ===

* Based on [sage-with-space](https://github.com/jojoee/sage-with-space) 8.4.2 but using `package.json` and `gulpfile.js` from 8.5.1
* CSS code style: [rscss](http://rscss.io/)
* Javascript code style: [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript)
* Yoast SEO breadcrumb over Breadcrumb NavXT
* Using Bootstrap 3 grid instead of their grid
* Prefix / Text domain: `mediumm`
* Theme name: `mediumm`
* Space multiply: `6px`
* PHP 5.3+

=== Medium layout (changed) ===

* Header
  * [x] Logo (changed to site title)
  * [ ] Stick on top when scroll up
  * [ ] Hide on top when scroll down
  * [ ] Search icon
  * [ ] Menu (desktop), remove menu from the header except homepage
  * [ ] Menu (mobile)
* Content box
  * [ ] Featured image logic
  * [x] Number of responses (removed)
  * [x] Using category instead of tag
  * [ ] Tag style
  * [ ] Highlights feature
  * [ ] Lightbox
  * [x] Various width side: 660px on tag page, 640px author page, 740px on single post (changed to 720px, from Bootstrap grid system)
* Sidebar
  * [x] Stick when scroll (removed)
* Footer
  * [x] Load more when scroll (removed, display site url instead)
  * [x] Add 1 sidebar
* Page style
  * [ ] Post: author description on top / bottom, full-width featured image
  * [x] Archive: Category / Tag
  * [x] Archive: Author (author section on the top)
  * [ ] Search
* Misc
  * [ ] Improve page loading progression (now, using [PACE](https://github.com/HubSpot/pace))
  * [ ] Fix `h1` tag on each post / page
  * [ ] Incomplete green circle of author thumbnail

=== Support ===

* [ ] [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
* [x] [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* [x] [Really Simple CAPTCHA](https://wordpress.org/plugins/really-simple-captcha/)
* [x] [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) breadcrumb (page only) (over Breadcrumb NavXT)
* [x] [Breadcrumb NavXT](https://wordpress.org/plugins/breadcrumb-navxt/)
* [ ] [Yet Another Related Posts Plugin (YARPP)](https://wordpress.org/plugins/yet-another-related-posts-plugin/)
* [ ] [WordPress Popular Posts](https://wordpress.org/plugins/wordpress-popular-posts/)
* [ ] [Facebook Comments](https://wordpress.org/plugins/facebook-comments-plugin/)
* [x] [Jetpack by WordPress.com](https://wordpress.org/plugins/jetpack/) / [Slim Jetpack](https://wordpress.org/plugins/slimjetpack/) Tiled Gallery
* [ ] [Ninja Forms](https://wordpress.org/plugins/ninja-forms/)
* [ ] [MailChimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/)
* [ ] [Disqus Comment System](https://wordpress.org/plugins/disqus-comment-system/)
* [ ] [Page Builder by SiteOrigin](https://wordpress.org/plugins/siteorigin-panels/)
* [ ] [SiteOrigin Widgets Bundle](https://wordpress.org/plugins/so-widgets-bundle/)
* [ ] [NextGEN Gallery](https://wordpress.org/plugins/nextgen-gallery/)
* [ ] [WooCommerce](https://wordpress.org/plugins/woocommerce/) and test with dummy woocommerce content
* [ ] [bbPress](https://wordpress.org/plugins/bbpress/)
* [ ] [BuddyPress](https://wordpress.org/plugins/buddypress/)
* [x] Customizer: custom body background color and image
* [x] Customizer: custom header color and header background image

=== Updates ===

* [ ] Demo website
* [ ] Lightbox: (e.g. [MediumLightbox](https://github.com/davidecalignano/MediumLightbox), [Fluidbox](https://github.com/terrymun/Fluidbox), [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/))
* [x] Google Fonts: [Web Font Loader](https://github.com/typekit/webfontloader)
* [x] [FastClick](https://github.com/ftlabs/fastclick)
* [x] Translation ready
* [ ] Upload to [wordpress.org](https://wordpress.org/)
* [ ] Remove `gulp-clean` and using `del` instead
* [ ] Fix `.travis.yml`

=== Changelog ===

= 1.1.5 =
* Refactor, namespace system
* Refactor, change code style (using PhpStorm default WordPress code style)
* Check PHP version on theme activation (theme can not activated, if running on PHP version below 5.3.0)

= 1.1.4 =
* Update readme.txt

= 1.1.3 =
* Remove jquery.js from distribution
* Beautify js distribution file
* Remove `.map` file from distribution
* Remove post-formats and add custom-background, custom-header, custom-menu tags
* Fixed, missing translation

= 1.1.2 =
* Using Web Font Loader from local instead of CDN
* Add condition into "excerpt_more" filter to make sure it will not affect admin side
* Using `esc_url` + `home_url` instead of `get_home_url`

= 1.1.1 =
* Fixed, show mobile menu even if we didn't select menu

= 1.1.0 =
* Support custom body background color and image
* Support custom header color and header background image
* Change text-domain from "medm" to "mediumm"
* Fixed, un-scale featured image width
* Fixed, fluid width Youtube video embeds (iframe) in content
* Fixed, article category tag overflow (listing page)
* Fixed, mobile menu centering
* Fixed, Jetpack tiled gallery
* Fixed, text beside image should be float (single post)
* Fixed, text overflow on article's content (single post)
* Fixed, text overflow on article's summary (listing page)

= 1.0.5 =
* Fixed, minor error on PHP below 5.4

= 1.0.4 =
* Change PHP array syntax to support PHP below 5.4

= 1.0.3 =
* Fixed, document

= 1.0.2 =
* Refactor
* Update and fix css
* Implement webfontloader

= 1.0.1 =
* Fixed, build system

= 1.0.0 =
* First release

=== Contribute ===

1. Setup WordPress server
2. Install `Node.js`
3. Install NPM related: `npm install -g gulp bower yarn`
4. Install PHP related (install `phpcs` and `composer`)
5. Install [WordPress Coding Standards for PHP_CodeSniffer](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards)
6. Install dependencies: `yarn && bower install && composer install`
7. Test
  * Manual test layout
  * Build test: `gulp` without error
  * PHP Code style: `phpcs -p ./*.php --standard=ruleset.xml` without error

=== Checklist (development purpose) ===

* [x] Theme unit test: [wptest.io](http://wptest.io)
* [x] Page - [Home](http://localhost:3000)
* [x] Page - Archive: [Category](http://localhost:3000/category/content)
* [x] Page - Archive: [Tag](http://localhost:3000/tag/8bit)
* [x] Page - Archive: [Author](http://localhost:3000/author/joe)
* [x] Page - Archive: [Date](http://localhost:3000/2012/12)
* [x] Page - Singular: [Post](http://localhost:3000/image-alignment)
* [x] Page - Singular: [Page](http://localhost:3000/about)
* [x] Page - [Attachment](http://localhost:3000/photo-1428189923803-e9801d464d76)
* [x] Page - [Search](http://localhost:3000/?s=test)
* [x] Page - [404](http://localhost:3000/404)
* [x] Component: [Widget tested](http://localhost:3000/) by [Monster Widget](https://wordpress.org/plugins/monster-widget)
* [x] Component: Menu
* [x] Component: [WordPress Comment](http://localhost:3000/comments)
* [ ] Component: [More tag](http://localhost:3000/more-tag/) (optional)
* [ ] Component: [Paginated](http://localhost:3000/paginated/) (optional)
* [ ] Component: Stick `footer-info` at the bottom e.g. [404 page](http://localhost:3000/404) (optional)
* [x] Component: [Contact Form 7](http://localhost:3000/contact-page/)
* [x] Component: [Really Simple CAPTCHA](http://localhost:3000/contact-page/)
* [x] Component: [3rd party breadcrumb](http://localhost:3000/parent-page/child-page-03/grandchild-page/) by Yoast breadcrumbs and Breadcrumb NavXT
* [x] Vendor: [Theme Check](https://wordpress.org/plugins/theme-check), checked
* [x] Vendor: [Log Deprecated Notices](https://wordpress.org/plugins/log-deprecated-notices), checked
* [x] Vendor: [RTL Tester](https://wordpress.org/plugins/rtl-tester), checked
* [x] Vendor: Jetpack - [Tiled Galleries](http://localhost:3000/tiled-gallery/)
* [x] Screenshot
* [x] Customize

=== Browser compatibility ===

* Chrome
* Firefox
* IE 10+

=== Other versions ===

* [x] WordPress: [jojoee/medium-clone](https://github.com/jojoee/medium-clone)
* [x] Html: [jojoee/mediumm-template](https://github.com/jojoee/mediumm-template)
* [x] React: [jojoee/mediumm-react](https://github.com/jojoee/mediumm-react)
* [ ] Hexo

## Reference & Thank you

* Project template from [Koa WordPress theme](https://github.com/jojoee/wordpress-theme-koa)
