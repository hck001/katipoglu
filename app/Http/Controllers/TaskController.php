<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
 
function store(Request $request)
{
		$urunfiyat=$request->fiyat;
			$tlfiyat=$urunfiyat*0.52;
					return "ürünün tl fiyatı ". $tlfiyat."<br>";
}
	function hesapla($urunfiyat){


	}



}
