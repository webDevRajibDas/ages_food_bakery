<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Modules\PhotoGallery\Models\PhotoGallery;


class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function productList()
    {
        return view('frontend.all_products');
    }

    public function contactPage()
    {
        return view('frontend.contact-us');
    }


    public function photoGallery()
    {
        $photos = PhotoGallery::all();
        return view('frontend.gallery.all_photos', ['photos' => $photos]);
    }


    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}
