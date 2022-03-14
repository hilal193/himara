<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // store
    public  function  store(Request  $request,$id){
		$table = new  Comment();

        $table->article_id = $id;
        $table->name = $request->name;
        $table->email = $request->email;
        $table->website = $request->website;
        $table->commentaire = $request->commentaire;
        $table->photoProfil = "blog-post1.jpg";
        // dump("/images/blog/blog-post1.jpg");


		$table->save();
		return  redirect()->back();
	}
    // edit
    public  function  edit($id) {
        $edit = Comment::find($id);
        return  view ('pages.edit', compact("edit"));
    }
    // update
    public  function  update ($id, Request  $request) {
        $update = Comment::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->website = $request->website;
        $update->commentaire = $request->commentaire;
        $update->photoProfil = $request->photoProfil;
        $update->save();
        return  redirect("/");
    }

    // delete
    public function destroy($id){
		$destroy = Comment::find($id);
		$destroy->delete();
		return  redirect()->back();

	}
}
