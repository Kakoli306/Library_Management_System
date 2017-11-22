<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class BookController extends Controller
{
    public function index()
    {
        return view('admin.book.circulationBook');
    }

    public function saveBook(Request $request)
    {
        $this->bookValidation($request);
        $this->createBook($request);
        return redirect('circulation/book')->with('message', 'Book info save successfully');
    }


    private function createBook(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->edition = $request->edition;
        $book->edition_year = $request->edition_year;
        $book->add_date = $request->add_date;
        $book->read_status = $request->read_status;
        $book->save();
    }

    public function configurationBook(){
        $book = Book::all();
        return view('admin.book.configurationBook',['books'=> $book]); //array index

    }

    public function unpublishedBook(Request $request){

      // return $request->all();
                DB::table('books')->where('id',$request->book_id)->update([
                    'read_status'=>"1"
                ]);
        //return $request->all();

        //ebar run koren..run again unpulishe...hoyni ekhono ???amar net slow tai data late aa ashe
        //
       // $bookById = Book::find($request->book_id);
       /// $bookById->read_status=0;
      //  $bookById->save();
        return redirect('book/configuration')->with('message','Read status unpublished successfully');
    }

    public function publishedBook(Request $request){
        DB::table('books')->where('id',$request->book_id)->update([
            'read_status'=>"0"
        ]);
        //return $request->all();

       // $bookById = Book::find($request->book_id);
        //$bookById->read_status=1;
       // $bookById->save();
        return redirect('book/configuration')->with('message','Read status published successfully');
    }

    public function editBook(Request $request){
       $bookById = Book::find($request->book_id);
        return view('admin.book.editBook',['bookById'=>$bookById
        ]);
    }

    public function updateBook(Request $request) {
        $book = Book::find($request->book_id);
        $book->author = $request->author;
        $book->edition = $request->edition;
        $book->edition_year = $request->edition_year;
        $book->add_date = $request->add_date;
        $book->read_status = $request->read_status;
        $book->save();

        return redirect('/book/configuration')->with('message', 'Book info updated successfully');
    }

    public function deleteBook(Request $request) {
        $book =Book::find($request->book_id);
        $book->delete();
        return redirect('/book/configuration')->with('message', 'Book info Delete Successfully');
    }


    private function bookValidation(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:25',
            'author' => 'required|unique:books|max:20',
            'add_date' => 'required|unique:books',
        ]);
    }
}



