@component('mail::message')
    Var1:{{$data['var1']}}

    Var2:{{$data['var2']}}

    {{$variable}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
