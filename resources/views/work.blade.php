@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Work</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>

Total <b>2+ years</b> of experience in Web Designing and Development.
<br><br>


<a href="/omkar_kadam_resume" class="btn btn-success cust-download-cv" target="_blank">Download Resume</a>

<br><br>

Company:        Webcubic Technologies, Dadar.<br>
Designation:    <b>PHP Web Developer</b><br>
Duration:       November 2017 to Present<br>
<br>
Projects:<br>
• GST CRM for Seshaasai<br>
Made using Laravel 5.4, Intergrated APIs using Guzzle. <br>
• Modified Modules of CodeIgniter Project

<br><br><br>

Company:        FinPeace Technologies, Goregaon.<br>
Designation:    <b>PHP Web Developer</b><br>
Duration:       April 2017 to October 2017<br>
<br>
Projects:<br>
• IFA Frontend in AngularJS 
 <a href="http://app.finpeace.co/login.html" target="_blank">Project Link</a> <br>
• Excel upload module using Maatwebsite library of Laravel 
 <a href="http://admin.finpeace.co/login" target="_blank">Project Link</a><br>
• FinPeace webapp for mobile browser<br>
<br><br>
Company:        OELS, Dombivli<br>
Designation:    <b>Web Designer and Developer</b><br>
Duration:       March 2016 to April 2017<br>
<br>
Projects:<br>
• Platformer Game in HTML5 canvas 
<a href="http://test.onkarelearnings.com/m/index.html" target="_blank">Project link</a><br>
• Abhiyan Theory, Practice and Questions session  
<a href="http://test.onkarelearnings.com/A2/" target="_blank">Project link</a><br>
• Holy Rose School Website in ASP.Net 
<a href="http://www.holyroseschool.com/" target="_blank">Project link</a><br>
• Windows8 like layout using jQuery for CBSE 
<a href="http://cbse.onkarelearnings.com/index1.html" target="_blank">Project link</a>
 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
