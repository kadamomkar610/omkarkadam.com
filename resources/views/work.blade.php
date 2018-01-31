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
<br><br><br>

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
• IFA Frontend in AngularJS<br>
Project Link: <a href="http://app.finpeace.co/login.html" target="_blank">http://app.finpeace.co/login.html</a> <br>
• Excel upload module using Maatwebsite library of Laravel<br>
Project Link: <a href="http://admin.finpeace.co/login" target="_blank">http://admin.finpeace.co/login</a><br>
• FinPeace webapp for mobile browser<br>
<br><br>
Company:        OELS, Dombivli<br>
Designation:    <b>Web Designer and Developer</b><br>
Duration:       March 2016 to April 2017<br>
<br>
Projects:<br>
• Platformer Game in HTML5 canvas<br>
Project link: <a href="http://test.onkarelearnings.com/m/index.html" target="_blank">http://test.onkarelearnings.com/m/index.html</a><br>
• Abhiyan Theory, Practice and Questions session <br>
Project link: <a href="http://test.onkarelearnings.com/A2/" target="_blank">http://test.onkarelearnings.com/A2/</a><br>
• Holy Rose School Website in ASP.Net<br>
Project link: <a href="http://www.holyroseschool.com/" target="_blank">http://www.holyroseschool.com/</a><br>
• Windows8 like layout using jQuery for CBSE<br>
Project link: <a href="http://cbse.onkarelearnings.com/index1.html" target="_blank">http://cbse.onkarelearnings.com/index1.html</a>
 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
