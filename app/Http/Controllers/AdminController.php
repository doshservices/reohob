<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use Resize;


use App\Models\Services;
use App\Models\Bookings;
use App\Models\Quotes;
use App\Models\Trainings;
use App\Models\Admin;


use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Order;
use App\Models\User;


use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Mail\NotifyAdminForTraining;
use App\Mail\NotifyTrainee;
use App\Mail\SendMail;

class AdminController extends Controller
{
    public function index() {

        // return "OMO";
        $orders = Bookings::orderBy('created_at', 'desc')->with('service')->get();
        return view('admin.orders', compact(['orders',]));  
    }

    public function categories()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(20);
        // return $categories;
        return view('admin.store.categories', compact(['categories']));     

    }

    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        return $category;
        // return view('admin.store.category', ['category' => $category]);   
    }

    public function edit_category($id)
    {
        $category = Category::where('id', $id)->first();
        // return $category;
        return view('admin.store.edit_category', ['category' => $category]);   
    }

    public function edit_category_post($id, Request $request) {

        $product = Category::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('success', 'Category Edited Successfully!');
        
    }

    public function addCategory(Request $request)
    {        
        $category = \App\Models\Category::create($this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category_id' => '',
        ]));

        return redirect()->back()->with('success', 'Category Added Successfully!');

    }

    public function remove_category(Request $request) {

        $product = Category::where('id',$request->id);
        $product->delete();

        return "Deleted";
        
    }


    public function products()
    {
        // $products = Product::orderBy('created_at', 'desc')->get();
        $products = Product::orderBy('name', 'asc')->get();
        return view('admin.store.products', ['products' => $products]);    

    }

    public function product($id)
    {
        $product = Product::where('sku', $id)->firstOrFail();
        // return $product;
        return view('admin.store.product', ['product' => $product]);    
    }

    public function createProduct()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.store.create_product', ['categories' => $categories]);
    }

    public function editProduct($id)
    {
        $product = Product::where('sku', $id)->firstOrFail();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.store.edit_product', ['categories' => $categories, 'product' => $product]);
    }


    public function remove_product(Request $request) {
        // return $request->id;


        $product = Product::where('id', $request->id);
        $product->delete();

        return "Deleted";

        // $image_path = public_path().'/images/apartments/'.$apartment->featured_img;  // Value is not URL but directory file path
        // if(\File::exists($image_path)) {
        //     \File::delete($image_path);
        // // return "deleted";
        // }
        
        // foreach (json_decode($apartment->image[0]->image_name) as $image) {
        //     $image_path = public_path().'/images/apartments/'.$image;  // Value is not URL but directory file path

        //     if(\File::exists($image_path)) {
        //         \File::delete($image_path);
        //     } 
        // }

        

        
    }
    

    public function editProductForm($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            // 'categories' => 'required',
            'amount' => 'required|Numeric',
            'description' => 'required',
            'quantity' => 'Numeric',
            // 'weight' => 'required',
        ]);

        $product = Product::where('sku', $id)->first();
        $product->name = $request->input('name');
        $product->price = $request->input('amount');
        $product->description = $request->input('description');
        //add exception for discount
        $product->quantity = $request->input('quantity');
        $product->save();

        if ($request->categories) {

            if ($product->categories) {
                foreach ($product->categories as $cate) {
                    $category = Category::find($cate->id);
                    $product->categories()->detach($category);
                }
            }

            $category = Category::find($request->input('categories'));
            $product->categories()->attach($category);

            
        }
        
        // $name = uploadImage($request, 'main_image', '/images/products/');
        if ($request->hasFile('main_image')) {
            
            $main_image = request()->file('main_image');

            $filename = $main_image;
        
            $m_img = rand(000000,999999).time();
            $ext = \File::extension($filename->getClientOriginalName());
             
            $name = $m_img.'.'.$ext;        
            $destinationPath = public_path('/images/products/');
                $m_img = \Resize::make($filename->path());
       
               $m_img->resize(750, 500, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);                

            $product->main_image = $name;

        }

        $product->save();
        
        if(request()->hasfile('images'))
        {

            $images = request()->file('images');

            foreach ($product->image as $image) {
                $image_path = public_path().'/images/products/'.$image;  // Value is not URL but directory file path

                $imageDelete = ProductImage::where('id', $image->id)->delete();
                if(\File::exists($image_path)) {
                    \File::delete($image_path);
                } 
                
            }
    
            foreach($images as $image){
            $filename = $image;
        
            $img = rand(000000,999999).time();
            $ext = \File::extension($filename->getClientOriginalName());
             
            $name = $img.'.'.$ext;        
            $destinationPath = public_path('/images/products/');
                $img = \Resize::make($filename->path());
       
               $img->resize(600, 400, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);


                    $file= new ProductImage;
                    $file->product_id = $product->id;
                    $file->image = $name;
                    $file->save();
                
           }

        }   

        // return redirect()->back();
        return redirect()->back()->with('success', 'Product Edited Successfully!');
    }

    public function createProductForm(Request $request)
    {

        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'categories' => 'required',
            'amount' => 'required|Numeric',
            // 'discount_amount' => 'required|Numeric',
            'description' => 'required',
            'quantity' => 'Numeric',
            // 'weight' => 'required',
        ]);
        


        $sku = rand(000000000,999999999).date("s");


        $product = new Product;
        $product->sku = $sku;
        $product->name = $request->input('name');
        $product->price = $request->input('amount');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->discount = 0;
        $product->save();


        #   associate the dish with all the cuisines
        $category = Category::find($request->input('categories'));
        $product->categories()->attach($category);
        
        // $name = uploadImage($request, 'main_image', '/images/products/');
        if ($request->hasFile('main_image')) {
            
            $main_image = request()->file('main_image');

            $filename = $main_image;
        
            $m_img = rand(000000,999999).time();
            $ext = \File::extension($filename->getClientOriginalName());
             
            $name = $m_img.'.'.$ext;        
            $destinationPath = public_path('/images/products/');
                $m_img = \Resize::make($filename->path());
       
               $m_img->resize(750, 500, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);                

            $product->main_image = $name;

        }

        $product->save();
        
        if(request()->hasfile('images'))
        {

            $images = request()->file('images');
            foreach($images as $image){
            $filename = $image;
        
            $img = rand(000000,999999).time();
            $ext = \File::extension($filename->getClientOriginalName());
             
            $name = $img.'.'.$ext;        
            $destinationPath = public_path('/images/products/');
                $img = \Resize::make($filename->path());
       
               $img->resize(600, 400, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);


                    $file= new ProductImage;
                    $file->product_id = $product->id;
                    $file->image = $name;
                    $file->save();
                
           }

        }     

        return redirect()->back();
        // return "E work oo";

    }



    public function orders()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.store.orders', ['orders' => $orders]);
    }


    public function order($id)
    {
        $order = Order::where('id', $id)->with('transaction')->firstOrFail();
        return view('admin.store.order', ['order' => $order]);   
    }


    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate(200);
        return view('admin.store.users', compact(['users']));
    }
    

    public function user($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('admin.store.user', compact(['user',]));   
    }






























    public function booking_orders() {

        $orders = Bookings::orderBy('created_at', 'desc')->with('service')->paginate(200);
        return view('admin.orders', compact(['orders',]));  
    }

    public function booking_order($id) {

        $order = Bookings::where('id', $id)->with('service')->firstOrFail();
        return view('admin.order', compact(['order',]));

    }

    public function quotes() {

        $quotes = Quotes::orderBy('created_at', 'desc')->with('service')->paginate(200);
        return view('admin.quotes', compact(['quotes',]));  
    }

    public function quote($id) {

        $quote = Quotes::where('id', $id)->with('service')->firstOrFail();
        return view('admin.quote', compact(['quote',]));

    }


    public function trainees() {

        $trainees = Trainings::orderBy('created_at', 'desc')->paginate(200);
        return view('admin.trainees', compact(['trainees',]));  
    }

    public function trainee($id) {

        $trainee = Trainings::where('id', $id)->firstOrFail();
        return view('admin.trainee', compact(['trainee',]));
          
    }


    public function send_message(Request $request) {

        $data = $request;
        try {
            Mail::to($request->email)->send(new SendMail($data));  

        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->back()->with('success', 'Mail sent successfully!');
    }


    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11', 'min:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:6'], 
        ]);

        
    }

    public function administrators() {

        $admins = Admin::orderBy('first_name', 'asc')->paginate(200);
        return view('admin.administrators', compact(['admins',]));  
        // return $admins;
    }

    public function administrator($id) {

        $admin = Admin::where('id', $id)->firstOrFail();
        return view('admin.administrator', compact(['admin',]));  

    }

    public function createAdministrator(Request $request) {

        $this->adminValidator($request->all())->validate();

        $phoneNo = substr($request['phone'], 1);
        
        $ngNumber = "";
        $ngNumber.= '234'.$phoneNo;
        
        $superAdmin = false;
        if( $request['is_super'] == "yes"){ $superAdmin = true;}
        
        $admin = Admin::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $ngNumber,
            'is_super' => $superAdmin,
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()->with('success', 'Admin created Successfully');


    }

    public function remove_admin(Request $request) {

        $admin = Admin::where('id',$request->id);
        $admin->delete();

        return "Deleted";       

    }

    public function adminLoginForm()
    {
        return view('admin.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // return $request;
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');

        }

        return back()->with('error', 'Invalid login details')->withInput($request->only('email', 'remember'));
    }

    public function change_password(Request $request) {
        
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        if (!Hash::check($request['current_password'], Auth::guard('admin')->user()->password)) {
            return redirect()->back()->with('error','The old password is incorrect.');
       }
   
        Admin::find(Auth::guard('admin')->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        
        return redirect()->back()->with('success', 'Password Updated!');

    }


    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/login/admin');
    }

}
