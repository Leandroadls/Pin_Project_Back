@component('mail::message')
# {{$message->name}} has sent you a message.

The content of the message is:

{{$message->message}}

Thank you,<br>
{{ config('app.name') }}
@endcomponent
