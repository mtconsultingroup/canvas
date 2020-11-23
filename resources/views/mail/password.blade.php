@component('mail::message')

# Ciao

Hai ricevuto questa mail perché abbiamo ricevuto una richiesta di reset password dal tuo account.

@component('mail::button', ['url' => $link])
    Reset Password
@endcomponent

Questo link di reset scadrà tra 60 minuti.

Se non hai richesto il reset della password, non fare nulla.

Grazie,<br> {{ config('app.name') }}
@endcomponent
