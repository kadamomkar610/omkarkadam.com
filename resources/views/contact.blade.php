@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>

Contact Details:<br><br>

Mobile:     9769839758<br>
Email:      omkark610@gmail.com<br>
Location:   Dombivli<br>
<br><br>
I am Social:<br>

LinkedIn:   <a href="https://www.facebook.com/kadam.omkar610" target="_blank">https://www.facebook.com/kadam.omkar610</a><br>
Facebook:   <a href="https://www.linkedin.com/in/omkark610/" target="_blank">https://www.linkedin.com/in/omkark610</a><br>
Instagram:  <a href="https://www.instagram.com/omkark610/" target="_blank">https://www.instagram.com/omkark610</a><br>
Twitter:    <a href="https://twitter.com/omkark610" target="_blank">https://twitter.com/omkark610</a><br>
 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
