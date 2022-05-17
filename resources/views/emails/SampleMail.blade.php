@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
<h1>Hola</h1>
<a href="https://laravel.com/docs/9.x/mail#markdown-mailables">For More Markdown Templates Click here</a>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
