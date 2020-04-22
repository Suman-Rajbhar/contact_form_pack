@component('mail::message')
# Hi!, Here is a Message from {{ $fullname }}
<p>{{ $message }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
