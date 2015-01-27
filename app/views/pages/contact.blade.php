@extends('layouts.master')

@section('content')
<div class="container e3mod-box">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 about-title">
            <h1><span class="white-e3">Contact</span> <span class="orange-e3">E3 Modern</span> <span class="white-e3">and</span> <span class="pink-booze">The Boozetique</span></h1>
        </div>
        <div class='col-md-4 col-md-offset-1 text-body-e3'>
            <h2>Please feel free to contact us with any questions or comments you may have!</h2>
            <h3>We would love to hear from you if...</h3>
            <ul>
                <li>You have any requests for custom furniture.</li>
                <li>You have questions about the current art or furniture displayed in our gallery.</li>
                <li>You have questions about items The Boozetique is currently carrying. (You may also view a list of our inventory > here <)</li>
                <li>You have an upcoming event and would like to use the gallery as a venue. (You may also view events scheduled > here <)</li>
                <li>You would like to listen to some music on our awesome speakers!</li>
                <li>You have feedback for us on your experience either at our gallery or on this site.</li>
                <li>You just want to say hi!</li>
            </ul>
        </div>
        <div class="col-md-4 col-md-offset-1 form-body-e3">
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

            {{Form::hidden('route', 'contact')}}
            {{Form::honeypot('winnie', 'my_time')}}

            {{Form:: close()}}            
        </div>
        
    </div>
</div>
@stop