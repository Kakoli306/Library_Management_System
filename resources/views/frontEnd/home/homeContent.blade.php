@extends('frontEnd.layouts.master')

@section('title')
    Home | Public Library
    @endsection

@section('content')

    @include('frontEnd.layouts.slider');
    <!--content-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Engineering
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Computer Science & Engineer</a></li>
                                            <li><a href="#">Electrical Engineer </a></li>
                                            <li><a href="#">Mechanical Engineer </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Mathematics
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                            <li><a href="#">Armani</a></li>
                                            <li><a href="#">Prada</a></li>
                                            <li><a href="#">Dolce and Gabbana</a></li>
                                            <li><a href="#">Chanel</a></li>
                                            <li><a href="#">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Computer Technologie
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Cloud Computing</a></li>
                                            <li><a href="#">Business Information Systems</a></li>
                                            <li><a href="#">Internet Marketing</a></li>
                                            <li><a href="#">Web Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Fiction</a></h4>
                                </div>
                            </div>-->

                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Top Authors</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="brands_products"><!--brands_products-->
                            <h2>Top Publishers</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Latest Additions to Our Library</h2>
                        <div class="col-sm-3">
                            @foreach($allPublishedBooks as $allPublishedBook)

                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="book-details.html"><img src="{{ asset($allPublishedBook->book_image) }}" alt="" /></a>
                                        <h4>{{$allPublishedBook->book_name}}</h4>
                                    </div>
                                    @endforeach
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>215 Tk</h2>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <p><i class="fa fa-book" aria-hidden="true"></i> <b><a href="book-details.html">Some Book Name</a></b></p>
                                            <p><i class="fa fa-user" aria-hidden="true"></i> <b><a href="#">Some Author Name</a></b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i>Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </section>
    <!--/content-->

    <!--counter-->
    <section class="count_things">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 counter_bolock animated bounceInLeft">
                    <h1 class="timer" data-from="0" data-to="1000"></h1>
                    <h1>Books</h1>
                </div>

                <div class="col-sm-3 counter_bolock animated fadeIn">
                    <h1 class="timer" data-from="25" data-to="75"></h1>
                    <h1>Authors</h1>
                </div>

                <div class="col-sm-3 counter_bolock animated fadeIn">
                    <h1 class="timer" data-from="25" data-to="200"></h1>
                    <h1>Publishers</h1>
                </div>

                <div class="col-sm-3 counter_bolock animated bounceInRight">
                    <h1 class="timer" data-from="0" data-to="33"></h1>
                    <h1>Categories</h1>
                </div>

            </div>
        </div>
    </section>
@endsection