@extends('layouts.app')

@section('content')
    <br/>
    <hr/>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>
    <h1 class="text-center text-success">Add Circulation form</h1>
    <hr/>


    <div class="row">
        <div class="well">
            {!! Form::open(['route'=>'new-circulation','on submit'=>"return vaidateStandard(this)" ,'method'=>'post',
            'class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}

            {{ csrf_field()}}

            <div class="form-group">
                <label class="control-label col-sm-3">Book Name <span style="color:#8b52f8;">*</span>
                </label>
                <div class="col-sm-9">
                    <input type="text" required regexp="JSVAL_RX_ALPHA" err="Pleasr enter a valid Book name" name="book_name" class="form-control"/>
                    <span class="text-danger">{{$errors->has('book_name')? $errors->first('book_name'):''}}</span>

                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Book Type </label>
                <div class="col-sm-9">
                    <select class="form-control" name="book_id">
                        <option>---Select Read Status---</option>
                        @foreach($publishedBooks as $publishedBook)
                            <option value="{{$publishedBook->id}}">{{ $publishedBook->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Book Price</label>
                <div class="col-sm-9">
                    <input type="text"  required regexp="JSVAL_RX_ALPHA" err="Pleasr enter a valid Book price" name="book_price" class="form-control"/>
                    <span class="text-danger">{{$errors->has('book_price')? $errors->first('book_price'):''}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Book Quantity</label>
                <div class="col-sm-9">
                    <input type="number" min="1" name="book_quantity" class="form-control"/>
                    <span class="text-danger">{{$errors->has('book_quantity')? $errors->first('book_quantity'):''}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Book Short Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" style="resize:none;" name="book_short_description" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Book Long Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" style="resize:none;" name="book_long_description" rows="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Book Image</label>
                <div class="col-sm-9">
                    <input type="file"  name="book_image" accept="image/*">
                    <span class="text-danger">{{$errors->has('book_image')? $errors->first('book_image'):''}}</span>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3">Publication Status</label>
                <div class="col-sm-9">
                    <select class="form-control" name="read_status">
                        <option>---Select Publication Status---</option>
                        <option value="0">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <input type="submit" name="btn" value="Save Book Info" class="btn btn-success btn-block">
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>

@endSection

