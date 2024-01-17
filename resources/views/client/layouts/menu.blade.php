
<div class="off_canvars_overlay"></div>
{{--  phone devices  --}}
   <div class="Offcanvas_menu">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="canvas_open">
                       <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                   </div>
                   <div class="Offcanvas_menu_wrapper">
                       <div class="canvas_close">
                           <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       </div>
                       {{--  <div class="antomi_message">
                           <p>Step into  the festival season with wawa Bangladesh</p>
                       </div>  --}}
                       {{--  <div class="header_top_settings text-end">
                           <ul>
                               <li><a href="{{ route('login.website') }}">login</a></li>
                               <li><a href="{{ route('wishlist.list') }}">wishlist</a></li>
                               <li><a href="{{ route('client.cart') }}">cart</a></li>
                               <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                               <li>Quality Guarantee Of Products</li>
                           </ul>
                       </div>  --}}
                       <div class="search_container">
                           <form action="#">
                               {{--  <div class="hover_category">
                                   <select class="select_option" name="select" id="categori1">
                                       <option selected value="1">All Categories</option>
                                       <option value="2">Accessories</option>
                                       <option value="3">Accessories & More</option>
                                       <option value="4">Butters & Eggs</option>
                                       <option value="5">Camera & Video </option>
                                       <option value="6">Mornitors</option>
                                       <option value="7">Tablets</option>
                                       <option value="8">Laptops</option>
                                       <option value="9">Handbags</option>
                                       <option value="10">Headphone & Speaker</option>
                                       <option value="11">Herbs & botanicals</option>
                                       <option value="12">Vegetables</option>
                                       <option value="13">Shop</option>
                                       <option value="14">Laptops & Desktops</option>
                                       <option value="15">Watchs</option>
                                       <option value="16">Electronic</option>
                                   </select>
                               </div>  --}}
                               <div class="search_box">
                                   <input placeholder="Search product..." type="text">
                                   <button type="submit">Search</button>
                               </div>
                           </form>
                       </div>
                       <div id="menu" class="text-start ">
                           <ul class="offcanvas_main_menu">
                               <li class="menu-item-has-children active"> <a href="{{ route('client.home') }}">Home</a>
                                   {{-- <ul class="sub-menu">
                                       <li><a href="{{route('client.home')}}">Home 1</a></li>
                                       <li><a href="index-2.html">Home 2</a></li>
                                       <li><a href="index-3.html">Home 3</a></li>
                                       <li><a href="index-4.html">Home 4</a></li>
                                       <li><a href="index-5.html">Home 5</a></li>
                                       <li><a href="index-6.html">Home 6</a></li>
                                       <li><a href="index-7.html">Home 7</a></li>
                                   </ul> --}}
                               </li>
                               <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Shop</a>
                              </li>
                              @foreach (App\Models\Catalogue::with('category')->get()->all() as $catalogue)
                              <li class="menu-item-has-children">
                                  <a href="javascript:void(0)">{{ $catalogue->name }}</a>
                                  @if ($catalogue->category)
                                      <ul class="sub-menu">
                                          @foreach ($catalogue->category as $category)
                                              <li class="menu-item-has-children">
                                                  <a href="{{ url('shop/category/'.$category->id) }}">{{ $category->name }}</a>
                                                  @if (count($category->subcategories) > 0)
                                                      <ul class="sub-menu">
                                                          @foreach ($category->subcategories as $subcategory)
                                                              <li>
                                                                  <a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a>
                                                              </li>
                                                          @endforeach
                                                      </ul>
                                                  @endif
                                              </li>
                                          @endforeach
                                      </ul>
                                  @endif
                              </li>
                          @endforeach
                                {{-- <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Women</a></li>
                                 <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Kids</a>
                                   <ul class="sub-menu">
                                       <li><a href="{{ route('client.shop') }}">Boys </a></li>
                                       <li><a href="{{ route('client.shop') }}">girls</a></li>
                                       <li><a href="{{ route('client.shop') }}">New Born Baby</a></li>
                                   </ul>
                               </li>
                               <li class="menu-item-has-children active"> <a href="{{ route('client.shop') }}">Wedding</a></li> --}}

                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--Offcanvas menu area end-->

   {{--  large devices  --}}
   <!--header area start-->
   <header>
       <div class="main_header">
           <div class="container">
               <!--header top start-->
               <div class="header_top">
                   <div class="row align-items-center">
                       <div class="col-lg-4 col-md-5">
                           <div class="antomi_message">
                               <p>Step into  the festival season with Easy E-commerce</p>
                           </div>
                       </div>
                       <div class="col-lg-8 col-md-7">
                           <div class="header_top_settings text-end">
                               <ul>
                                   <li> @if(Auth::check())
                                    <a class="login visible-xs" href="{{ route('client.account') }}">
                                        My Account
                                    </a>
                                @else
                                    <a class="login visible-xs" href="{{ route('login.website') }}">
                                        Sign In
                                    </a>
                                @endif</li>
                                   {{-- <li><a href="{{ route('wishlist.list') }}">wishlist</a></li>
                                   <li><a href="javascript:void(0)" id="cartToggle">cart</a></li> --}}
                                   <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                   <li>Quality Guarantee Of Products</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!--header top start-->

               <!--header middel start-->
               <div class="header_middle sticky-header">
                   <div class="row align-items-center">
                       <div class="col-lg-2 col-md-3 col-4">
                           <div class="logo">
                               <a href="{{route('client.home')}}"><img src="@if ($company->logo)
                                {{asset('images/company/'.$company->logo)}}
                            @endif" width="206" height="20" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-7 col-md-12">
                           <div class="main_menu menu_position text-center">
                               <nav>
                                   <ul>
                                       <li><a href="{{route('client.home')}}">home</a>
                                           {{-- <ul class="sub_menu">
                                               <li><a href="{{route('client.home')}}">Home shop 1</a></li>
                                               <li><a href="index-2.html">Home shop 2</a></li>
                                               <li><a href="index-3.html">Home shop 3</a></li>
                                               <li><a href="index-4.html">Home shop 4</a></li>
                                               <li><a href="index-5.html">Home shop 5</a></li>
                                               <li><a href="index-6.html">Home shop 6</a></li>
                                               <li><a href="index-7.html">Home shop 7</a></li>
                                           </ul> --}}
                                       </li>
                                       {{--  <li><a href="{{route('client.about')}}">About Us</a></li>  --}}
                                       <li class="mega_items"><a href="{{route('client.shop')}}">Product</a>
                                            {{-- <div class="mega_menu">
                                               <ul class="mega_menu_inner">
                                                   <li><a href="{{route('client.shop')}}">Men</a>
                                                       <ul>
                                                           <li><a href="{{route('client.shop')}}">Premium panjabi</a></li>
                                                           <li><a href="{{route('client.shop')}}">Classic Panjabi</a></li>
                                                           <li><a href="{{route('client.shop')}}">Fashion panjabi </a></li>
                                                           <li><a href="{{route('client.shop')}}"> Fashion panjabi</a></li>
                                                           <li><a href="{{route('client.shop')}}">Fashion panjabi</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">Women</a>
                                                       <ul>
                                                           <li><a href="#">T-Shirt</a></li>
                                                           <li><a href="#">Regular t-shirt</a></li>
                                                           <li><a href="#">Henry t-shirt</a></li>
                                                           <li><a href="#">Boxy t-shirt</a></li>
                                                           <li><a href="#">Sports t-shirt</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">Kids</a>
                                                       <ul>
                                                           <li><a href="#">Denin Trouser</a></li>
                                                           <li><a href="#">Chino Trouser</a></li>
                                                           <li><a href="#">Formar Trouser</a></li>
                                                           <li><a href="#">product variable</a></li>
                                                           <li><a href="#">product countdown</a></li>

                                                       </ul>
                                                   </li>
                                               </ul>
                                           </div> --}}
                                       </li>
                                        @if (App\Models\Catalogue::get())
                                                @foreach (App\Models\Catalogue::get()->all() as $catalogue)
                                                    <li class="mega_items"><a href="{{ url('shop/catalogue/'.$catalogue->id) }}">{{ $catalogue->name }}</a>
                                                        @if ($catalogue->category)
                                                            <div class="mega_menu">
                                                                <ul class="mega_menu_inner">
                                                                    @foreach ($catalogue->category as $category)
                                                                        <li><a href="{{ url('shop/category/'.$category->id) }}">{{ ucwords($category->name) }}</a>
                                                                            @if($category->subcategories)
                                                                                <ul>
                                                                                    @foreach($category->subcategories as $subcategory)
                                                                                        <li>
                                                                                            <a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                        @endif
                                   </ul>
                               </nav>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-7 col-6">
                           <div class="header_configure_area">
                               <div class="header_wishlist">
                                   <a href="{{ url('/wishlist') }}" id="">
                                    {{-- <i class="ion-android-favorite-outline"></i> --}}
                                    <span class="icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                    <span class="first" data-translate="cart.general.shopping_cart"></span>
                                       <span class="cart-count wishlist_count" id="cartCount">0</span>
                                       {{-- <span id="cartCount" class="cart-count wishlist-count">1</span> --}}
                                   </a>
                               </div>
                               <div class="mini_cart_wrapper">
                                   <a href="javascript:void(0)" id="cartToggle">
                                       {{-- <i class="fa fa-shopping-bag"></i> --}}
                                       <span class="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                       <span class="first" data-translate="cart.general.shopping_cart"></span>
                                       {{-- <span class="cart_price"> 152.00 ৳<i class="ion-ios-arrow-down"></i></span> --}}
                                       <span class="cart_count" id="cartCount">0</span>

                                   </a>
                               </div>
                                    <div id="dropdown-cart" style="display:none" class="shadow">
                                    <div class="no-items" id="noItems" style="text-align: center !important;">
                                        <p>Your cart is currently empty.</p>
                                        <p class="text-continue">
                                            <a href="{{ route('client.shop') }}">Continue Shopping</a>
                                        </p>
                                    </div>
                                    <div class="has-items">
                                        <ol class="mini-products-list">

                                        </ol>

                                        <div class="summary">
                                            <p class="total">
                                                <span class="label"><span data-translate="cart.label.total">Total</span>:</span>
                                                <span class="price cart-total-price">৳ 0</span>
                                            </p>
                                        </div>
                                        <div class="actions">
                                            <a class="btn" href="{{ route('client.checkout') }}"
                                            data-translate="cart.general.checkout">Checkout Now
                                            </a>
                                        </div>
                                        <p class="text-cart"><a href="{{ route('cart.index') }}"
                                                                data-translate="cart.general.view_cart">Or
                                                View Cart</a>
                                        </p>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!--header middel end-->


                <!--mini cart-->
               {{-- <div class="mini_cart">
                   <div class="cart_close">
                       <div class="cart_text">

                           <h3>cart</h3>
                       </div>
                       <div class="mini_cart_close">
                           <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       </div>
                   </div>
                   <div class="cart_item">
                       <div class="cart_img">
                           <a href="#"><img src="{{asset('client/img/product/men/men1.jpg')}}" alt=""></a>
                       </div>
                       <div class="cart_info">
                           <a href="#">Mens Fashionable shirt</a>
                           <p>Qty: 1 X <span> 500৳</span></p>
                       </div>
                       <div class="cart_remove">
                           <a href="#"><i class="ion-android-close"></i></a>
                       </div>
                   </div>
                   <div class="cart_item">
                       <div class="cart_img">
                           <a href="#"><img src="{{asset('client/img/product/men/men2.jpg')}}" alt=""></a>
                       </div>
                       <div class="cart_info">
                           <a href="#">Men stylish sirt</a>
                           <p>Qty: 1 X <span> <i class="fa-solid fa-bangladeshi-taka-sign"></i>500৳</span></p>
                       </div>
                       <div class="cart_remove">
                           <a href="#"><i class="ion-android-close"></i></a>
                       </div>
                   </div>
                   <div class="mini_cart_table">
                       <div class="cart_total">
                           <span>Sub total:</span>
                           <span class="price">৳1000</span>
                       </div>
                       <div class="cart_total mt-10">
                           <span>total:</span>
                           <span class="price">৳1000</span>
                       </div>
                   </div>
                   <div class="mini_cart_footer">
                       <div class="cart_button">
                           <a href="{{route('cart.index')}}">View cart</a>
                       </div>
                       <div class="cart_button">
                           <a class="active" href="{{route('client.checkout')}}">Checkout</a>
                       </div>

                   </div>
               </div> --}}
               <!--mini cart end-->

               <!--header bottom satrt-->
               <div class="header_bottom">
                   <div class="row align-items-center">
                       <div class="column1 col-lg-4 col-md-6"  style="margin-right: 70px">
                           <div class="categories_menu categories_three">
                               <div class="categories_title">
                                   <h2 class="categori_toggle">ALL CATEGORIES</h2>
                               </div>
                               @if (App\Models\Catalogue::get())
                                 <div class="categories_menu_toggle">
                                   <ul>
                                        @foreach (App\Models\Catalogue::with('category')->get()->all() as $catalogue)

                                        <li class="menu_item_children"><a href="{{ url('shop/catalogue/'.$catalogue->id) }}">{{ $catalogue->name }} <i class="fa fa-angle-right"></i></a>
                                            @if ($catalogue->category)
                                                <ul class="categories_mega_menu">
                                                    @foreach ($catalogue->category as $category)
                                                        <li class="menu_item_children"><a class="text-primary" href="{{ url('shop/category/'.$category->id) }}">{{ $category->name }}</a>
                                                            @if (count($category->subcategories) > 0)
                                                                <ul>
                                                                    @foreach ($category->subcategories as $subcategory)
                                                                        <li>
                                                                            <a href="{{ url('shop/category/'.$subcategory->id) }}">{{ $subcategory->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                   </ul>
                               </div>
                               @endif

                           </div>
                       </div>
                       <div class="column2 col-lg-8">
                           <div class="search_container">
                               <form action="#">
                                   <div class="hover_category" style="border-left: 2px solid #ebebeb">
                                       {{--  <select class="select_option" name="select" id="categori2">
                                           <option selected value="1">All Categories</option>
                                           <option value="2">Accessories</option>
                                           <option value="3">Accessories & More</option>
                                           <option value="4">Butters & Eggs</option>
                                           <option value="5">Camera & Video </option>
                                           <option value="6">Mornitors</option>
                                           <option value="7">Tablets</option>
                                           <option value="8">Laptops</option>
                                           <option value="9">Handbags</option>
                                           <option value="10">Headphone & Speaker</option>
                                           <option value="11">Herbs & botanicals</option>
                                           <option value="12">Vegetables</option>
                                           <option value="13">Shop</option>
                                           <option value="14">Laptops & Desktops</option>
                                           <option value="15">Watchs</option>
                                           <option value="16">Electronic</option>
                                       </select>  --}}
                                   </div>
                                   <div class="search_box" >
                                       <input placeholder="Search product..." type="text">
                                       <button type="submit">Search</button>
                                   </div>
                               </form>
                           </div>

                       </div>
                       {{--  <div class="column3 col-lg-3 col-md-6">
                           <div class="header_bigsale">
                               <a href="#">BIG SALE BLACK FRIDAY</a>
                           </div>
                       </div>  --}}
                   </div>
               </div>
               <!--header bottom end-->
           </div>
       </div>
   </header>
   {{--  large devices  --}}
