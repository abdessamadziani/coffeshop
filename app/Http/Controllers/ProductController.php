<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
         $produits=Product::all();
       return view('dashboard', compact('produits'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admins.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required|max:12|min:4',
            'prix'=> 'required',
            'img'=> 'required',
            'description'=> 'required|max:30|min:4'
        ]);

        if($request->has('img')){
            $file=$request->img;
            $imagename =time().''.$file->getClientOriginalName();
            $file->move(public_path('imgs'),$imagename);
        }


            $product=new product();
            $product->titre=$request->titre;
            $product->prix=$request->prix;
            $product->description=$request->description;
            $product->product_photo_path=$imagename;
            $product->save();
            return redirect()->route('dashboard')->with(['msg'=>'product added successfully !!']);



        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function welc()
    {
        $produits=Product::all();
        return view('welcome', compact('produits'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=product::find($id);
        return view('admins.edit')->with(['product'=>$product]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $request->validate([
            'titre'=> 'required|max:12|min:4',
            'prix'=> 'required',
            'description'=> 'required|max:30|min:4'
        ]);
        //
        $id=$request->id;
        $product=product::find($id);

        if($request->has('img')){
            $file=$request->img;
            $imagename =time().''.$file->getClientOriginalName();
            $file->move(public_path('imgs'),$imagename);
            $product->product_photo_path=$imagename;

        }

            $product->titre=$request->titre;
            $product->prix=$request->prix;
            $product->description=$request->description;
            $product->product_photo_path= $product->product_photo_path;
            $product->update();
            return redirect()->route('dashboard')->with(['msg'=>'product updated successfully !!']);





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=$request->id;
        $product=product::find($id);
        $product->delete();
        return redirect()->route('dashboard')->with(['msg'=>'product deleted successfully !!']);


    }
}
