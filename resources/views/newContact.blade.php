@extends("layouts/material")

@section("content")
    <form action="/new" method="post">
        {{ csrf_field() }}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="[A-Za-ząęźżśóćńłĄĘŹŻŚÓĆŃŁ]{3,20}" id="name" name="name">
            <label class="mdl-textfield__label" for="name">First Name</label>
            <span class="mdl-textfield__error">Only letters</span>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="[A-Za-ząęźżśóćńłĄĘŹŻŚÓĆŃŁ]{3,20}" id="surname" name="surname">
            <label class="mdl-textfield__label" for="surname">Surname</label>
            <span class="mdl-textfield__error">Only letters</span>
        </div>
        <br/>
        +48  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
             <input class="mdl-textfield__input" type="text" pattern="[0-9]{9}" id="phone" name="phone">
            <label class="mdl-textfield__label" for="phone">Phone  Number</label>
            <span class="mdl-textfield__error">9 numbers, and nothing more</span>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="mail" name="mail">
            <div id="loading" class="mdl-progress mdl-js-progress mdl-progress__indeterminate hidden"></div>
            <label class="mdl-textfield__label" for="mail">Mail Address</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
            <span id="wrong" class="hidden">mail is taken</span>
            <span id="right" class="hidden">mail is OK</span>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input datepicker" type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="birth" name="birth">
            <label class="mdl-textfield__label" for="birth">Date of Birth</label>
            <span class="mdl-textfield__error">format [yyyy-mm-dd]</span>
        </div>
        <br/>
        <input type="submit">
    </form>
@endsection