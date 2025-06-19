<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ItemController extends Controller
{
  public function showItemForm(): View
  {
    return view('itemForm');
  }

  public function storeItem(StoreItemRequest $request)
  {
    Item::create([
      'name' => $request->input('name'),
      'description' => $request->input('description'),
      'price' => $request->input('price'),
    ]);

    return redirect('/');
  }
}
