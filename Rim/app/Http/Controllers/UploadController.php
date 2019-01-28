<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;

use App\Product;

use App\ProductPhoto;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //


 
    public function uploadForm()
    {
        return view('upload_form');
    }
 
    public function uploadSubmit(Request $request)
    {
        // Coming soon...
         $product = Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            ProductPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
    }
}
