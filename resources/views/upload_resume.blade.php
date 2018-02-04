@extends('layouts.app')

@section('content')
  
Upload Resume


{!! Form::open(['action' => 'ResumeController@store','files' => true]) !!}


 
<div class="col-xs-12 col-md-12 form-group "   >
    <!-- PAN CARD  -->
    <div class="col-xs-12">
        <label class="">Upload </label>
    </div>
    <div class="col-xs-12 col-sm-6 ">
        <input type="file" name="file" class="form-group" >
    </div>
 
</div>

 
<div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <!--submit button-->
    <button type="submit" name='submit' class="btn btn-success col-xs-6">Submit</button>
</div>



{!! Form::close() !!}


@endsection
