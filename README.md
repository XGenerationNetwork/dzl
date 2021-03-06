## **For more information and additional resources including recommended modules, example sites built on Dzl, please visit: [http://xgeneration.net/resources.html](http://xgeneration.net/resources.html)** ##

Drupal Dzl
============

Lightweight & flexible Bootstrap sub-theme for Drupal. Fork of Tweme by Anton Staroverov (drupal.tonystar.me/tweme) with major changes made to logo placement, UI adjustments & additional regions added for site building flexibility.


Installation
------------

1. Install [jQuery Update](https://www.drupal.org/project/jquery_update) module.
2. Go to **Configuration** > **Development** > **jQuery update**.
3. In the **Default jQuery Version** select the latest available version.
4. Install [Bootstrap](https://www.drupal.org/project/bootstrap) base theme [as usual](https://www.drupal.org/getting-started/install-contrib/themes).
5. Install [Dzl] Theme


Requirements
------------

* [jQuery Update](https://www.drupal.org/project/jquery_update)
* [Bootstrap](https://www.drupal.org/project/bootstrap) (base theme)

CSS3 Animated Blocks Enabled with jQuery scroll delay
------------
**NEW:** 
* Added Animate.css - http://daneden.me/animate & Modernizr http://modernizr.com (CDN version baked into html.php.tpl) an included javascript to enable scroll delay.

**TO USE** 
* Option 1 (very simple) Use the Block Class module - https://www.drupal.org/project/block_class and simply assign "animated choiceofanimation" (example: "animated shake") in the block CSS class.   
* Option 2 (more advanced) Assign the following code (class="revealOnScroll" data-animation="fadeInUp") to any element to trigger the desired animation (defined in data-animation="") on scroll. (Example: class="revealOnScroll" data-animation="bounce") 
* A full listing of all of the animations and demonstrations of their effects is available at => http://daneden.me/animate

Header Notes
------------

To use a background in the header region, please download and install the [Image Block] module (https://www.drupal.org/project/imageblock) then go to "Structure -> Blocks -> Add Image Block" and put the newly created Image Block in the "Header background" region. The background will show up when you place a block in the "Header" section, behind that content.

Additional Notes
------------

* The top "jumbotron" area is set to display if a block is placed within "header". If you would like a jumbotron on the front page, as a block and place it in this region and assign it to <front> only for visibility. 
* Note: If your site has a wider logo and / or wider Site Name / Site Slogan, you can swap out the "visible-sm" tag in page.tlp.php file from line 18 to line 6, enabling the vertical display which allows for more room for the "sm" size view.