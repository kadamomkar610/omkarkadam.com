@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">About</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>

Hello,
<br>
I am Omkar Kadam,<br>
I am a Web Designer and Developer with 2+ years of experience.<br>
I am a Computer Science Engineer graduated from Solapur University.<br>
<br><br>
Technical Skills:<br>

Frontend Technologies: HTML5, CSS3, JavaScript, jQuery, AngularJS.<br>
Backend Technologies: PHP, Laravel, C#, ASP.NET<br>
Database: MySQL, MS SQL Server<br>
Editor and IDE: MS Visual Studio, MS SQL Server, Sublime Text.<br>
Operating System: Windows XP, 7, 8, 10, MintOS, UBUNTU 16.04 (LINUX).<br>
 
                    </p>
<br>
<a href="/omkar_kadam_resume" class="btn btn-success cust-download-cv" target="_blank">Download Resume</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
