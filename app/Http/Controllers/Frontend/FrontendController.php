<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Modules\PhotoGallery\Models\PhotoGallery;
use Modules\Product\Models\Product;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {

        $data['products'] = Product::all();
        return view('frontend.home', $data);
    }

    public function boardOfDirectors()
    {
        return view('frontend.board_of_directories');
    }


    public function companyOverview()
    {
        return view('frontend.company_overview');
    }


    public function managementTeam()
    {
        return view('frontend.management_team');
    }


    public function sustainabilityPage()
    {
        return view('frontend.sustainability');
    }


    public function productList()
    {
        return view('frontend.all_products');
    }

    public function contactPage()
    {
        return view('frontend.contact-us');
    }


    public function garmentsPage()
    {
        return view('frontend.concerns.garments');
    }

    public function textilesPage()
    {
        return view('frontend.concerns.textiles');
    }
    public function spinningMill()
    {
        return view('frontend.concerns.spinning_mill');
    }

    public function Accessories()
    {
        return view('frontend.concerns.accessories');
    }

    public function restaurantPage()
    {
        return view('frontend.concerns.restaurant');
    }

    public function commercialDevelopment()
    {
        return view('frontend.concerns.devlopment');
    }
    public function photoGallery()
    {
        $photos = PhotoGallery::all();
        return view('frontend.gallery.all_photos', ['photos' => $photos]);
    }

    public function certification()
    {
        return view('frontend.certification');
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
