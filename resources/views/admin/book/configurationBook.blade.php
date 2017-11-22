@extends('layouts.app');

@section('content')
    <hr/>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Data Tables

                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Book Id</th>
                                <th>Title</th>
                                <th> Author</th>
                                <th>Edition</th>
                                <th>Edition Year</th>
                                <th>Add Date</th>
                                <th>Read Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book )
                                <tr class="success">
                                    <td>{{ $book->id }}</td>
                                    <td>{{$book ->title}}</td>
                                    <td>{{$book ->author}}</td>
                                    <td>{{$book ->edition}}</td>
                                    <td>{{$book ->edition_year}}</td>
                                    <td>{{$book ->add_date}}</td>
                                    <td>{{$book ->read_status == 1 ? 'Published': 'Unpublished'}}</td>

                                    <td class="center">


                                        @if($book->read_status == 1)

                                            <form action="{{ route('published-book') }}" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $book->id }}" name="book_id">
                                                <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Published">
                                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                                </button>
                                            </form>

                                        @else

                                            <form action="{{ route('unpublished-book') }}" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $book->id }}" name="book_id">
                                                <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Unpublished">
                                                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        @endif

                                        <form action="{{ route('edit-book') }}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}

                                            <input type="hidden" value="{{ $book->id }}" name="book_id">
                                            <button type="submit" class="btn btn-success btn-sm" title="Edit">
                                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('delete-book') }}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}

                                            <input type="hidden" value="{{ $book->id }}" name="book_id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This !');">
                                                <i class="fa fa-eraser" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection