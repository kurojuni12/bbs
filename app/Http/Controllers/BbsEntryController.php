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
    
    function create(Request $request){
        //@TODO 投稿処理を行う
 		$input = $request->only('author', 'title', 'body');
		
		$validatedData = $request->validate([
			'author' => 'required|string|max:30',
			'title' => 'required|string|max:30',
			'body' => 'required|string|max:255'
		]);
		//バリデーション失敗
		if($validator->fails()){
			return redirect('/')
       		->withErrors($validator);
		}
		
		$entry = new BbsEntry();
	    $entry->author = $input["author"];
	    $entry->title = $input["title"];
	    $entry->body = $input["body"];
	    $entry->save();

	    return redirect('/');
    }
}
