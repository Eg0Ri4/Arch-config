<?php

namespace App\Http\Controllers;
use App\ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        //\Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->listitem;
        $newListItem->iscomplete = 0;
        $newListItem->save();
        return view('index');
    }
}
