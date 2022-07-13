@component('mail::message')
# New Post , {{$post->title}}

{{$post->body}}.

@component('mail::button', ['url' => url('/')])
Home Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
