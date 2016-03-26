<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Session;

class LocaleController extends Controller
{
    /**
     * Updates the user's session to reflect their locale choice.
     *
     * @param $locale
     */
    public function setLocale($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
