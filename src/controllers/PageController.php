<?php

namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\Models\Page;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
        echo $this->blade->render("home");

    }

    public function getShowPage()
    {
        // Extract page name to find what page their looking for via URL
        $browser_title = null;
        $page_content  = null;
        $url           = explode('/', $_SERVER["REQUEST_URI"]);
        $target        = $url[1];
        // Find matching page in DB
        $page = Page::where('slug', '=', $target)->get();
        // Lookup page information. Include content, browser title, etc.
        foreach ($page as $item) {
            $browser_title = $item->browser_title;
            $page_content  = $item->page_content;
        }

        if(strlen($browser_title == 0)){
            header("HTTP/1.0 404 Not Found");
            header("Location: /page-not-found");
            exit;
        }

        echo $this->blade->render('defaultpage', ["browser_title" => $browser_title, 'page_content' => $page_content]);

    }

    public function getShow404(){
        echo $this->blade->render('page-not-found');
    }

}
