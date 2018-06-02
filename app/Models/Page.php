<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
	use CrudTrait;

	const ERROR_SLUG = 'error';

	/**
	 * return page object by slug
	 * @param string $slug
	 *
	 * @return Page
	 */
	public static function searchPage( string $slug ) : Page {

		$page = Page::where( 'slug', $slug )->first();

		if($page == null){
			return Page::where('slug', self::ERROR_SLUG)->first();
		}

		return $page;
	}
}
