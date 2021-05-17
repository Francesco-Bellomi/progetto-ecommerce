@props(['value'])

@switch($value)
    @case('UNKNOWN')
    <span class="fw-bold text-alert"> {{$value}} </span>
        @break
    @case('UNLIKELY')
    <span class="fw-bold text-success"> {{$value}} </span>
        @break
    @case('VERY_UNLIKELY')
    <span class="fw-bold text-success"> {{$value}}</span>
        @break
    @case('POSSIBLE')
    <span class="fw-bold text-warning"> {{$value}}</span>
        @break
        @case('LIKELY')
    <span class="fw-bold text-danger"> {{$value}}</span>
        @break
        @case('VERY_LIKELY')
    <span class="fw-bold text-danger"> {{$value}}</span>
        @break
@endswitch