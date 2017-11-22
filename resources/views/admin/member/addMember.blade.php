@extends('layouts.app');

@section('content')
<br/>
    <hr/>
    <h1 class = "text-center text-success"> Add Member Form</h1>
    <hr/>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

<div class="row">
    <div class="well">
        {!! Form::open(['route'=>'new-member','method'=>'post','class'=>'form-horizontal'])!!}

        <div  class="form-group">
            {!! Form::label('member_name','Member Name',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">
                {!! Form::text('member_name',$value = null, ['class'=>'form-control','placeholder'=>'Enter member name ']) !!}
            </div>
        </div>
<br><br>

        <div   class="form-group">
            {!! Form::label('member_type','Member Type',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">
                {!! Form::text('member_type',$value = null, ['class'=>'form-control','placeholder'=>'Enter member type ']) !!}
            </div>
        </div>
        <br><br>

        <div class="form-group">
            {!! Form::label('member_email','Member Email',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">
                {!! Form::email('member_email',$value = null, ['class'=>'form-control','placeholder'=>'Enter member email ']) !!}
            </div>
        </div>
        <br><br>

        <div class="form-group">
            {!! Form::label('member_phone_number','Member Phone Number',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">
                {!! Form::number('member_phone_number',$value = null, ['class'=>'form-control','placeholder'=>'Enter member phone number ']) !!}
            </div>
        </div>
        <br><br>

        <div class="form-group">
            {!! Form::label('member_status','Member Status',['class'=>'control-label col-sm-3'])!!}
            <div class="col-sm-9">
                {!! Form::select('member_status', ['1' => 'Online', '0' => 'Offline'], null, ['class'=>'form-control', 'placeholder' => 'Member Status']) !!}
            </div>
        </div>
        <br><br>



        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-7">
                <h1 class = "text-center text progress-bar-success"> {!! Form::submit(' Save Member Info',['class'=>'btn btn-success'])!!}</h1>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection
