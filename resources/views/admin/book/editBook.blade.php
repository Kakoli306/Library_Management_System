@extends('layouts.app')

@section('content')
    <br/>
    <hr/>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>
    <h1 class="text-center text-success">Edit Book</h1>
    <hr/>

    <div class="row">
        <div class="well">
            <form class="form-horizontal" action="{{ route('update-book') }}" method="POST">

                {{ csrf_field() }}

                <input type="hidden" value="Book" name="log_section">
                <input type="hidden" value="Edit" name="log_action">

                <div class="box-body">
                    <div class="form-group">
                        <label for="title" class="col-sm-3">Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control"  value="{{$bookById->title}}" id="title" placeholder="Title">
                            <span class="text-danger"> {{$errors->has('title')?$errors->first('title'):' '}}</span>

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="author" class="col-sm-3">Author</label>
                            <div class="col-sm-9">
                                <input type="text" name="author" class="form-control"  value="{{$bookById->author}}" id="author" placeholder="author">
                                <span class="text-danger"> {{$errors->has('author')?$errors->first('author'):' '}}</span>

                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="edition" class="col-sm-3">Edition</label>
                                <div class="col-sm-9">
                                    <input type="text" name="edition" class="form-control"  value="{{$bookById->edition}}" id="edition"
                                           placeholder="edition">
                                    <span class="text-danger"> {{$errors->has('edition')?$errors->first('edition'):' '}}</span>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="edition_year" class="col-sm-3"> Edition Year</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="edition_year" class="form-control "  value="{{$bookById->edition_year}}" id="edition_year"
                                               placeholder="edition year">
                                        <span class="text-danger"> {{$errors->has('edition_year')?$errors->first('edition_year'):' '}}</span>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="add_date" class="col-sm-3">Add Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="add_date" class="form-control"  value="{{$bookById->add_date}}" id="datetimepicker4"
                                                   placeholder="Add date">
                                            <span class="text-danger"> {{$errors->has('add_date')?$errors->first('add_date'):' '}}</span>

                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3">Book Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="read_status"  value="{{$bookById->read_status}}">
                                        <option>---Select Read Status---</option>
                                        <option value="0">Published</option>
                                        <option value="1">Unpublished</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info">Update Book Info</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- /.box-body -->
        </form>

    </div>
    </div>
    </section>

    <script>
        document.forms['editBookForm'].elements['read_status'].value ='{{$bookById->read_status}}';
    </script>

@endsection