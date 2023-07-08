<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index(){
        $Agendas=Agenda::all();
        //DB::table('agendas')->get();
       // dd($Agendas);
        return View('Agenda.index',compact('Agendas'));
    }
    public function create(){

        return View('Agenda.create');
    }
    public function store(Request $request){

        $agenda=[
        'title'=>$request->title,
        'description'=>$request->description,
        'date'=>$request->date,
        ];
        Agenda::create($agenda);
        return redirect('/agenda');
    }
    public function delete($id){
        Agenda::find($id)->delete();
        /*DB::table('agendas')
        ->where('id',$id)
        ->delete();*/
        return redirect('/agenda');
    }
    public function edit($id){
        $agenda=Agenda::find($id);
        return View('Agenda.edit',compact('agenda'));
    }
    public function update(Request $request,$id){

        $agenda=[
        'title'=>$request->title,
        'description'=>$request->description,
        'date'=>$request->date,
        ];
        //Agenda::find($id)->update($agenda);
        DB::table('agendas')
        ->where('id',$id)
        ->update($agenda);

        return redirect('/agenda');
    }
}
