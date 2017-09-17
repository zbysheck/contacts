
@foreach($contacts as $contact)



    <a href="{{route('singleContact', $contact->id)}}">{{$contact->name}} {{$contact->surname}}</a><br/>



@endforeach
