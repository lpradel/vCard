<?php


class LegalController extends BaseController {

    public function indexAction() {
        App::setLocale("en");

        if (Input::get("lang") === "de") {
            App::setLocale("de");
        }

        return View::make("legal");
    }
} 