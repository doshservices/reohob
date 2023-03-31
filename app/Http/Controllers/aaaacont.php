<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use App\Image;
use App\User;
use App\Vendor;
use App\Logistic;
use App\Admin;
use App\Brand;
use App\Transaction;
use Auth;
use Resize;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCancelled;
use App\Mail\OrderShipped;
use App\Mail\OrderDelivered;




class AdminControl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $count_sales = \App\Transaction::sum('amount');
        $count_products = \App\ProductVariant::count();
        $count_messages = \App\Inbox::count();
        $count_vendors = \App\Vendor::count();
        $count_customers = \App\User::count();
        $logistics_fee = \App\Delivery::sum('amount');
        $orders = Order::orderBy('created_at', 'desc')->take(10)->get();

        return view('admin.index', compact(['count_sales','count_products','count_messages','count_vendors','count_customers','logistics_fee', 'orders']));
    }

    public function products()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(3)->get();

        return view('backend.products', ['products' => $products]);    

        // return $products->categories;
    }

    public function product($id)
    {
        $product = Product::where('sku', $id)->first();
        // return $product->image;
        
        return view('backend.product', ['product' => $product]);    

        // return $products->categories;
    }

    

    public function createProduct()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('backend.create_product', ['categories' => $categories]);
    }

    public function createProductForm(Request $request)
    {

        if ($request->input('discount') == "on") {

            $this->validate($request, [
                'name' => 'required',
                'categories' => 'required',
                'amount' => 'required|Numeric',
                'discount_amount' => 'required|Numeric',
                'description' => 'required',
                'quantity' => 'Numeric',
                // 'weight' => 'required',
            ]);

        }
        $this->validate($request, [
            'name' => 'required',
            'categories' => 'required',
            'amount' => 'required|Numeric',
            'description' => 'required',
            'quantity' => 'Numeric',
            // 'weight' => 'required',
        ]);

        // $service = User::find(auth()->user()->id);
        
        if ($request->input('discount') == "on" && $request->input('discount_amount') >= $request->input('amount')) {

        return redirect()->back()->with('Error', 'Discount amount cant be greater than initial amount!');
        // return "Discount amounc cant be greater than initial amount!";


        }
        //SKU create a random number and add the current second to it
        $sku = 'HSB'.rand(000000,999999).date("s");
        
        $product = new Product;
        $product->sku = $sku;
        $product->name = $request->input('name');
        $product->amount = $request->input('amount');
        $product->description = $request->input('description');
        //add exception for discount
        if ($request->input('discount') == "on") {
            # code...
            $product->discount_amount = $request->input('discount_amount');
            $product->discount = true;
        }
        $product->quantity = $request->input('quantity');
        $product->weight = $request->input('weight');
        $product->admin_id = Auth::guard('admin')->user()->id;
        $product->save();

        // many to many relationship
        // $category = Category::find([1, 3, 4]);
        $category = Category::find($request->input('categories'));
        $product->categories()->attach($category);


        if($request->hasfile('images'))
        {

            $this->validate($request, [
                'images' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:1048'
            ]); 

           foreach($request->file('images') as $image)
           {

            

            $img = rand(000000,999999).time();
            $ext = \File::extension($image->getClientOriginalName());
             
               $name = $img.'.'.$ext;   

               $destinationPath = public_path('/images/products/thumbnail/'.$product->name.'/');
               if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 666, true);
                }
               $img = Resize::make($image->path());
       
               $img->resize(150, 150, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);
       
          
       
               $destinationPath = public_path('/images/products/'.$product->name.'/');
       
               $image->move($destinationPath, $name);

               $data[] = $name;

           }
           
           
            $file = new Image;
            $file->product_id = $product->id;
            $file->images = json_encode($data);

            $file->save();

            $productimg = Product::where('id', $product->id)->first();
            $productimg->image_id = $file->id;
            $productimg->save();

        }


        return redirect()->back();
        // return redirect()->back()->with('success', 'Category Created Successfully!');

    }


    public function editProduct($id)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $product = Product::where('sku', $id)->first();

        return view('backend.edit_product', ['categories' => $categories, 'product' => $product]);
    }

    public function editProductForm($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'amount' => 'required|Numeric',
            'description' => 'required',
            'quantity' => 'Numeric',
            // 'weight' => 'required',
        ]);

        $product = Product::where('sku', $id)->first();
        $product->name = $request->input('name');
        $product->categories_id = $request->input('category');
        $product->amount = $request->input('amount');
        $product->description = $request->input('description');
        //add exception for discount
        $product->quantity = $request->input('quantity');
        $product->weight = $request->input('weight');
        $product->save();

        return redirect()->back();
        // return redirect()->back()->with('success', 'Category Created Successfully!');
    }

    public function deleteProduct(Request $request)
    {
        $product = Product::where('sku', $request['query'])->first();
        if ($product->isDeleted == false) {
            $product->isDeleted = true;
            $product->save();
        return \Response::json(['msg' => 'Product deleted Successfully']);

        }
       
        
        return \Response::json(['msg' => 'Product already deleted!']);
        // echo "Hello Daniel";
    }

    public function categories()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(20);
        return view('backend.categories', compact(['categories']));       
    }

    public function addCategory(Request $request)
    {        
        $category = \App\Category::create($this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category_id' => '',
        ]));

        if($request->hasfile('image') && request(['image' => 'required|image|mimes:jpeg,png,jpg,svg,jfif|max:1048']))
        {
            $img = rand(000000,999999).time();
            $ext = \File::extension($request->file('image')->getClientOriginalName());
             
            $name = $img.'.'.$ext;        
            $destinationPath = public_path('/images/categories/');
                $img = Resize::make($request->file('image')->path());
       
               $img->resize(600, 450, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$name);

            
        } 
        //upload banner
        if($request->hasfile('banner') && request(['banner' => 'required|image|mimes:jpeg,png,jpg,svg,jfif|max:1048']))
        {
            $img = rand(000000,999999).time();
            $ext = \File::extension($request->file('banner')->getClientOriginalName());
             
            $banner_image = $img.'.'.$ext;        
            $destinationPath = public_path('/images/categories/');
                $img = Resize::make($request->file('banner')->path());
       
               $img->resize(1650, 400, function ($constraint) {
       
                   $constraint->aspectRatio();
       
               })->save($destinationPath.'/'.$banner_image);

            
        } 

        $category->image = $name;
        $category->banner = $banner_image;
        $category->save();
        // return back();
        return redirect()->back()->with('success', 'Category Added Successfully!');
    }

    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.category', ['category' => $category]);   
    }

    public function editCategory($id, Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        $category = categories::where('id', $id)->first();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        if ($request->input('featured') == "on") {
            $category->top = true;
        }
        $category->save();

        return redirect()->back()->with('success', 'Category edited successfully!');

    }

    public function deleteCategory()
    {
        
    }

    public function orders()
    {
        
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', ['orders' => $orders]);     


        // return view('backend.products', ['products' => $products]);    
    }

    public function order($id)
    {
        $order = Order::where('id', $id)->with('transaction')->first();
        // return $order;
        return view('admin.orders.order', ['order' => $order]);   
    }

    public function acceptOrder(Request $request)
    {
        $order = Order::where('id', $request['id'])->firstOrFail();

        if ($order->status == 'pending') {
            $order->status = 'shipped';
            $order->save();

            // $details = OrderDetail::where('order_id',[$order->id])->update(['logistic_id'=> Auth::guard('logistic')->user()->id]);

            $data = $order;

            try {
                //code...
                Mail::to($data->email)->send(new OrderShipped($data));  

            } catch (\Throwable $th) {
                //throw $th;
            }

            //send sms to User
            try {

                //strip first 3 char from number
                $str = $order->user->phone;
                $old = substr($str, 3);

                $text = "Order no. ". $order->order_tracking ." has been shipped . Thanks for shopping on FoodsBOOX!";

                $number = '0'.$old;
                send_sms($number, $text);

            } catch (\Throwable $th) {
                //throw $th;
            }

        return \Response::json(['msg' => 'Order accepted successfully']);

        }
       
        
        return \Response::json(['msg' => 'Order already accepted!']);
    }

    public function confirmDelivery(Request $request)
    {
        $order = Order::where('id', $request['id'])->firstOrFail();

        if ($order->status == 'shipped') {
            $order->status = 'delivered';
            $order->save();

            // $details = OrderDetail::where('order_id',[$order->id])->update(['logistic_id'=> Auth::guard('logistic')->user()->id]);

            $data = $order;

            try {
                //code...
                Mail::to($data->email)->send(new OrderDelivered($data));  

            } catch (\Throwable $th) {
                //throw $th;
            }

            //send sms to User
            try {

                //strip first 3 char from number
                $str = $order->user->phone;
                $old = substr($str, 3);

                $text = "Order no. ". $order->order_tracking ." was delivered successfully. Thanks for shopping on FoodsBOOX!";

                $number = '0'.$old;
                send_sms($number, $text);

            } catch (\Throwable $th) {
                //throw $th;
            }
        return \Response::json(['msg' => 'Order delivered successfully']);

        }
       
        
        return \Response::json(['msg' => 'An eror has occured!']);
    }

    public function cancelOrder(Request $request)
    {
        $order = Order::where('id', $request['id'])->first();

        if ($order->status !== 'cancelled') {
            $order->status = 'cancelled';
            $order->save();

            $data = $order;

            try {
                //code...
                Mail::to($data->email)->send(new OrderCancelled($data));  

            } catch (\Throwable $th) {
                //throw $th;
            }

            //send sms to User
            try {

                //strip first 3 char from number
                $str = $order->user->phone;
                $old = substr($str, 3);

                $text = "Order no. ". $order->order_tracking ." is cancelled! check your email for more info. Thanks for shopping on FoodsBOOX!";

                $number = '0'.$old;
                send_sms($number, $text);

            } catch (\Throwable $th) {
                //throw $th;
            }
        return \Response::json(['msg' => 'Order cancelled successfully']);

        }
       
        
        return \Response::json(['msg' => 'Order already cancelled!']);
    }

    public function editOrder()
    {
        
    }

    public function transactions()
    {
        
    }

    public function editTransaction()
    {
        
    }

    public function store_user(Request $request)
    {
        $user = $request->validate(['first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:11', 'min:11'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'] ] );
        $user['password'] = \Hash::make($request->password);
        \App\User::create($user);
        return back();
    }

    public function userOrders($id)
    {
        $orders = Order::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', ['orders' => $orders]);   
    }

    public function userTransactions($id)
    {
        $transactions = Transaction::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('backend.transactions', ['transactions' => $transactions]);  
    }

    public function deactivateUser($id, Request $request)
    {
        // return $request;
        $user = User::where('id', $id)->firstOrFail();
        // $user->deactivationReason = $request->input('reason');
        // $user->isDeactivated = true;
        // $user->save();

        // // return redirect()->back()->with('success', 'User suspended successfully!');

        if ($user->isDeactivated == false) {
            $user->isDeactivated = true;
            $user->deactivationReason = $request->input('reason');
            $user->save();
        return redirect()->back()->with('success', 'User suspended successfully!');


        }
       
        return redirect()->back()->with('error', 'User already suspended!');
        // return "Alaye Jor Jor Jor!!!";
       

    }

    public function editUser()
    {
        
    }

    protected function vendorValidator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11', 'min:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'password' => ['required', 'string', 'min:6', 'confirmed'], 
        ]);

        
    }

    public function store_vendor(Request $request)
    {
        $this->vendorValidator($request->all())->validate();

        $phoneNo = substr($request['phone'], 1);
        
        $ngNumber = "";
        $ngNumber.= '234'.$phoneNo;

        $vendor = Vendor::create([
            'contact_first_name' => $request['first_name'],
            'contact_last_name' => $request['last_name'],
            'email' => $request['email'],
            'mobile' => $ngNumber,
            'is_approved' => false,
            'password' => Hash::make($request['password']),
        ]);
        return back();
    }

    public function store_logistic(Request $request)
    {

        $this->validate($request, [
            'company' => 'required|string||max:125',
            'first_name' => 'required|string||max:60',
            'last_name' => 'required|string||max:60',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required|string|min:11||max:11',
            'contact_phone' => 'required|string|min:11||max:11',
            'email' =>  'required|email|string|email|max:255|unique:logistics',
            'password' => ['required', 'string', 'min:6', 'confirmed'], 
            
            
        ]);

        $phoneNo = substr($request['phone'], 1);
        
        $ngNumber = "";
        $ngNumber.= '234'.$phoneNo;

        $phone = substr($request['contact_phone'], 1);
        $contact_phone = "";
        $contact_phone.= '234'.$phone;

        $vendor = Logistic::create([
            'company' => $request['company'],
            'contact_first_name' => $request['first_name'],
            'contact_last_name' => $request['last_name'],
            'email' => $request['email'],
            'city_id' => $request['city'],
            'state_id' => $request['state'],
            'mobile' => $ngNumber,
            'contact_mobile' => $contact_phone,
            'is_approved' => true,
            'password' => Hash::make($request['password']),
        ]);
        
        return back();
    }


    function vendor_products($id)
    {
        #   load parameters for creating a product
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::where('vendor_id', $id)->get();
        return view('admin.products.index', compact(['brands', 'categories', 'products']));
    }


    public function allAdmins()
    {
        $admins = Admin::all();

        return view('admin.admins', compact(['admins']));
    }
    
    public function showAdmin($id)
    {
        $admin = Admin::where('id', $id)->firstOrFail();
        return view('admin.admin_details', compact(['admin',]));   
    }

    public function store_admin(Request $request)
    {
        $admin = $request->validate(['first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'mobile' => ['required', 'string', 'max:11', 'min:11'],
        'department' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
        'password' => ['required', 'string', 'min:6',] ] );
        $admin['password'] = \Hash::make($request->password);
        \App\Admin::create($admin);
        return back()->with('success', 'Admin Created Successfully!');
    }
    

    public function login_view() {
        return view('backend.login');
    }

    public function search(Request $request) {
        
        $searchTerm = $request->parameter;
        $users = User::query() 
            ->where('email', 'LIKE', "%{$searchTerm}%") 
            ->orWhere('first_name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('last_name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('phone', 'LIKE', "%{$searchTerm}%")
            ->orderBy('first_name', 'asc')->paginate(20);

            
        // return $products;
        return view('admin.users.index', compact(['users',]));
    }

   

    public function admin_login(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // The user is active, not suspended, and exists.
            //     return redirect()->intended('dashboard');
        return redirect('/admin/dashboard')->with('success', 'Welcome Back!');
        
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials!');
        }
    }

    public function admin_logout() {
        return redirect('/login/admin')->with(Auth::guard('admin')->logout());
    }




}
