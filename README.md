# Modern Sherbet: A Modern WordPress Theme
Current Version 1.2

## About Modern Sherbet
Modern Sherbet is a modern twist on the taste design of sherbet. It’s bright and colourful! There’s animated button on hover; an animated header and meta ease in, there’s drop shadows (also known a box shadows) all around the theme.

The theme features shorcodes for toggles, tabs, buttons, and more. The theme is equipped with CSS for contact forms and Woocommerces. The theme features different styles for multiple post types which can be controlled in the WordPress Dashboard.

The CSS is commented at parts where you can change values in order to create your own spin on the design.

With version 1.1, I introduced a child theme with the purchases of the main theme! With the child theme I recommend that you inject all your customization’s into the style.css, function.php and other files into the that theme’s folder as it will keep those changes even when you update the main theme!

With version 1.1.1, I introduced theme options via. the Administration panel which can be found via. Appearance > modernSherbet. Here you may enter your header and footer settings and get useful resources such as the download link to the Child Theme and the Shortcode Plugin.

With version 1.1.2, I introduced theme/plugin updates! You may now update modernSherbert through the WordPress theme updater. In addition, you may update modernSherbert Shortcode through the WordPress plugin updater. This feature has been adapted from [plugin-update-checker](https://github.com/YahnisElsts/plugin-update-checker) by [YahnisElsts](https://github.com/YahnisElsts).

For support visit the [Donald Louch Productions Support Portal](https://dlproductions.freshdesk.com/) via. Freshdesk.

!!! IMPORTANT NOTE !!!

You will need to go to Settings > Discussion > Select “5” from the “Enable threaded (nested) comments levels deep” section + Select “5 | last | and newer” from the “Break comments into pages with top level comments per page and the page displayed by defaultComments should be displayed with the comments at the top of each page” section in order for the comment section to work properly.

From version 1.1 and above please note that shortcodes will be accessible via the modernSherbet Shortcode plugin which will be in the download zip file. You may also find the download link in the new (version 1.1.1 and above) administration panel!

## Documentation

Theme documentation available [here](http://sherbet.theme.donaldlouch.ca/documentation/).

## License

This theme is licensed under GNU General Public License v3 or later. You can feel free to modify it as long as you keep the original copyright information.

## Changelog
### Version 1.2 (Released on August 3rd, 2017 at 12:00PM)
I’m excited to announce that I have made some “small” but big changes in the styling of the theme! I have made a number of elements smaller, more responsive, and easier to see across all devices. I have also made videos more responsive across the theme with a new “Content Embed Shortcode”. There are now new format styles for single image, gallery, audio, and video formats; and for posts with no thumbnail. I have also included “current page/tab” indicators in the theme, so you can now tell what page your on. I have added a new style for tables.

Along with style and the “Content Embed Shortcode” I have also added a new “Video Title Shortcode” which will print video title credit which you enter manually. I further updated the “Columns Shortcode” and fixed the ID issue with singular ID codes.

Please make sure to read the documentation as there has been some major updates to the stylesheet in which is reflected within the documentation.

NEW
- Shortcode: Video Title
- Shortcode: Content Embed
- Style: Gallery Format
- Style: (Single) Image Format

Improvements:
- Shortcode: Column IDs
- Smaller CSS Design
- Style: Audio Format
- Style: Video Format
- Style: No Thumbnail Posts
- Table Design
- Better responsiveness for videos
  - In post
  - Tabs
  - Toggle
- Now you know what page you are on
- Now you know what tab you are on with the “Tabs” section
- Image Alignment
- More mobile responsive
- Cleaner Code

New/Updated Files:
- functions.php
- inc/templates/modernsherbet-settings.php
- NEW: single-gallery.php
- NEW: single-image.php
- style.css
- Updated File: modernsherbet-plugin.zip

### Version 1.1.2 (Released on July 26th, 2018 at 12:00PM)
Introducing Theme and Plugin updates via. [plugin-update-checker](https://github.com/YahnisElsts/plugin-update-checker) by [YahnisElsts](https://github.com/YahnisElsts). With this you will now be able to update the modernSherbet  theme, child theme, and shortcode plugin all from the comfort of your WordPress Dashboard. I have also updated the GNU license to version 3 or later. On the short(code) end of things I have introduced a new columns shortcode. I have mode more improvements within the code and styling; fixing the bug in-which displayed the DLP Gradient in the WordPress editor when creating new posts or pages. I also made the theme more responsive and consistent within browsers.

Please make sure to read the documentation as there has been some major updates to the stylesheet in which is reflected within the documentation.

NEW
- Updates Enabled
  - modernSherbert
  - modernSherbert Shortcode
  - modernSherbert Child
- Shortcode: Columns (2, 3, 4, 5, 1/3, 3/1, 1/2/1)
- Updated: GNU General Public License to Version 3

Improvements:
- Pagination Design
- Browser consistent: Search and Dropdown!
- Code on the video and audio format pages are more cleaner and aligned with the rest of the theme
- More responsive design
- Cleaner Code
- Fixed WP Dashboard Bug!

Updated Files:
- functions.php
- inc/cleanup.php
- inc/function-admin.php
- inc/modernsherbet.admin.css
- inc/templates/modernsherbet-settings.php
- single-audio.php
- single-video.php
- style.css
- NEW FOLDER: plugin-update-checker
- NEW FILE: LICENSE
- Updated File: modernsherbet-plugin.zip
- Updated File: modernsherbet-child.zip

### 1.1.1 (Released on July 19th, 2018 at 12:00PM)
Introducing a brand new administration panel with settings for the header and footer; along with helpful resources. In addition when a post has no thumbnail (also known as Featured Image) there is a new style that'll be added where it will remove the thumbnail area and just add the meta box along with the post. I have also made some improvements with the code and such.

Please make sure to read the documentation as there has been some major updates to the stylesheet in which is reflected within the documentation.

NEW
- Admin Panel
- New Design When There is No Thumbnail/Featured Image

Improvements:
- Pagination Improvements
- Documentation Update
- Change Log
- Cleaner Stylesheet Code
- Submenu Design

Updated Files:
- NEW: inc/function-admin.php
- NEW: inc/modernsherbet.admin.css
- NEW: inc/templates/modernsherbet-settings.php
- footer.php
- functions.php
- header.php
- screenshot.png
- single.php
- style.css

### 1.1 (Released on July 11th, 2018 at 12:00PM)
Introducing: modernSherbet Child: A child theme for customization's. Plus the following to the main theme:

NEW!:
- Shortcode: No Break
- Child Theme: Included

Improvements:
- WooCommerce's
- "Attachment Page"
- Comments
  - Note added to documentation: Issue is within with in WP settings!
- Sidebar
- Pagination

Design Changes:
- Font Colour for Parts of Theme
- WooCommerce Design
- Attachment Page
- Author Page
- Sidebar Colour
- Table Colour
- More Responsive Design

New Design Element:
- Body Background

Comprehensive Documentation

Optimized Code

And general improvements!

Updated Files:
- NEW FILE: modernsherbet-child.zip
- archive.php
- attachment.php
- author.php
- comments.php
- functions.php
- header.php
- inc/shortcodes.php
- index.php
- sidebar.php
- style.css

### 1.0 (Released on June 20th, 2018 at 12:00PM)

Initial Release

- All files updated
