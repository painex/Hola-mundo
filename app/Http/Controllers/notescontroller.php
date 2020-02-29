<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;


class notescontroller extends Controller
{
    public function getIndex(){

    	//conseguir todas la notas
    	//query http_build_query(query_data)
    	$notes = DB::table('notes')->orderBy('id','desc')->get();
    	//var_dump($notas); esto muestra esos datos 
    	
    	/* probar directo del cotroller que funciona
    	foreach ($notas as $note) {
    		echo $note->title."<br>";
    	}
    	*/
    	return view('notes.index', array(
    		"notes" => $notes
    	));
    }
   public function getNote($id){
        //Conseguir una nota en concreto
        $note=DB::table('notes')->select('id','title','descripcion')->where('id',$id)->first();
        //var_dump($nota);
        if (empty($note)){
            return redirect()->action('notescontroller@getIndex');
        }
        return view('notes.note', array(
            'note'=>$note
        ));
    }
    public function postNote(Request $request){
        $note = DB::table('notes')->insert(array(
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion')
        ));
        return redirect()->action('notescontroller@getIndex');
    }
    public function getSaveNote(){
        return view('notes.saveNote');
    }
    public function getDeleteNote($id){
        //Eliminar una nota en concreto
        $note=DB::table('notes')->where('id',$id)->delete();
        //var_dump($nota);
        
        return redirect()->action('notescontroller@getIndex')->with('status','Nota borrada correctamente!!');
    }
    public function postUpdateNote($id, Request $request){
        $note=DB::table('notes')->where('id',$id)->update(array(
                'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion')
        ));
        return redirect()->action('notescontroller@getIndex')->with('status','Nota Actualizada correctamente!!');
    }
    public function getUpdateNote($id){
        $note=DB::table('notes')->where('id',$id)->first();
        return view('notes.saveNote', array(
                'note'=>$note
        ));
    }
}
