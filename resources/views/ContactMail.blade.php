@component('mail::message')
# A new Contact Us Mail

First name : {{$data['first_name']}}

Last Name: {{$data['last_name']}}

Phone: {{$data['phone']}}

Email: {{$data['email']}}

### Message

{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
