<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//تعرض اللستة كامل 
    {
        //
        $data['products']=Product::all();
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//تنشأ طلب جديد
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//تستقبل الريكوست
    {
        //
        //$request->validate([
           // 'name' => 'required', 
            //'price' => 'required', 
            //'image_path'=>'required|mimes:jpg'
             
         //]);
         $record= new Product;
         $record->name= $request->name;
         $record->name_ar= $request->name_ar;
         $record->price= $request->price;
         $record->categroy_id= $request->categroy_id;
        //للرفع الصور و تخزينها
        if($request->hasFile('image'))
        {
            $photo=$request->file('image');
            $photo='uploads/products/'.time().'.'.$photo->extension();//احدد الباث اللي احفظه فيه و ما يفضل احطه فاضي يعني كذا الفببلك وحدة بدون ملف 
            $photo->move(public_path('uploads/products/'),$path);//اتأكد لازم انه نفس الباث بو فوق
            $record->image_path= $path;

        }
        //$image= $request->image_path;
        //$imageFileName= 'uploads/products/'.time() . '.' . $image->extension();
        //$image->move(public_path('uploads/products/'), $imageFileName);
        $record->save();
        return "recored added succussfully";
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//تفتح الفورم
    {
        //
        $data['product'] = Product::findOrfail($id);//الفايند و الفيل للسكيورتي’ عشان محد يغير باكر على كيفه لما يعطي الايدي
        return view('products.edit', $data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//تستقبل الريكوست
    {
        //

          //
        //$request->validate([
           // 'name' => 'required', 
            //'price' => 'required', 
            //'image_path'=>'required|mimes:jpg'
             
         //]);

         $record=  Product::findOrfail($id);
         $record->name= $request->name;
         $record->name_ar= $request->name_ar;
         $record->price= $request->price;
         $record->categroy_id= $request->categroy_id;
        
        

        //للرفع الصور و تخزينها
        if($request->hasFile('image'))
        {
            $photo=$request->file('image');
            $photo='uploads/products/'.time().'.'.$photo->extension();//احدد الباث اللي احفظه فيه و ما يفضل احطه فاضي يعني كذا الفببلك وحدة بدون ملف 
            $photo->move(public_path('uploads/products/'), $path);//اتأكد لازم انه نفس الباث بو فوق
            $record->image_path= $path;

        }
        //$image= $request->image_path;
        //$imageFileName= 'uploads/products/'.time() . '.' . $image->extension();
        //$image->move(public_path('uploads/products/'), $imageFileName);

        $record->save();
        return "recored updated succussfully";
        
    }

    /** 1
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//حذف البيانات ف اول شيء يجيبهن البيانات و بعدين يعلم لهن دليت
    {
        //
        $record=Product::findOrfail($id);
        $record->delete();
        return back();

    }
}
