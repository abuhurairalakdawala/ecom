<?php

namespace Abu\Ecommerce\Controllers;

use App\Http\Controllers\Controller;

class Category extends Controller {
	public function index()
	{
		return view('v::categories.index');
	}
}