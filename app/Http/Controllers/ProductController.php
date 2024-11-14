<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use Cloudinary\Cloudinary;

class ProductController extends BaseController
{
    protected $cloudinary;
    public function __construct()
    {
        $this->cloudinary = new Cloudinary(['cloud'=>[
            'cloud_name' => env('CLODUINARY_CLOUD_NAME'),
            'api_key' => env('CLODUINARY_API_KEY'),
            'api_secret' => env('CLODUINARY_API_SECRET'),
        ]]);
        $this->middleware(function ($request, $next) {
            if (!session('owner_logged_in')) {
                return redirect()->route('owner.login');
            }
            return $next($request);
        });
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'category' => 'required',
        ]);


        //handle image upload
        if($request->hasFile('image')){
            $imagePath = $this->cloudinary->uploadApi()->upload($request->file('image')->getRealPath(),[
                'folder' => 'indian-rexine-house',
            ])[ 'secure_url'];
        }

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
            'category' => 'required',
        ]);

        //handle image upload
        if($request->hasFile('image')){
            $imagePath = $this->cloudinary->uploadApi()->upload($request->file('image')->getRealPath(),[
                'folder' => 'indian-rexine-house',
            ])[ 'secure_url'];
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $imagePath ?? null,
        ]);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}