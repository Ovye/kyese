@component('mail::message')

@component('mail::title')
Hi <strong>{{ $userFname }}</strong>,
@endcomponent

Kindly click the button below to verify your email address for your kyese account.
This will give you opportunities to make use of other features that requires email.
@component('mail::button', ['url' => $url, 'color' => 'green'])
Verify Now
@endcomponent

<br><br>
Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
