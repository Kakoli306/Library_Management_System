@extends('layouts.app');

@section('content')
    <br/>
    <hr/>
    <h1 class = "text-center text-success"> General Settings</h1>
    <hr/>

    <div class="row">
        <div class="well">

            <form action = "{{ route('save-settings') }}"  enctype="multipart/form-data" method= "POST" class = "form-horizontal">
                {{csrf_field()}}

            <div  class="form-group">
                {!! Form::label('institute_name','Institute Name',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::text('institute_name',$value = null, ['class'=>'form-control','placeholder'=>'Enter Institute name ']) !!}
                </div>
            </div>
            <br><br>

            <div   class="form-group">
                {!! Form::label('institute_address','Institute Address',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::text('institute_address',$value = null, ['class'=>'form-control','placeholder'=>'Enter Institute address ']) !!}
                </div>
            </div>
            <br><br>

            <div class="form-group">
                {!! Form::label('institute_email','Institute Email',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::email('institute_email',$value = null, ['class'=>'form-control','placeholder'=>'Enter institute email ']) !!}
                </div>
            </div>
            <br><br>

            <div class="form-group">
                {!! Form::label('institute_phone_number','Institute phone Number',['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::number('institute_phone_number',$value = null, ['class'=>'form-control','placeholder'=>'Enter institute_phone_number ']) !!}
                    <span class="text-danger"> {{$errors->has('time_zone')?$errors->first('time_zone'):' '}}</span>
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label class="control-label col-sm-3"> Logo</label>
                <div class="col-sm-9">
                    <input type="file" name="institute_logo" accept="logo/*">
                    <span class="text-danger"> {{$error->has('institute_logo')}} </span>
                </div>
            </div>
            <br><br>

            <div class="box-body">
                <div class="form-group">
                    <label for="time_zone" class="col-sm-3 control-label">Time Zone</label>
                    <div class="col-sm-9">
                        <input type="text" name="time_zone" class="form-control" id="datetimepicker4"
                               placeholder="Time Zone">
                        <span class="text-danger"> {{$errors->has('time_zone')?$errors->first('time_zone'):' '}}</span>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="">Language</label>
                <div class="col-sm-9 ">
                    <select name="language" class="form-control" id="language">
                        <option value="arabic">Arabic</option>
                        <option value="bengali">Bengali</option>
                        <option value="chinese">Chinese</option>
                        <option value="dutch">Dutch</option>
                        <option value="english" selected="selected">English (Default)</option>
                        <option value="french">French</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="hindi">Hindi</option>
                        <option value="italian">Italian</option>
                        <option value="japanese">Japanese</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="russian">Russian</option>
                        <option value="spanish">Spanish</option>
                    </select>
                    <br><br>



                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-7">
                            <h1 class = "text-center text progress-bar-success"> {!! Form::submit(' Save Settings Info',['class'=>'btn btn-success'])!!}</h1>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    </div>

    {!! Form::close() !!}


@endsection
