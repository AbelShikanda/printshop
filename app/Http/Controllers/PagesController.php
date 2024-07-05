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
     * FUnction to add to cart
     *
     * This function does the following:
     * - Step 1
     * - Step 2
     * - Step 3
     *
     * @param  Parameter type  Parameter name Description of the parameter (optional)
     * @return Return type Description of the return value (optional)
     */
    public function add_to_cart(Request $request) {
        // $products = Products::find($id);
        // $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);
        // $cart->add($products, $products->id);

        // $request->session()->put('cart', $cart);
        // return redirect()->route('addToCart');
        $pageTitle = 'Cart';
        $breadcrumbLinks = [
            ['url' => '/', 'label' => 'Home'],
            ['url' => '', 'label' => 'catalog detail'],
            ['url' => '', 'label' => 'cart'],
        ];
        return view('pages.cart', with([
            // 'title' => 'Catalog Detail',
            'pageTitle' => $pageTitle,
            'breadcrumbLinks' => $breadcrumbLinks,
        ]));
    }

    // public function getAddToCart(Request $request, $id)
    // {
    //     $products = Products::find($id);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($products, $products->id);

    //     $request->session()->put('cart', $cart);
    //     return redirect()->route('cart');
    // }

    // public function updateCart(Request $request, $id)
    // {
    //     $size = $request->size;
    //     $color = $request->color;
    //     $products = Products::find($id);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->update($products, $products->id, $size, $color);

    //     Session::put('cart', $cart);
    //     return redirect()->route('cart');
    // }

    // public function getReduceCart($id)
    // {
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->reduce($id);

    //     if (count($cart->items) > 0) {
    //         Session::put('cart', $cart);
    //     } else {
    //         Session::forget('cart');
    //     }


    //     return redirect()->route('cart');
    // }

    // public function deleteCart($id)
    // {
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->remove($id);

    //     if (count($cart->items) > 0) {
    //         Session::put('cart', $cart);
    //     } else {
    //         Session::forget('cart');
    //     }
    //     return redirect()->route('cart');
    // }

    // public function getCart()
    // {
    //     if (!Session::has('cart')) {
    //         return View('customers.pages.cart');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     return View('customers.pages.cart', [
    //         'products' => $cart->items,
    //         'totalPrice' => $cart->totalPrice,
    //         'shipping' => 300,
    //     ]);
    // }

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
