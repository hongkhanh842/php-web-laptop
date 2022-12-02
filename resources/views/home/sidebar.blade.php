<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
            @endphp
                <!-- category nav -->
            <div class="category-nav @if (!@isset($page)) show-on-click @endif">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">

                    @foreach($mainCategories as $rs)
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ $rs->title }}<i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">

                                    @if(count($rs->children))
                                        @include('home.categorytree',['children' => $rs->children])
                                    @endif

                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">

                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About </a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                   {{-- <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                           --}}{{-- <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                            </div>--}}{{--
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="#">
                                        <img src="{{asset('assets')}}/img/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>--}}
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->