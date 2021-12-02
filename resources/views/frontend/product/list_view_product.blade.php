
@foreach($products as $product)

@php 
    $amount = $product->discount_price / $product->selling_price;
    $percent = $amount * 100;

    $percent_selling_amount = $product->selling_price - $product->selling_price * $amount;

@endphp
  <div class="category-product-inner wow fadeInUp">
    <div class="products">
      <div class="product-list product">
        <div class="row product-list-row">
          <div class="col col-sm-4 col-lg-4">
            <div class="product-image">
              <div class="image"> 
                  <img src="{{ asset($product->product_thambnail) }}" 
                      alt="@if(session()->get('language') == 'bangla') 
                          {{ $product->product_name_bn }} 
                      @else 
                          {{ $product->product_name_en }} 
                      @endif" >
              </div>
            </div>
            <!-- /.product-image --> 
          </div>
          <!-- /.col -->
          <div class="col col-sm-8 col-lg-8">
            <div class="product-info">
              <h3 class="name">
                  <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en) }}">
                      @if(session()->get('language') == 'bangla') 
                          {{ $product->product_name_bn }} 
                      @else 
                          {{ $product->product_name_en }} 
                      @endif
                  </a>
              </h3>
              <div class="rating rateit-small"></div>
              <div class="product-price"> 
                  @if($product->discount_price == Null)
                  <div class="product-price"> 
                      <span class="price">
                          {{ $product->selling_price }} 
                      </span> 
                  </div>
                  @else
                  <div class="product-price"> 
                      <span class="price">
                          $ {{ $percent_selling_amount }} 
                      </span> 
                      <span class="price-before-discount">
                          ${{ $product->selling_price }}
                      </span> 
                  </div>
                  @endif
              </div>
              <!-- /.product-price -->
              <div class="description m-t-10">
                  @if(session()->get('language') == 'bangla') 
                      {{ $product->sort_descp_bn }} 
                  @else 
                      {{ $product->sort_descp_en }} 
                  @endif
              </div>
              <div class="cart clearfix animate-effect">
                <div class="action">
                  <ul class="list-unstyled">
                    <li class="add-cart-button btn-group">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                      <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </li>
                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                  </ul>
                </div>
                <!-- /.action --> 
              </div>
              <!-- /.cart --> 
              
            </div>
            <!-- /.product-info --> 
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.product-list-row -->

          <div>
              @if($product->discount_price == Null)
                  <div class="tag new"><span>new</span></div>
              @else
                  <div class="tag hot"><span>{{ round($percent) }} %</span></div>
              @endif
          </div>
      <!-- /.product-list --> 
    </div>
    <!-- /.products --> 
  </div>

@endforeach
<!-- /.category-product-inner -->