@component('mail::message')
    # Order Shipped

    Your order has been shipped!

    @component('mail::button', ['url' => url('simple')])
        View Order
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent