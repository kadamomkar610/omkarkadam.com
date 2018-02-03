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
   
<a href="https://www.linkedin.com/in/omkark610/" class="fa fa-linkedin cust-fa" target="_blank" style="
    padding: 20px !important;
    font-size: 50px !important;
    width: 50px !important;
    text-align: center !important;
    text-decoration: none !important;
    margin: 5px 2px !important;
"></a> 
<a href="https://www.facebook.com/kadam.omkar610" class="fa fa-facebook cust-fa" target="_blank" style="
    padding: 20px !important;
    font-size: 50px !important;
    width: 50px !important;
    text-align: center !important;
    text-decoration: none !important;
    margin: 5px 2px !important;  
"></a>
<a href="https://twitter.com/omkark610" class="fa fa-twitter cust-fa" target="_blank" style="
    padding: 20px !important;
    font-size: 50px !important;
    width: 50px !important;
    text-align: center !important;
    text-decoration: none !important;
    margin: 5px 2px !important;
"></a>
<a href="https://www.instagram.com/omkark610/" class="fa fa-instagram cust-fa" target="_blank" style="
    padding: 20px !important;
    font-size: 50px !important;
    width: 50px !important;
    text-align: center !important;
    text-decoration: none !important;
    margin: 5px 2px !important;
"></a>


 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
