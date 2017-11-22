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
                                    <a data-toggle="collapse" data-parent="#accordian" href="#engineering">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Engineering
                                    </a>
                                </h4>
                            </div>
                            <div id="engineering" class="panel-collapse collapse">
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
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mathematics">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Mathematics
                                    </a>
                                </h4>
                            </div>
                            <div id="mathematics" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                        <li><a href="">Armani</a></li>
                                        <li><a href="">Prada</a></li>
                                        <li><a href="">Dolce and Gabbana</a></li>
                                        <li><a href="">Chanel</a></li>
                                        <li><a href="">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#computer Technologie">
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

                    </div><!--/category-productsr-->
                    <div class="brands_products"><!--brands_products-->
                        <h2>Top Authors</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset('public/frontEnd/')}}/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset('public/frontEnd/')}}/images/book1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="{{asset('public/frontEnd/')}}/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><i class="fa fa-book" aria-hidden="true"></i> Book Name Here</h2>
                            <h2><i class="fa fa-user" aria-hidden="true"></i> Author Name</h2>
                            <p><b>ISBN</b> : 9789849295907</p>
                            <span>10 Ratings <img src="{{asset('public/frontEnd/')}}/images/product-details/rating.png" alt="" /> </span>
                            <hr>
                            <span>
                                    <span>215 Tk</span>
                                <!--<span>Shipping: 30 Tk</span>-->
                                    <label>Quantity: </label>
                                    <input type="text" value="1" required />
                                    <button type="button" class="btn btn-fefault cart btn-xs">
                                        <i class="fa fa-shopping-cart"></i> Buy Now
                                    </button>
                                    <button type="button" class="btn btn-fefault cart btn-xs">
                                        <i class="fa fa-heart"></i> Wishlist
                                    </button>
                                </span>
                            <hr>
                            <p><b>Shipping Charge:</b> 30 Tk</p>
                            <p><b>Availability:</b> In Stock</p>
                            <hr>
                            <a href=""><img src="{{asset('public/frontEnd/')}}/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                            <li><a href="#author" data-toggle="tab">About Author</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p><b>Write Your Review</b></p>

                                <form action="#">
                                        <span>
                                            <input type="text" placeholder="Your Name"/>
                                            <input type="email" placeholder="Email Address"/>
                                        </span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="{{asset('public/frontEnd/')}}/images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>


                        <div class="tab-pane fade in" id="author" >
                            <div class="col-sm-12">
                                <h2><a href="#">Author Name</a> </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, culpa reiciendis velit molestiae porro earum cupiditate iure ducimus recusandae harum, repellendus quasi dolorem expedita hic doloribus tempore debitis, neque dolores!</p>
                            </div>
                        </div>



                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Similar Books</h2>

                    <div id="similar-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                            <div class="item">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="book-details.html"><img src="{{asset('public/frontEnd/')}}/images/book.gif" alt="" /></a>
                                            </div>
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
                        <a class="left recommended-item-control" href="#similar-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#similar-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>