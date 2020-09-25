@component('mail::message')
# Alterar Senha

Clique no botão abaixo, para alterar sua senha.

@component('mail::button', ['url' => 'http://localhost:4200/response-password-reset'])
Redefinir Senha
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
