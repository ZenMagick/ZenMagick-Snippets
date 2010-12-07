Examples of how to use/render ZenMagick theme templates inside a zencart template filer.

zm_view_in_zc_template
======================
Just render the required theme template by looking up the view for the the current request id.

Example zencart template file: tpl_index_default.php


zm_controller_in_zc_template
============================
Instantiate a controller first to get a fully populated view instance. This is required in cases
where the template expects certain model data as provided by the controller.

Example zencart template file: tpl_product_info_display.php


How to configure the zencart template / ZenMagick theme?
========================================================
zencart only uses the main theme id as configured in ZenMagick's theme admin page. Since a zencart template
is not a valid ZenMagick theme, ZenMagick will use the default theme, unless a variation theme is set up.
In the case of a theme variation configured, that will be used as theme for the ZenMagick side of the code and
the main theme by zencart.
