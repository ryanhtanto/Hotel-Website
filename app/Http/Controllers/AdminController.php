<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Console;
use App\Models\Order;
use App\Models\Game;
use File;


class AdminController extends Controller
{
    //admin homepage
    function index(){
        if(!session()->has('user')){
            return redirect('home');
        }
        if(session('user')->role == 'admin'){
            return view('admin.admin_home', ['title' => 'Admin Page', 'css' => 'admin']);
        } else{
            return redirect('home');
        }
    }

    //admin crud page (sesudah pilih kategori)
    function console_crud($id_category){
        if(!session()->has('user')){
            return redirect('home');
        }
        if(session('user')->role == 'admin'){
            $consoles = Console::where('id_category', $id_category)->get();
            if($id_category == 1){
                $category = "Playstation";
            } else if($id_category == 2){
                $category = "Nintendo";
            } else{
                $category = "Xbox";
            }
            return view('admin.admin_crud', ['title' => 'Admin Crud', 'css' => 'admin_crud', 'consoles' => $consoles, 'id_category' => $id_category, 'category' => $category]);
        } else{
            return redirect('home');
        }
    }

    //admin page untuk add console
    function console_add_index($id_category){
        if(session('user')->role == 'admin'){
            if($id_category == 1){
                $category = "Playstation";
            } else if($id_category == 2){
                $category = "Nintendo";
            } else{
                $category = "Xbox";
            }
            return view('admin.admin_add', ['title' => 'Add '.$category, 'css' => 'admin_add', 'id_category' => $id_category, 'category' => $category]);
        } else{
            return redirect('home');
        }
    }

    function console_add(Request $request){
        if(!session()->has('user')){
            return redirect('home');
        }
        if(session('user')->role != 'admin'){
            return redirect('home');
        }
        $request->validate([
            'console_name' => 'required',
            'id_category' => 'required',
            'harga' => 'required | numeric',
            'deskripsi' => 'required',
            'images' => 'required',
        ]);

        if($request->id_category == 1){
            $category = "Playstation";
        } else if($request->id_category == 2){
            $category = "Nintendo";
        } else{
            $category = "Xbox";
        }

        $console = new Console();

        $console->console_name = $request->input('console_name');
        $console->id_category = $request->input('id_category');
        $console->harga = $request->input('harga');
        $console->deskripsi = $request->input('deskripsi');
        $filename = $request->file('images')->getClientOriginalName();
        $console->images = $filename;
        $request->file('images')->move('images/'.$category, $filename);
        
        $console->save();
        
        return back()->with('success', "Items added into database!");
    }

    //fungsi untuk delete console
    function console_delete($id_console){
        $console = Console::find($id_console);

        if($console['id_category'] == 1){
            $category = 'Playstation';
        } else if($console['id_category'] == 2){
            $category = "Nintendo";
        } else{
            $category = "Xbox";
        }

        if(File::exists(public_path('images/'.$category.'/'.$console['images']))){
            File::delete(public_path('images/'.$category.'/'.$console['images']));
        }

        $console->delete();

        return back()->with('delete', 'Items has been deleted');
    }

    //admin page untuk edit console
    function console_edit_index($id_console){
        if(!session()->has('user')){
            return redirect('home');
        }
        if(session('user')->role == 'admin'){
            $console = Console::find($id_console);
            if($console['id_category'] == 1){
                $category = 'Playstation';
            } else if($console['id_category'] == 2){
                $category = "Nintendo";
            } else{
                $category = "Xbox";
            }
            return view('admin.admin_edit', ['title'=>'Edit '.$console['console_name'], 'css'=>'admin_add', 'data_console'=>$console, 'category'=>$category]);
        } else{
            return redirect('home');
        }
    }

    function console_edit(Request $request){
        $request->validate([
            'console_name' => 'required',
            'id_category' => 'required',
            'harga' => 'required | numeric',
            'deskripsi' => 'required',
            'images' => 'required'
        ]);

        $console = Console::find($request->id_console);

        if($console['id_category'] == 1){
            $category = 'Playstation';
        } else if($console['id_category'] == 2){
            $category = "Nintendo";
        } else{
            $category = "Xbox";
        }

        $console->console_name = $request->input('console_name');
        $console->id_category = $request->input('id_category');
        $console->harga = $request->input('harga');
        $console->deskripsi = $request->input('deskripsi');
        $filename = $request->file('images')->getClientOriginalName();
        
        if(File::exists(public_path('images/'.$category.'/'.$console['images']))){
            File::delete(public_path('images/'.$category.'/'.$console['images']));
        }
        
        $console->images = $filename;
        $request->file('images')->move('images/'.$category, $filename);

        $console->save();
        
        return back()->with('success', "Items Updated into database!");
    }

    //admin page untuk lihat order customer
    function order_index(){
        $orders = Order::all();
        return view('admin.customer_order', ['title' => 'Customer Order', 'css' => 'admin_crud', 'orders' => $orders]);
    }

    function change_status(Request $request, $id){
        $request->validate([
            'new_status' => 'required'
        ]);

        $order = Order::find($id);
        $order->status = $request->input('new_status');
        $order->save();
        return back();
    }

    //admin page untuk tambah game
    function addgame_index(){
        if(!session()->has('user')){
            return redirect('home');
        }
        if(session('user')->role == 'admin'){
            $consoles = Console::all();
            return view('admin.admin_addgame', ['title' => 'Add Game', 'css' => 'admin_add', 'consoles' => $consoles]);
        }
        return redirect('home');
    }

    function add_game(Request $request){
        $request->validate([
            'id_console' => 'required',
            'game_name' => 'required'
        ]);
        $games = new Game();
        $games->id_console = $request->input('id_console');
        $games->game_name = $request->input('game_name');
        $games->save();

        return back()->with('success', "Game has been successfuly added!");
    }
}
