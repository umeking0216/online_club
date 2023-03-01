<?php

namespace App\Http\Controllers;

use App\Models\community;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！
use Auth; //これが新規追加

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $communities = Community::where('user_id',Auth::id())->orderBy('created_at', 'asc')->get();
        return view('communities', [
            'communities' => $communities
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーション
    $validator = Validator::make($request->all(), [
         'item_name' => 'required|min:3|max:255',
         'item_number' => 'required|min:1|max:3',
         'item_amount' => 'required|max:6',
         'published'   => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $communities = new Community;
	  $communities->user_id = Auth::id();//ここを追加
	  $communities->item_name   = $request->item_name;
	  $communities->item_number = $request->item_number;
	  $communities->item_amount = $request->item_amount;
	  $communities->published   = $request->published;
	  $communities->save(); 
	  return redirect('/');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(community $community)
    {
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        return view('communitiesedit', ['community' => $community]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, community $community)
    {
             //バリデーション
         $validator = Validator::make($request->all(), [
             'id' => 'required',
             'item_name' => 'required|min:3|max:255',
             'item_number' => 'required|min:1|max:3',
             'item_amount' => 'required|max:6',
             'published' => 'required',
        ]);
        //バリデーション:エラー
         if ($validator->fails()) {
             return redirect('/communitiesedit/'.$request->id)
                 ->withInput()
                 ->withErrors($validator);
        }
        
        //データ更新
        $communities = Community::where('user_id',Auth::id())->find($request->id);
        $communities->item_name   = $request->item_name;
        $communities->item_number = $request->item_number;
        $communities->item_amount = $request->item_amount;
        $communities->published   = $request->published;
        $communities->save();
        return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(community $community)
    {
          $community->delete();       //追加
          return redirect('/');  //追加
    
    }
}
