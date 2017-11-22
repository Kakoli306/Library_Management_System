<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <?php $books=DB::table('books')->get(); ?>

                        @foreach($books as $allPublishedBook)

                            <li><a class="color" href="{{url('book/'.$allPublishedBook->id)}}">{{ $allPublishedBook->title }}</a></li>
                        @endforeach
                        <li><a href="{{ url('/all_books') }}">All Books</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search Anything :) "/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->