@component('mail::message')
# Felicidades!!

Bienvinido a {{ config('app.name') }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias por registrarte {{$user->name}}
@endcomponent
