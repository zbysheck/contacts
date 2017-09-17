@extends("layouts/material")

@section("content")

    <ul class="demo-list-icon mdl-list">
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
                {{$contact->name}}
                {{$contact->surname}}
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">phone</i>
                {{$contact->phone}}
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">mail</i>
                {{$contact->mail}}
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">event</i>
                {{$contact->birth}}
            </span>
        </li>
@if(Auth::user())
<a href="{{route('contactEdit', $contact->id)}}">edit user</a><br/>

@endif
    </ul>
@endsection