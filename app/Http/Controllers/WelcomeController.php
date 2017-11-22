<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Circulation;

class WelcomeController extends Controller
{
    public function index(){
        $allPublishedBooks = Circulation::where('read_status',0)->get();
        return view('frontEnd.home.homeContent',['allPublishedBooks'=>$allPublishedBooks]);
    }

    public function newFunction($id){
     $circulationsByBookId = Circulation::where('book_id',$id)
         ->where('read_status',0)->get();
        return view('frontEnd.allBooks.bookContent',['circulationsByBookId'=>$circulationsByBookId]);
    }

    public function newFunction1(){
        return view('frontEnd.BlogList.blogContent');
    }
    public function newFunction2(){
        return view('frontEnd.BookDetails.bookDetailsContent');
    }
    public function newFunction3(){
        return view('frontEnd.BlogSingle.blogSingleContent');
    }
    public function newFunction4(){
        return view('frontEnd.Checkout.checkoutContent');
    }
}
