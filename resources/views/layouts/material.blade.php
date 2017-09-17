
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contacts</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/material.min.css">
    <script src="/js/jquery.min.js"></script>
    <style>
        #new-contact {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }


        .demo-ribbon {
            width: 100%;
            height: 40vh;
            background-color: #3F51B5;
            flex-shrink: 0;
        }

        .demo-main {
            margin-top: -35vh;
            flex-shrink: 0;
        }

        .demo-header .mdl-layout__header-row {
            padding-left: 40px;
        }

        .demo-container {
            max-width: 1600px;
            width: calc(100% - 16px);
            margin: 0 auto;
        }

        .demo-content {
            border-radius: 2px;
            padding: 80px 56px;
            margin-bottom: 80px;
        }

        .demo-layout.is-small-screen .demo-content {
            padding: 40px 28px;
        }

        .demo-content h3 {
            margin-top: 48px;
        }

        .demo-footer {
            padding-left: 40px;
        }

        .demo-footer .mdl-mini-footer--link-list a {
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Contacts</span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/list') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                            @endauth
                    </div>
                @endif
            </div>
        </div>
    </header>
    <div class="demo-ribbon"></div>
    <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                @section('content')
                @show
            </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
            <div class="mdl-mini-footer--left-section">
                <ul class="mdl-mini-footer--link-list">
                    <li><a href="https://github.com/zbysheck/">Zbigniew Kisly 2017</a></li>
                </ul>
            </div>
        </footer>
    </main>
</div>
@if(Auth::user())
<a href="/new" target="_blank" id="new-contact" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">New Contact</a>
@endif
<script src="/js/material.min.js"></script>
<script>
    $("#mail").blur(function(){
        var mail = $("#mail").val();
        var url = "/exists/" + mail;
        var patt = new RegExp("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$");
        var patternMatch = patt.test(mail);
        if(patternMatch) {
            $("#loading").removeClass("hidden");
            $.ajax({
                    url: url,
                    success: function (result) {
                        $("#loading").addClass("hidden");
                        if (result == "0") {
                            $("#right").removeClass("hidden");
                        } else {
                            $("#wrong").removeClass("hidden");
                        }
                    }
                }
            );
        }
    });
</script>
</body>
</html>
