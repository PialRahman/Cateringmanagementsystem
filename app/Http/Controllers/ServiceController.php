<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItems;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;

class ServiceController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function login(){
        
        return view('pages.login');
    }
     public function register(){
        return view('pages.register');
    }
     public function save(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
         ]);
        $user =new User;
        $user->name=$request->input('name');
        $user->email= $request->input('email');
        $user->password=Hash::make($request->input('password'));
        $save=$user->save();
        if($save){
            return back()->with('success','Registration Successful!');
        }
        else{
            return back()->with('fail','Failed to register!');
        }
    }
    public function admindashboardview(){
       $data=['Loggeduserinfo'=>User::where('id','=',session('LoggedUser'))->first()];
    return view('dashboardviews.admindashboardview',$data); 
    }
    public function dashboardviews(Request $request){
  

           // return $request->input();
            $request->validate([
              'name'=>'required',
              'password'=>'required',
            ]);

            $userinfo=User::where('name','=',$request->name)->first();
            
            if(!$userinfo) {
                return back()->with('fail','Wrong username or password');
                
            }
                else{
                if(Hash::check($request->password,$userinfo->password)){
                    $request->session()->put('LoggedUser',$userinfo->id);
                    if($request->name=='admin'){
                    return redirect('dashboardviews/admindashboardview');
                }
                else{
                    return redirect('dashboardviews/userdashboardview');
                }

                }
                    else{
                        return back()->with('fail','Wrong username or password');
                    } 
            
                    
            } 
        
    }
        public function userdashboardview(){
        $data=['Loggeduserinfo'=>User::where('id','=',session('LoggedUser'))->first()];
    return view('dashboardviews.userdashboardview',$data);
    }

    public function addfooditems(){
    	$fooditem = FoodItems::get(); 
    	return view('pages.addfooditems')->with('fooditem',$fooditem);
    }
    public function viewfoodmenuitems(){

        $fooditem = FoodItems::get();  
    	return view('pages.viewfoodmenuitems')->with('fooditem',$fooditem);

    }
    public function addfoodmenuitems(Request $request){

    	$request->validate([
    		'name'=>'required',
    		'image'=>'required',
    		'description'=>'required',
    		'price'=>'required',
    		'quantity'=>'required',

    	]);
    	$fooditem = new FoodItems;
    	$fooditem->name = $request->input('name');
    	if($request-> hasfile('image')){
       $file=$request->file('image');
       $extension=$file->getClientOriginalExtension();
       $filename= time().'.'.$extension;
       $file->move('uploads/fooditems/',$filename);
       $fooditem->image= $filename; 
    }
    else{
        return $request;
        $fooditem->image='';
    }
    $fooditem->description = $request->input('description');
    $fooditem->price = $request->input('price');
    $fooditem->quantity = $request->input('quantity');
    $fooditem->save();
    return back()->with('success','New Food Items has been added!');

    }
    public function fooditemsdetails($id){
        $fooditem= FoodItems::find($id);
       return view('pages.fooditemsdetails',['fooditem'=>$fooditem]);
    }
     public function fooditemsstore(Request $request){
       
      $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',


        ]);
        $orderedfooditem = new Order;
        $orderedfooditem->name = $request->input('name');
        $orderedfooditem->description = $request->input('description');
        $orderedfooditem->price = $request->input('price');
        $orderedfooditem->quantity = $request->input('quantity');
        $orderedfooditem->save();
        return back()->with('success','Order has been placed!');
        

    }
    public function vieworderedfooditems(){
         $orderedfooditem = Order::get(); 
        
        // $cart = Cart::content();
        return view('pages.vieworderedfooditems')->with('orderedfooditem',$orderedfooditem);
    }
    public function search(){
        $search_text= $_GET['query'];
        $fooditem=FoodItems::where('name','LIKE', '%'.$search_text.'%')->get();
        return view('pages.search',compact('fooditem'));
      
    }

}
