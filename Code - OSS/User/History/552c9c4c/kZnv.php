<?php

namespace App\Http\Controllers;
use ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listitem;
        $newListItem->save();
        return view('index', ["listItems" => ListItem::all()]);
    }
}
