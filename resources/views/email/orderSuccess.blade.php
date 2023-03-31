@extends('layouts.email')

@section('content')

<table align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0 30px;background-color: #fff;-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;margin-top: 30px;">
    <tbody>
        <tr>
            <td>
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left;margin-top: 30px;" width="100%">
                    <tr>
                        <td style="text-align: center;">
                            <img src="/public/images/email-temp/delivery-2.png" alt="" style=";margin-bottom: 30px;">
                        </td>
                    </tr>                            
                   <tr>
                        <td>
                            <p style="font-size: 14px;margin: 15px 0;"><b>Hi {{$data->user->first_name}} {{$data->user->last_name}},</b></p>
                            <p style="font-size: 14px;margin: 15px 0;">Order Successfully Processsed. Your Order Is On The Way,</p>
                            <p style="font-size: 14px;margin: 15px 0;">Order ID: <strong>{{$data->order_tracking}}</strong>,</p>
                        </td>
                    </tr> 
                </table>
               
                <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 10px;    margin-bottom: 10px;">
                        <tbody>
                            <tr>
                            <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                <h5 style="font-size: 16px;font-weight: 600;color: #000;line-height: 16px;padding-bottom: 13px;border-bottom: 1px solid #e6e8eb;letter-spacing: -0.65px;margin-top: 0;margin-bottom: 13px;text-align: left;">Your Shipping Address</h5>
                                <p style="text-align: left;font-weight: normal;font-size: 14px;color: #000000;line-height: 21px;margin-top: 0;margin: 15px 0;">{{$data->address->addresss ?? ''}}, {{$data->address->city->name ?? ''}}, {{$data->address->state->name ?? ''}},,<br> </p>
                            </td>
                            <td><img src="/public/images/email-temp/space.jpg" alt=" " height="25" width="30"></td>
                            <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                <h5 style="font-size: 16px;font-weight: 600;color: #000;line-height: 16px;padding-bottom: 13px;border-bottom: 1px solid #e6e8eb;letter-spacing: -0.65px;margin-top: 0;margin-bottom: 13px;text-align: left;">Your Billing Address:</h5>
                               <p style="text-align: left;font-weight: normal;font-size: 14px;color: #000000;line-height: 21px;margin-top: 0;margin: 15px 0;">{{$data->user->address1 ?? ''}}<br></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%;margin-bottom: 50px;margin-top: 30px;border: 1px solid #ddd;border-collapse: collapse;">
                    <tr align="left">
                        <th style="font-size: 16px;padding: 15px;text-align: center;background: #fafafa;">PRODUCT</th>
                        <th style="padding-left: 15px;font-size: 16px;padding: 15px;text-align: center;background: #fafafa;">DESCRIPTION</th>
                        <th style="font-size: 16px;padding: 15px;text-align: center;background: #fafafa;">QUANTITY</th>
                        <th style="font-size: 16px;padding: 15px;text-align: center;background: #fafafa;">PRICE </th>
                    </tr>
                    <?php $total = 0 ?>

                    @foreach ($data->orderdetail as $item)
                    <tr>                                
                        <td>
                            <img src="https://www.foodsboox.com/public/images/products/{{$item->product_variant->product->main_image ?? 'product.jpg'}}" alt="" width="80">
                        </td>
                        <td valign="top" style="padding-left: 15px;">
                            <h5 style="margin-top: 15px;color: #444;text-align: left;font-weight: 400;">{{$item->product_variant->product->description}} </h5>
                            <br>
                            <h5 style="margin-top: 15px;color: #444;text-align: left;font-weight: 400;">
                                <strong>{{$item->product_variant->sku ?? NULL}} </strong>
                            </h5>
                        </td>
                        <td valign="top" style="padding-left: 15px;">
                            {{-- <h5 style="font-size: 14px;color: #444;margin-top: 15px;margin-bottom: 0px;text-align: left;font-weight: 400;">Size : <span> L</span> </h5> --}}
                        <h5 style="font-size: 14px;color: #444;margin-top: 10px;text-align: left;font-weight: 400;">QTY : <span>{{$item->quantity}}</span></h5>                                    
                        </td>
                        <td valign="top" style="padding-left: 15px;">
                            <h5 style="font-size: 14px;color: #444;margin-top: 15px;text-align: left;font-weight: 400;"><b>&#8358;{{ number_format($item->price, 2)}}</b></h5>                  
                        </td>
                    </tr>
                    <?php $total += $item->price * $item->quantity ?>
                    @endforeach
                    
                    <tr class="pad-left-right-space " style="border: unset !important;">
                        <td class="m-t-5" colspan="2" align="left" style="padding: 5px 15px;">
                            <p style="font-size: 14px;margin: 0;">Subtotal : </p>
                        </td>
                        <td class="m-t-5" colspan="2" align="right" style="padding: 5px 15px;">
                            <b style="font-size: 15px;font-family: 'Roboto', sans-serif;">&#8358;{{ number_format($total, 2)}}</b>
                        </td>
                    </tr>
                    
                    <tr class="pad-left-right-space" style="border: unset !important;">
                        <td colspan="2" align="left" style="padding: 5px 15px;">
                            <p style="font-size: 14px;margin: 0;">VAT :</p>
                        </td>
                        <td colspan="2" align="right" style="padding: 5px 15px;">
                            @php
                                
                                $vat = $data->total - $data->delivery->amount - $data->subtotal - 100;

                            @endphp 

                            <b style="font-size: 15px;font-family: 'Roboto', sans-serif;">&#8358;{{ number_format($vat, 2)}}</b>
                        </td>
                    </tr>
                    <tr class="pad-left-right-space" style="border: unset !important;">
                        <td colspan="2" align="left" style="padding: 5px 15px;">
                            <p style="font-size: 14px;margin: 0;">Shipping Charge :</p>
                        </td>
                        <td colspan="2" align="right" style="padding: 5px 15px;">
                            
                            <b style="font-size: 15px;font-family: 'Roboto', sans-serif;">&#8358;{{ number_format($data->delivery->amount ?? 0, 2)}}</b>
                        </td>
                    </tr>
                    {{-- <tr class="pad-left-right-space" style="border: unset !important;">
                        <td colspan="2" align="left" style="padding: 5px 15px;">
                            <p style="font-size: 14px;margin: 0;">Discount :</p>
                        </td>
                        <td colspan="2" align="right" style="padding: 5px 15px;">
                           <b style="font-size: 15px;font-family: 'Roboto', sans-serif;"> $1000</b>
                        </td>
                    </tr> --}}
                    <tr class="pad-left-right-space " style="border: unset !important;">
                        <td class="m-b-5" colspan="2" align="left" style="padding: 5px 15px;">
                            <p style="font-size: 14px;margin: 0;">Total :</p>
                        </td>
                        <td class="m-b-5" colspan="2" align="right" style="padding: 5px 15px;">
                            <b style="font-size: 15px;font-family: 'Roboto', sans-serif;">&#8358;{{ number_format($data->total, 2)}}</b>
                        </td>
                    </tr>
                   
                </table>
                
            </td>
        </tr>
    </tbody>            
</table>

@endsection
