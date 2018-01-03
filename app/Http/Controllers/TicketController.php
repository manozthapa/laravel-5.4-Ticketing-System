<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Ticket; 
use Auth;
use App\Answer;
use DB;

class TicketController extends Controller
{
    public function ticketList(){
    	$tickets=Ticket::paginate(8);
        $answers=Answer::all();
    	return view('ticketList',compact('tickets','answers'));

    	
    }

    public function ticketNew(){
    	$categories=Category::all();

    	// $user=Auth::user();
    	// if($user){
    	// 	$loggedin=true;
    	// }else
    	// 	$loggedin=false;
    	// }
    	return view('ticketNew',compact('categories'));
    }

    public function saveTicket(request $request){
    	$ticket=new Ticket;
    	$ticket->title=$request['title'];
    	$ticket->category_id=$request['category_id'];
    	$ticket->description=$request['description'];
    	$ticket->user_id=1;
    	$ticket->save();
    	return redirect('/');
    }

    public function viewTicket($id){
    	$ticket=Ticket::find($id);
    	$answers=Answer::where('ticket_id',$id)->get();
    	
    	return view('viewTicket',compact('ticket','answers'));

    }

    public function search(Request $request){
        $results=DB::table('tickets')
        ->where('title','like',$request['q'].'%')
        ->orWhere('description','like','%'.$request['q'].'%')->get();
        return view('searchResult',compact('results'));
    }

}
