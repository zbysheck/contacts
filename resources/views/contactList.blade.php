@extends("layouts/material")

@section("content")
<ul class="demo-list-icon mdl-list">
@foreach($contacts as $contact)
    <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">person</i>
        <a href="{{route('singleContact', $contact->id)}}">{{$contact->name}} {{$contact->surname}}</a><br/>
    </span>
    </li>
@endforeach
</ul>
@endsection