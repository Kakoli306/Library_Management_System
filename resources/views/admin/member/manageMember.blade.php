@extends('layouts.app');

@section('content')
<hr/>
    <div class="content">
        <h3>{{Session::get('message') }}</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Member Table</h4>

                        </div>
                        <div class="content table-responsive table-full-width">

                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Member Name</th>
                                <th>Member Email</th>
                                <th>Phone Number</th>
                                <th>Type</th>Number</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr class="success">
                                        <td>{{$member->id}}</td>
                                        <td>{{$member->member_name}}</td>
                                        <td>{{$member->member_email}}</td>
                                        <td>{{$member->member_phone_number}}</td>
                                        <td>{{$member->member_type}}</td>
                                        <td>{{$member->member_status == 1 ? 'Online' : 'Offline' }}</td>
                                        <td class="center">

                                            @if($member->member_status==1)

                                            <a href="{{ url('/member/online/'.$member->id) }}" data-toggle="tooltip" title="Online" class="btn btn-primary btn-sm">
                                                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </a>
                                            @else
                                                <a href="{{ url('/member/offline/'.$member->id) }}" data-toggle="tooltip" title="Offline" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                                </a>
                                                @endif

                                            <a href="{{ url('/member/edit/'.$member->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-success btn-sm">
                                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                            </a>

                                            <form action="{{ url('/member/delete/') }}" method="POST" style ="..."
                                               data-toggle="tooltip" title="Delete" >
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{$member->id}}" name="member_id">
                                                <button type="submit" name="btn" onclick="return confirm('Are u sure to delete this !!!')"class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
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
    </div>

@endsection