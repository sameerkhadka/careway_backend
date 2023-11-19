@foreach($data as $key=>$value)
    @if($loop->first) @continue @endif
    <p><strong>{{ucwords(str_replace("_", " ", $key))}}</strong> : {{$value}}</p>
@endforeach 