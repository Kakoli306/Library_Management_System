<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use Image;
use App\Circulation;
use DB;
class CirculationController extends Controller
{
    public function index()
    {
        $publishedBooks = Book::where('read_status', 0)->get();
        return view('admin.circulation.addCirculation', ['publishedBooks' => $publishedBooks]);
    }

    public function circulationFormValidation($request){
          $this->validate($request, [
                'book_name' => 'required|max:100',
                'book_price' => 'required',
                'book_quantity' => 'required',
                'book_image' => 'required',
            ]);
        }


        /* $book_image = $request->file('book_image');
        $uploadPath = 'book_image/';
        $imageExtension = $book_image->getClientOriginalExtension();
         $imageName =  strtolower($request->bookName).'.'.$imageExtension;
        return $imageName;
        $book_image->move($uploadPath,$imageName);
        //$instituelogo->move($uploadPath, $bookName );*/


        public function bookImageUpload($request)
            {
                $book_image = $request->file('book_image');
                $fileExtension = $book_image->getClientOriginalExtension();
                $uploadPath = 'book_image/';
                $imageName = $request->book_name . '.' . $fileExtension;
                $imageUrl = $uploadPath . $imageName;
                Image::make($book_image)->resize(500, 500)->save($uploadPath . $imageName);
                return $imageUrl;
            }


        /* $result=DB::table('circulation')->insert([
            'book_name'=>$request->book_name,
            'book_id'=>$request->book_id,
            'book_price'=>$request->book_price,
            'book_quantity'=>$request->book_quantity,
            'book_short_description'=>$request->book_short_description,
            'book_long_description' => $request->book_long_description,
            'book_image' =>$imageUrl,
             'read_status' => $request->read_status
        ]);

        if($result==true){
            return true;
        }
        else
            return false;*/

       public function saveCirculationBasicInfo($request, $imageUrl)
       {
           $circulation = new Circulation;
           $circulation->book_name = $request->book_name;
           $circulation->book_id = $request->book_id;
           $circulation->book_price = $request->book_price;
           $circulation->book_quantity = $request->book_quantity;
           $circulation->book_short_description = $request->book_short_description;
           $circulation->book_long_description = $request->book_long_description;
           $circulation->book_image = $imageUrl;
           $circulation->read_status = $request->read_status;
           $circulation->save();
       }


        public function saveCirculation(Request $request){
            $this->circulationFormValidation($request);
            $imageUrl = $this->bookImageUpload($request);
            $this->saveCirculationBasicInfo($request, $imageUrl);
            return redirect('circulation/add')->with('message', 'Book info save successfully');
        }

        public function manageCirculation(){
          //  $circulations = Circulation::all();
          //  dd($circulations);
            $circulations = DB::table('circulations')
                ->join('books','circulations.book_id','=','books.id')
                ->select('circulations.*','books.title')
                ->get();

            //echo'<pre>';
           // print_r($circulations);
           // exit();
            return view('admin.circulation.manageCirculation',['circulations'=>$circulations]);
        }

        public function deleteCirculation(Request $request){
            $circulationById = Circulation::find($request->circulation_id);
            unlink($circulationById->book_image);
            $circulationById->delete();
            return redirect('circulation/manage')->with('message','This info deleted successfully');


        }


}

