@component('mail::message')
welcome
you have a new class {{$name}}

@component('mail::button',['url' => 'https://plumarschool.com'])
    click here 
@endcomponent
@endcomponent

