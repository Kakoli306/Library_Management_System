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
                                <th>SL NO</th>
                                <th>Book Name</th>
                                <th>Book Type</th>
                                <th>Book Price</th>
                                <th>Book Quantity</th>
                                <th>Read Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i =1; ?>
                            @foreach($circulations as $circulation )
                                <tr class="success">
                                    <td>{{ $i  }}</td>
                                    <td>{{$circulation ->book_name}}</td>
                                    <td>{{$circulation -> title}}</td>
                                    <td>{{$circulation ->book_price}}</td>
                                    <td>{{$circulation ->book_quantity}}</td>

                                    <td>{{$circulation ->read_status == 1 ? 'Published': 'Unpublished'}}</td>

                                    <td class="center">
                                        @if($circulation->read_status == 1)

                                            <form action="{{ route('published-book') }}" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $circulation->id }}" name="book_id">
                                                <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Published">
                                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                                </button>
                                            </form>

                                        @else

                                            <form action="{{ route('unpublished-book') }}" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $circulation->id }}" name="book_id">
                                                <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Unpublished">
                                                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                                                </button>
                                            </form>

                                            <form action="" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $circulation->id }}" name="book_id">
                                                <button type="submit" class="btn btn-info btn-sm" title="View">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        @endif

                                            <form action="{{ route('edit-book') }}" method="POST" style="display: inline;">
                                                {{ csrf_field() }}

                                                <input type="hidden" value="{{ $circulation->id }}" name="book_id">
                                                <button type="submit" class="btn btn-success btn-sm" title="Edit">
                                                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                                                </button>
                                            </form>


                                            <form action="{{ route('delete-circulation') }}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}

                                            <input type="hidden" value="{{ $circulation->id }}" name="circulation_id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This !');">
                                                <i class="fa fa-eraser" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                        </a>
                                    </td>
                                </tr>
                               <?php $i++; ?>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection