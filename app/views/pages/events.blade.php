@extends('layouts.master')

@section('content')
<div class="container e3mod-box">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 about-title">
            <h1><span class="white-e3">Events @</span> <span class="orange-e3">E3 Modern</span> <span class="white-e3">and</span> <span class="pink-booze">The Boozetique</span></h1>
        </div>
        <div class="col-md-6 col-md-offset-1 text-body-e3">
            <iframe src="https://www.google.com/calendar/embed?src=gsgnqie35fm3hec5fpt4762kb0%40group.calendar.google.com&ctz=America/Denver" class="calander-iframe" frameborder="0" scrolling="no"></iframe>
        </div>

        <div class="col-md-5  form-body-e3">
            <h2>Request for use of <span class="orange-e3">Venue</span></h2> 
            {{ Form:: open(array('url' => 'contact_request'))}}
            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>

            <div class='form-group'>
                {{Form:: label('first_name', 'First Name*:')}}
                {{Form:: text('first_name', '')}}
            </div>

            <div class='form-group'>
                {{Form:: label('last_name', 'Last Name*:')}}
                {{Form:: text('last_name', '')}}
            </div>

            <div class='form-group'>
                {{Form:: label('phone_number', 'Phone Number:')}}
                {{Form:: text('phone_number', '', array('placeholder' => '8015555555'))}}
            </div>

            <div class='form-group'>
                {{Form:: label('email', 'E-mail Address*:')}}
                {{Form:: text('email', '', array('placeholder' => 'me@example.com'))}}
            </div>

            <div class='form-group'>
                {{Form:: label('subject', 'Subject:')}}
                {{Form:: text('subject', '')}}
            </div>

            <div class='form-group'>
                {{Form:: label('message', 'Message*:')}}
                {{Form:: textarea('message', '')}}
            </div>

            <div class='form-group'>
                {{Form::reset('Clear', array('class' => 'clear-button'))}}
                {{Form::submit('Send', array('class' => 'send-button'))}}
            </div>

            {{Form::hidden('route', 'events')}}
            {{Form::honeypot('winnie', 'my_time')}}

            {{Form:: close()}}            
        </div>

        <div class="row">

        </div>
    </div>
</div>
@stop