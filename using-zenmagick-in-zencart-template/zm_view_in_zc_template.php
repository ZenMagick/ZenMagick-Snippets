<?php

    /*
     * You can put this into any zencart template file to display a ZenMagick theme template.
     *
     * NOTE: This will only create/render a view. If the view template requires view data this
     * must either be provided manually or creation of the view should be done via the corresponding controller
     * (see: zm_controller_in_zc_template.php)
     */
    $view = ZMUrlManager::instance()->findView($request->getRequestId());

    // we want just the view content, not the whole page
    $view->setLayout(null);

    // set additional view data; in the template: echo $foo will output 'bar'
    $view->setVar('foo', 'bar');

    echo $view->generate($request);
    return;
