<?php

namespace App\Http\Controllers;
use App\Models\ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listitem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return view('index', ["listItems" => ListItem::all()]);
    }
}