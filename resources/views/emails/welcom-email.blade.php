@component('mail::message')

<h1> Bienvenue sur Class'Up, {{ $user->surname }}</h1>


On est ravi que tu nous ais rejoins :).

{{--
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
--}}

Plein de réussite ;),<br>
Team Class'Up
@endcomponent
