<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span></span></a>
                </li>
                <li>
                    <a href="{{route('vendor.create')}}"><i class="la la-cube"></i><span>Vendors</span></a>
                </li>
                <li>
                    <a href="{{route('product.create')}}"><i class="fa fa-cart-shopping"></i><span>Products</span></a> 
                </li>
                <li> 
                    <a href="{{route('customer.create')}}"><i class="la la-users"></i> <span>Customer</span></a>
                </li>
                <li class="submenu">
                    <a href=""><i class="fa fa-cart-shopping"></i> </i> <span> Category</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('create.category')}}">Categories</a>
                        <li><a href="{{route('create.subcategory')}}"> Sub Categories</a></li>
                    </ul>
                </li>
                <li> 
                    {{-- <a href="leads.html"><i class="fa fa-copyright"></i><span>Brands</span></a> --}}
                </li>
                <li> 
                    <a href="tickets.html"><i class="fas fa-heart"></i> <span>WishList</span></a>
                </li>
                <li>
                    <a href="{{route('product.discount')}}"><i class="la la-files-o"></i> <span>Discount</span></a>
                   
                </li>
                <li>
                    <a href="{{route('cretae.oredr')}}"><i class="la la-files-o"></i> <span>Order</span></a>
                   
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-cart-shopping"></i> <span>Cart</span></a>
                </li>
                <li>
                    <a href="{{route('create.payment')}}"><i class="la la-money"></i> <span> Payment</span></a>
                    
                </li>
                <li> 
                    <a href="{{route('create.feedback')}}"><i class="la la-file-pdf-o"></i> <span>Feedback</span></a>
                </li>
                <li>
                    <a href="{{route('create.report')}}"><i class="la la-pie-chart"></i> <span> Reports </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>