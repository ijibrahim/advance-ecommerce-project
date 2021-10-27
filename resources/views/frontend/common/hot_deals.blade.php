@php
    
        $hot_deals = App\Models\Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(6)->get();

@endphp

<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">@if(session()->get('language') == 'bangla') হট ডিলস্ @else  hot deals  @endif</h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">

        @foreach($hot_deals as $product)

        <div class="item">
            <div class="products">
                <div class="hot-deal-wrapper">
                    <div class="image"> 
                        <img src="{{ asset($product->product_thambnail) }}" alt=" @if(session()->get('language') == 'bangla') {{ $product->product_name_bn }} @else {{ $product->product_name_en }}  @endif "> 
                    </div>

                    @php 
                        // $amount = $product->selling_price - $product->discount_price;
                        // $discount = ($amount/$product->selling_price) * 100;

                        $amount = $product->discount_price / $product->selling_price;
                        $percent = $amount * 100;

                        $percent_selling_amount = $product->selling_price - $product->selling_price * $amount;

                    @endphp
                        @if($product->discount_price == Null)
                            <div class="tag new"><span>new</span></div>
                        @else
                        <div class="sale-offer-tag">
                        <span>{{ round($percent) }} %<br> off</span>
                        </div>
                        @endif
                    <div class="timing-wrapper">
                        <div class="box-wrapper">
                            <div class="date box"> <span class="key">120</span> <span
                                    class="value">DAYS</span> </div>
                        </div>
                        <div class="box-wrapper">
                            <div class="hour box"> <span class="key">20</span> <span
                                    class="value">HRS</span> </div>
                        </div>
                        <div class="box-wrapper">
                            <div class="minutes box"> <span class="key">36</span> <span
                                    class="value">MINS</span> </div>
                        </div>
                        <div class="box-wrapper hidden-md">
                            <div class="seconds box"> <span class="key">60</span> <span
                                    class="value">SEC</span> </div>
                        </div>
                    </div>
                </div>
                <!-- /.hot-deal-wrapper -->

                <div class="product-info text-left m-t-20">
                    <h3 class="name">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en) }}">
                            @if(session()->get('language') == 'bangla') {{ $product->product_name_bn }} @else {{ $product->product_name_en }} @endif
                        </a>
                    </h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price">
                        @if($product->discount_price == Null)
                            <span class="price">
                                $ {{ $product->selling_price }}
                            </span> 
                        @else 
                            <span class="price">  
                                $ {{ $percent_selling_amount }}
                            </span> 
                            <span class="price-before-discount">
                                $ {{ $product->selling_price }}
                            </span> 
                        @endif 
                        
                    </div>
                    <!-- /.product-price -->

                </div>
                <!-- /.product-info -->

                <div class="cart clearfix animate-effect">
                    <div class="action">
                        <div class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </div>
                    </div>
                    <!-- /.action -->
                </div>
                <!-- /.cart -->
            </div>
        </div>
        
        @endforeach <!-- Hot deals Item ending -->

    </div>
    <!-- /.sidebar-widget -->
</div>