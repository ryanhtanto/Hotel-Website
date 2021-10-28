<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Console;
use App\Models\Detail;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Psr\Http\Message\RequestInterface;

class ConsolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($console_name)
    {
        if($console_name == 'playstation'){
            $id_console = 1;
        } else if($console_name == 'nintendo'){
            $id_console = 2;
        } else{
            $id_console = 3;
        }
        $consoles = \App\Models\Console::where('id_category', $id_console)->get();
        return view($console_name, ['consoles' => $consoles, 'title' => ucfirst($console_name) , 'css' => 'category']);
    }

    public function detail($idConsole)
    {
        $console = Console::where('id_console', $idConsole)->first();
        if($console['id_category'] == 1){
            $category = 'Playstation';
        } else if($console['id_category'] == 2){
            $category = 'Nintendo';
        } else{
            $category = 'Xbox';
        }
        $games = Detail::where('id_console', $idConsole)->get();
        return view('detail', ['data_console'=>$console, 'games'=>$games, 'category' => $category, 'title' => 'Detail', 'css' => 'detail']);
    }

    public function addToCart(Request $request){
        if(session()->missing('user')){
            return back()->with('login_first', "You have to login to order an item!");
        }

        if(session()->has('cart')){
            foreach(session()->get('cart') as $item){
                if($item['id_console'] == $request->id_console){
                    return back()->with('duplicate', "You have already added a ".$request->console_name." to your cart!");
                }
            }
        }

        if($request->game1 == $request->game2){
            return back()->with('same_game', "Please select a different game!");
        }
        
        $request->session()->push('cart',$request->all());
        
        return redirect('cart');
        
    }

    public function remove(Request $request, $id){
        $cartRemove = $request->session()->pull('cart');
        $newCart = [];
        foreach($cartRemove as $item){
            if($item['id_console'] != $id){
                $request->session()->push('cart', $item);
            }
        }
        session()->forget('cart_total');
        return redirect('cart');
    }
    
}
