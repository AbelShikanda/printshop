<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * function to display the information on the catalog page
     *
     * This function does the following:
     * - get data form the databese
     * - pass variable to the catalog page
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function catalog() {
        $pageTitle = 'Catalog';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'Catalog'],
        ];
        return view('pages.catalog', with([
            // 'title' => 'Blog Detail',
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }

    /**
     * function to display info on catalog_detail page
     *
     * This function does the following:
     * - get data from databese
     * - pass variables to the front
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function catalog_detail() {
        $pageTitle = 'Catalog Detail';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'catalog detail'],
        ];
        return view('pages.catalog_detail', with([
            // 'title' => 'Catalog Detail',
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }

    /**
     * function to display blog detail
     *
     * This function does the following:
     * - retireves data from the database
     * - displays the data on the blog
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function blog() {
        $pageTitle = 'blog';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'blog'],
        ];
        return view('pages.blog', with([
            // 'title' => 'Blog Detail',
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }

    /**
     * function to display info on blog single page
     *
     * This function does the following:
     * - retrieve data from the database
     * - pass data as variables to tne page
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function blog_single() {
        $pageTitle = 'Blog Single';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'blog single'],
        ];
        return view('pages.blog_single', with([
            //
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }

    /**
     * function for the contact page
     *
     * This function does the following:
     * - send email to the site
     * - store the message in the database
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function contact() {
        $pageTitle = 'Contact';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'Contact'],
        ];
        return view('pages.contact', with([
            //
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }
}
