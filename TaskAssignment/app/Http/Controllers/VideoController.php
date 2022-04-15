<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Videolist;

class VideoController extends Controller
{
   public function index(){

    $vidoes=Videos::all();
      return view('categories.index',['vidoe'=>$vidoes]);

   }
   public function new(){
       return view('categories.new');

   }
   public function store(Request $request){
    
    $video=new Videos;
    $video->name = $request->videoname;
    $video->description = $request->videodesc;

    $video->save();

    return redirect('/');
}

public function edit($id){
    $videos=Videos::where('id',$id)->first();

    return view('categories.edit',['video'=>$videos]);

}

public function update(Request $request,$id){

    $videos=Videos:: where('id',$id)->first();
    $videos->name=$request->videoname;
    $videos->description=$request->videodesc;

    $videos->save();

    return redirect('/');
}
public function destroy($id){

    $videos=Videos::whereId($id)->first();

    $videos->delete();

    return redirect('/');


}


public function show($id){
    $video= Videolist::all();
 return view('categories.show',['video'=>$video]);

}

   
}
