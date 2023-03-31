<?php

    function getCategories() {
        $categories = App\Category::orderBy('created_at', 'desc')->get();
        return $categories;
    }

    function get_attributes() {
        $attr = App\Attribute::orderBy('created_at', 'desc')->get();
        return $attr;
    }
    function getStates() {
        $states = App\State::orderBy('name', 'asc')->get();
        return $states;
    }

    function getVendors() {
        $vendors = App\Vendor::orderBy('shop_name', 'asc')->get();
        return $vendors;

    }

    function getVAT($amount)
    {
        
        $percentage = 7.5;

        $vat = ($percentage / 100) * $amount;

        return $vat;

    }

    function userPreference() {

        if (auth()->user()) {
            #   fetch the preference based on the user id
            $preference = \App\Preference::where(['user_id' => auth()->user()->id,])->orWhere('cookie_id', Cookie::get('cookie_id'))->first();
            
            // $preference = DB::table('preferences')
            //     ->where('user_id', auth()->user()->id)
            //     ->orWhere('cookie_id', Cookie::get('cookie_id'))
            //     ->first();
        } 
        #   else if the user is not authenticated but has cookies
        elseif (Cookie::get('cookie_id')) {
            # fetch the preference using cookies
            $preference = \App\Preference::where(['cookie_id' => Cookie::get('cookie_id')])->first(); 
        } else {
            $preference = null;
        }
        return $preference; 
    }

    // calculate difference between 2 location
    function distance_between($start, $end) {
        $origin = $start.' abuja';
        $destination = $end.' abuja';

        // In metric unit. This is default
        $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyBIaentMyYXdM7I4mJg9yDuaLgdn4VHcrI');
        $distance_arr = json_decode($distance_data);

        if ($distance_arr->status=='OK') {
            $destination_addresses = $distance_arr->destination_addresses[0];
            $origin_addresses = $distance_arr->origin_addresses[0];
        } else {
            return "invalid Request";
        // echo "<p>The request was Invalid</p>";
        // exit();
        }
        if ($origin_addresses=="" or $destination_addresses=="") {
            // echo "<p>Destination or origin address not found</p>";
            return "address not found";
        }

        // Get the elements as array
        $elements = $distance_arr->rows[0]->elements;

        
        return $distance = ceil($elements[0]->distance->value / 1000);
    }

    function fee_calculator($distance) {

        switch(true) {
            case in_array($distance, range(0,10)): //the range from range of 0-10
                return 600;
            break;
            case in_array($distance, range(11,20)):
               return 800;
            break;
            case in_array($distance, range(21,25)):
                return 1000;
             break;
             case in_array($distance, range(26,30)):
                return 1500;
             break;
             case in_array($distance, range(31,35)):
                return 2000;
             break;
             case in_array($distance, range(36,40)):
                return 2500;
             break;
             case in_array($distance, range(41,45)):
                return 3000;
             break;
             case in_array($distance, range(46,50)):
                return 3500;
             break;
             default:
                return 3500;
         }

    }
    function getCart()
    {
        $cart = array();
        #   if the user is authenticated
        if (auth()->user()) {
            #   fetch the cart based on the user id
            $cart = \App\Cart::where(['user_id' => auth()->user()->id,])->orWhere('cookie_id', Cookie::get('cookie_id'))->get();
        } 
        #   else if the user is not authenticated but has cookies
        elseif (Cookie::get('cookie_id')) {
            # fetch the cart using cookies
            $cart = \App\Cart::where(['cookie_id' => Cookie::get('cookie_id')])->get(); 
        } 
        return $cart; 
    }

    function send_mail() 
    {
        
    }

    function renderCurrency($currency = '')
    {
        $currency = ($currency == '') ? getSetting('currency') : $currency;
        return \App\Currency::find($currency)->render;
    }

    function get_annual_user_signup_trend($year = '')
    {
        ($year != '' && strlen($year) == 4 && is_numeric($year)) ? $year : date('Y');
        $result = array();
        for($i=1; $i<=12; $i++)
        {
            $month = (strlen($i) == 1) ? "0".$i : $i;
            $trend = \App\User::where('created_at', 'like', "%".$year."-".$month."-%")->count();
            $result[$i] = $trend;
        }
        return implode(", ", $result);
    }

    function get_annual_sales_trend($year = '')
    {
        ($year != '' && strlen($year) == 4 && is_numeric($year)) ? $year : date('Y');
        $result = array();
        for($i=1; $i<=12; $i++)
        {
            $month = (strlen($i) == 1) ? "0".$i : $i;
            $trend = \App\Order::where('paid', '=', true)->where('created_at', 'like', "%".$year."-".$month."-%")->count();
            $result[$i] = $trend;
        }
        return implode(", ", $result);
    }

    function get_annual_orders_trend($year = '')
    {
        ($year != '' && strlen($year) == 4 && is_numeric($year)) ? $year : date('Y');
        $result = array();
        for($i=1; $i<=12; $i++)
        {
            $month = (strlen($i) == 1) ? "0".$i : $i;
            $trend = \App\Order::where('created_at', 'like', "%".$year."-".$month."-%")->count();
            $result[$i] = $trend;
        }
        return implode(", ", $result);
    }

    function getSetting($setting)
    {
        return App\AppSetting::where(['setting' => $setting])->first()->value;
    }

    function check_vat($id)
    {
        return App\Product::where(['id' => $id])->first()->vat;
    }

    function getCategoryLevel($id)
    {
        $i = 0;

    }

    function getParentCategory($id)
    {
        while($id != NULL)
        $id =  App\Category::where(['id' => $id])->first()->category_id;
    }

    function uploadImage($request, $image_name, $file_destination, $file_dimension = ['height' => 600, 'width' => 'auto'])
    {
        if($request->hasfile($image_name) && $request->validate([$image_name => 'required|image|mimes:jpeg,png,jpg,svg,jfif|max:1048']))
        {
            $img = rand(000000,999999).time();
            $ext = \File::extension($request->file($image_name)->getClientOriginalName());

            $name = $img.'.'.$ext;
            $destinationPath = public_path($file_destination);
                $img = \Resize::make($request->file($image_name)->path());

               $img->resize($file_dimension['height'], $file_dimension['width'], function ($constraint) {

                   $constraint->aspectRatio();

               })->save($destinationPath.'/'.$name);

            return $name;
        }
        return NULL;
    }

    function uploadImages($request, $image_name, $file_destination, $file_dimension = ['height' => 600, 'width' =>'auto' ])
    {
        // if($request->hasfile($image_name) && $request->validate([$image_name => 'required|image|mimes:jpeg,png,jpg,svg|max:1048']))
        // {
            $img = rand(000000,999999).time();
            $ext = \File::extension($image_name->getClientOriginalName());

            $name = $img.'.'.$ext;
            $destinationPath = public_path($file_destination);
                $img = \Resize::make($image_name->path());

               $img->resize($file_dimension['height'], $file_dimension['width'], function ($constraint) {

                   $constraint->aspectRatio();

               })->save($destinationPath.'/'.$name);

            return $name;
        // }
        // return NULL;
    }


    function get_user_id()
    {
        $isGuest = true;
        #   if user is authenticated
        if (auth()->user()) {
            #   get the user reference
            $user_id = auth()->user()->id;
            $isGuest = false;
        }
        #   if the user is not authenticated but has cookies
        elseif (Cookie::get('cookie_id')){
            $user_id = Cookie::get('cookie_id');
        }
        #   else the user is not authenticated and has no cookies
        else{
            $length = 10;
            $value = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
            $name = 'cookie_id';
            $minutes = 2628000;
            Cookie::queue($name, $value, $minutes);
            $user_id = $value;
        }
        $output = new stdClass;
        $output->userId = $user_id;
        $output->isGuest = $isGuest;
        return $output;
    }

    // function addToCart($product_variant_id, $product_quantity, $user_id, $isGuest = false) {
        function addToCart($product_variant_id, $product_quantity, $user_id, $isGuest) {
        if($product_quantity)
        {
            $product_variant = \App\ProductVariant::findOrFail($product_variant_id);
            $price = $product_variant->price;
            $discount = $product_variant->discount;
            $vendor_id = $product_variant->product->vendor_id;
            $data = ['product_variant_id' => $product_variant_id, 'price' => $price, 'discount' => $discount, 'isGuest' => $isGuest, 'vendor_id' => $vendor_id,];

            switch($isGuest)
            {
                case true:
                    $data['cookie_id'] = $user_id;
                    $data['user_id'] = 0;
                    $where = ['cookie_id' => $user_id, 'product_variant_id' => $product_variant_id];
                    break;
                case false:
                    $data['cookie_id'] = null;
                    $data['user_id'] = $user_id;
                    $where = ['user_id' => $user_id, 'product_variant_id' => $product_variant_id];
                    break;
            }
            // added this bug_cavet because the system keeps adding an extra one to the quantity.
            $bug_cavet = $product_quantity - 1;
            $cart = \App\Cart::updateOrCreate($where, $data)->increment('quantity', $bug_cavet);

        }
    }

    function log_product_view($id)
    {
        $user = get_user_id();
        $data['is_guest'] = $user->isGuest;
        $data['user_id'] = $user->userId;
        $data['product_id'] = $id;
        $logged = \App\ProductView::create($data);
        return $logged;
    }

    function get_most_viewed_products($limit)
    {
        $records = DB::table('product_views')
        ->select('product_id', DB::raw('COUNT(id) as views'), 'user_id', 'isGuest')
        ->groupBy('product_id', 'user_id', 'isGuest')
        ->orderBy(DB::raw('COUNT(id)'), 'DESC')
        ->take(10)
        ->get();
        return $records;
    }

    function send_sms_alt($number, $text) {
        
        $message = $text;
        $senderid = 'FoodsBoox';
        $to = $number;
        $token = 'DKuQmkuZ4jzs5noC441jCeN8F4yPgrK57rA6ZaOjYCZjYeLXYFnk7LanGh5HDXIQzhIfH5mPyAnExYPS1Rr3c0a4rUo1nBXNCjcD';
        $baseurl = 'https://smartsmssolutions.com/api/json.php?';

        $sms_array = array 
        (
        'sender' => $senderid,
        'to' => $to,
        'message' => $message,
        'type' => '0',
        'routing' => 3,
        'token' => $token
        );

        $params = http_build_query($sms_array);
        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL,$baseurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $response = curl_exec($ch);

        curl_close($ch);

        // echo $response; // response code

    }

    function send_sms($number, $text) {

        $message = $text;
        $senderid = 'FoodsBoox';
        $to = $number;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.com.ng/sendsms.php?user=foodsboox&password=DavKen25112017*&mobile=".$to."&senderid=FoodsBoox&message=".urlencode($message)."&dnd=1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Cookie: a19e297f8b98fdc6db87cd4e2f62cd7c=0423602f1b74a86420786a3fc1bb9553"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;

    }

?>