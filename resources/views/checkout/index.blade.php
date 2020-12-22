@extends('layouts.products')
@section('content')


<div class="container" style="max-width: 960px; width: 100%; margin-top: 2%; margin-bottom: 2%">
    <h1>CHECKOUT</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SUB TOTAL</th>
                <th><?php echo number_format((float)$cart->getSubTotal(), 2, '.', ''); ?></th>
            </tr>
        </thead>
        <tbody>                
            <tr>
                <td>GST</td>
                <td>$<?php echo number_format((float)$cart->getGST(), 2, '.', ''); ?></td>
            </tr>
            <tr>
                <td>PST</td>
                <td>$<?php echo number_format((float)$cart->getPST(), 2, '.', ''); ?></td>
            </tr>
            <tr>
                <td>HST</td>
                <td>$<?php echo number_format((float)$cart->getHST(), 2, '.', ''); ?></td>
            </tr>                              
            <tr>
                <td>SHIPPING</td>
                <td>$0.00</td>
            </tr>
            <tr>
                <th>TOTAL</th>
                <th>$<?php echo number_format((float)$cart->getTotal(), 2, '.', ''); ?></th>
            </tr>
            <tr>
                <th colspan="2" style="color: #28a745">YOU WILL EARN {{$earned_points}} POINTS WITH THIS ORDER. YOU CAN USE THIS POINTS WITH YOUR NEXT PURCHASE</th>
            </tr>
            

        </tbody>
    </table>
    <div class="checkout_div">
        <div class="shipping_heading"><h2 class="responsive_header">Shipping and Billing Information</h2></div>
        <p>This information was generated automatically from the information you have saved in your profile
            Go ahead and change it to something else for this order, if you want to make changes on this page.
            If you would like to change the address that is permanently saved in your profile, please visit your <a href="/profile">profile page</a>.</p>
            <hr />       
            <form style="width: 100%"  action="/checkout" method="post">
               @csrf 
               <h6>Shipping Address:<span class="required">&ast;</span></h6>
               <input class="form-control" type="text" name="shippingAddress" id="shippingAddress" style="width: 100%" value="{{$shippingAddress->address1.' ' .$shippingAddress->address2.' ' .$shippingAddress->city.' '.$shippingProvince->name.' ' .$shippingAddress->country. ' ' .$shippingAddress->postal  }}"/>
               
                <h6>Billing Address:<span class="required">&ast;</span></h6>
                <input class="form-control" type="text" name="billingAddress" id="billingAddress" style="width: 100%" value="{{$billingAddress->address1.'  '.$billingAddress->address2.' '.$billingAddress->city.' ' .$billingProvince->name.' '.$billingAddress->country. ' ' .$shippingAddress->postal}}"
                />
             
                    <div class="form_contact" style="width:80%;margin: 0 auto">
                        <h5>Payment Information </h5>
        
            <img src="/storage/images/general_images/payment_cards.png" alt="payment cards">
            <div>Card Type<span class="required">&ast;</span></div>
            <p><select class="form-control form_width" name="card_type" id="card_type">            
                <option value="visa">visa</option>
                <option value="mastercard">mastercard</option>
                <option value="amex">amex</option>            
            </select></p>
            <div>Card Number<span class="required">&ast;</span></div>        

            <p><input type="text" class="form_width form-control" id="card_num" value="{{old('card_num')}}" name="card_num"/>
             <input type="hidden" name="province_id" value="{{$province_id}}"/>    
         </p>
         <div> Expiration Date (Month Year Eg.0418)<span class="required">&ast;</span> </div>     
         <p> <input class="form-control form_width" type="text" id="exp_date" value="{{old('exp_date')}}" name="exp_date"/></p>
         <div>CVV<span class="required">&ast;</span></div>   

         <input class="form-control form_width" type="text" id="cvv" value="{{old('cvv')}}" name="cvv" />
         <img src="images/general_images/cvv.png" alt="cvv"><p style="font-size: 9px;">**CVV is the last 3 digits on the back of your card</p>
         <div>Amount<span class="required">&ast;</span></div>
         <p><input class="form_width form-control" type="text" readonly="" id="amount" value="<?php echo number_format((float)$cart->getTotal(), 2, '.', ''); ?>" name="amount" ></p>

         
            <div style="font-weight: bold;color:green"> You have {{$user->points}} Points in Your Account</div>
            @if($user->points > 5000)
            <div>Please select offer to Redeem your points:</div>
            <small><i>  note: This can not be refund once order is confirmed or cancelled</i></small>          
            <p>            
                <label class="radio-inline">
                    <input type="radio" id="offer1" name="pointsApplied" value="5000">5000  points  $5         
                </label>
                @if($user->points > 10000)
                <label class="radio-inline" style="padding-left: 20px">
                    <input type="radio" id="offer2" name="pointsApplied" value="10000" >10000  points  $10
                </label>
                @endif
                @if($user->points > 15000)
                <label class="radio-inline" style="padding-left: 20px">
                    <input type="radio" id="offer3" name="pointsApplied" value="15000">15000  points  $15
                </label>
                @endif
            </p>      
            
            @endif       
            <p>
             <button type="submit" style="width: 100%" class="btn btn-success">Checkout</button></p>
         </div>
     </form>
 </div>
 
</div><!-- container -->

@endsection

