  
@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();

@endphp

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset ('backend/images/icon.png')}}" alt="" width="40" height="40">
						  <h3><b>DevsStream</b> Shop</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')? 'active': '' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/brand')? 'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.brand')? 'active': '' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>
          </ul>
        </li> 
		  
        <li class="treeview {{ ($prefix == '/category')? 'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All Sub Category</a></li>
            <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub-Sub Category</a></li>
          </ul>
        </li>
		
        <li class="treeview {{ ($prefix == '/product')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'add-product')? 'active':'' }}"><a href="{{ route('add-product') }}"><i class="ti-more"></i>Add Products</a></li>
            <li class="{{ ($route == 'manage-product')? 'active':'' }}"><a href="{{ route('manage-product') }}"><i class="ti-more"></i>Manage Products</a></li>
            
          </ul>
        </li> 		  
		    
        <li class="treeview {{ ($prefix == '/slider')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-slider')? 'active':'' }}"><a href="{{ route('manage-slider') }}"><i class="ti-more"></i>Manage Slider</a></li>
            
            
          </ul>
        </li>       
            
        <li class="treeview {{ ($prefix == '/coupon')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-coupon')? 'active':'' }}"><a href="{{ route('manage-coupon') }}"><i class="ti-more"></i>Manage Coupon</a></li>
            
            
          </ul>
        </li>       
                 
        <li class="treeview {{ ($prefix == '/shipping')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-division')? 'active':'' }}"><a href="{{ route('manage-division') }}"><i class="ti-more"></i>Ship Division</a></li>
            <li class="{{ ($route == 'manage-district')? 'active':'' }}"><a href="{{ route('manage-district') }}"><i class="ti-more"></i>Ship District</a></li>
            <li class="{{ ($route == 'manage-state')? 'active':'' }}"><a href="{{ route('manage-state') }}"><i class="ti-more"></i>Ship State</a></li>
            
            
          </ul>
        </li>       
                      
        <li class="treeview {{ ($prefix == '/blog')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'blog.category')? 'active':'' }}"><a href="{{ route('blog.category') }}"><i class="ti-more"></i>Blog Category</a></li>
            <li class="{{ ($route == 'list.post')? 'active':'' }}"><a href="{{ route('list.post') }}"><i class="ti-more"></i>List Blog Post</a></li>
            <li class="{{ ($route == 'add.post')? 'active':'' }}"><a href="{{ route('add.post') }}"><i class="ti-more"></i>View Blog Post</a></li>
            
            
            
          </ul>
        </li>       
                           
        <li class="treeview {{ ($prefix == '/setting')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="{{ ($route == 'site.setting')? 'active':'' }}"><a href="{{ route('site.setting') }}"><i class="ti-more"></i>Site Setting</a></li>

          </ul>
        </li>       
     
        <li class="header nav-small-cap">User Interface</li>
                 
        <li class="treeview {{ ($prefix == '/orders')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'panding-orders')? 'active':'' }}"><a href="{{ route('panding-orders') }}"><i class="ti-more"></i>Panding Orders</a></li>
            <li class="{{ ($route == 'confirmed-order')? 'active':'' }}"><a href="{{ route('confirmed-order') }}"><i class="ti-more"></i>Confirm Order</a></li>
            <li class="{{ ($route == 'processing-order')? 'active':'' }}"><a href="{{ route('processing-order') }}"><i class="ti-more"></i>Processing Order</a></li>
            <li class="{{ ($route == 'picked-order')? 'active':'' }}"><a href="{{ route('picked-order') }}"><i class="ti-more"></i>Picked Order</a></li>
            <li class="{{ ($route == 'shipped-order')? 'active':'' }}"><a href="{{ route('shipped-order') }}"><i class="ti-more"></i>Shipped Order</a></li>
            <li class="{{ ($route == 'delivered-order')? 'active':'' }}"><a href="{{ route('delivered-order') }}"><i class="ti-more"></i>Delivered Order</a></li>
            <li class="{{ ($route == 'cancel-order')? 'active':'' }}"><a href="{{ route('cancel-order') }}"><i class="ti-more"></i>Cancel Order</a></li>
            
            
          </ul>
        </li> 
		                 
        <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>All Reports</a></li> 
          </ul>
        </li> 
    
                     
        <li class="treeview {{ ($prefix == '/allusers')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all-users')? 'active':'' }}"><a href="{{ route('all-users') }}"><i class="ti-more"></i>All Users</a></li> 
          </ul>
        </li> 
    

		  
       
		  
		
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>

