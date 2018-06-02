<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class DefaultController extends Controller {
	/**
	 * main page "/"
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index( Request $request ) {

		$slug = $request->path();

		return view( 'index.main' );
	}


	/**
	 * for all page in database
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function all( Request $request ) {

		$slug = $request->path();
		$page = Page::searchPage( $slug );

		return view( 'layouts.simple', compact( 'page' ) );
	}
}
