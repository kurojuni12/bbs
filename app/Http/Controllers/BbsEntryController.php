<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbsEntry; // 正しい名前空間でモデルをインポート
use Validator;

class BbsEntryController extends Controller
{
   function index(){
        //@TODO 投稿一覧画面を表示
		$item_list = BbsEntry::orderBy("id", "desc")->get();
		return view("bbs_entry_list", [
			"item_list" => $item_list
		]);    
       
   }
   
    public function show(BbsEntry $bbsEntry)
    {
        return view('show')->with(['bbsEntry' => $bbsEntry]);
    }
    
    function create(Request $request)
    {
        // 投稿処理を行う
        $validatedData = $request->validate([
            'author' => 'required|string|max:30',
            'title' => 'required|string|max:30',
            'body' => 'required|string|max:255'
        ]);

        $entry = new BbsEntry();
        $entry->author = $validatedData["author"];
        $entry->title = $validatedData["title"];
        $entry->body = $validatedData["body"];
        $entry->save();

        return redirect('/');
    }
    
    public function delete(BbsEntry $bbsEntry)
	{
		$bbsEntry->delete();
		return redirect('/');
	}

}
