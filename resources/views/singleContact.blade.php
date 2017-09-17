{{$contact->name}}
{{$contact->surname}}
{{$contact->phone}}
{{$contact->mail}}
{{$contact->birth}}
@if(Auth::user())
<a href="{{route('contactEdit', $contact->id)}}">edit user</a><br/>

    @endif