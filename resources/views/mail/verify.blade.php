<x-mail::message>
# Bienvenue {{ $user->name }} dans la plaetforme e-learning de boumerdes !

Vérifier Votre Adresse électronque :

<x-mail::button :url=$url >
Vérifier
</x-mail::button>

Cordialement, <br>
Merci.<br>

Si vous rencontrez des problèmes, veuillez cliquez sur le lien suivant : [Cliquez Ici]({{ $url }})

{{ config('app.name') }}.
</x-mail::message>
