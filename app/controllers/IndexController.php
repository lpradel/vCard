<?php


class IndexController extends BaseController {

    protected $layout = 'layouts.master';

    public function indexAction() {
        App::setLocale("en");

        if (Input::get("lang") === "de") {
            App::setLocale("de");
        }

        $this->layout->content = View::make("index");
    }
} 