<?php

    /*
     * You can put this into any zencart template file to display a ZenMagick theme template.
     *
     * Note: Since the controller's process method is called to get the view instance, the view
     * will be prepopulated with all data the eventual template file requires.
     */
    $controller = $request->getController();
    $view = $controller->process($request);

    // set additional view data; in the template: echo $foo will output 'bar'
    $view->setVar('foo', 'bar');

    // we want just the view content, not the whole page
    $view->setLayout(null); 

    echo $view->generate($request);
    return;
