@component('mail::message')

@component('mail::title')
Password Recovery
@endcomponent

We did received a request from you to reset your account password. Click the button below to continue.

@component('mail::button', ['url' => $url])
Reset Password
@endcomponent

<br>
** Note: ** _<small>Ignore this action if this wasn't done by you.</small>_
<br><br>

_You may copy the link below to your browser if the above button link fails._<br>
<p><a href="{{ $url }}">{{ $url }}</a></p>
<br><br>
Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
