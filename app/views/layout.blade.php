<!DOCTYPE html>
<html>
<head>
    <title>MTGProbability.com</title>
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css') }}
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">MTGProbability</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
        </ul>
        <form class="navbar-form navbar-left" role="search" action="/" method="post">
            <div class="form-group">
                @if (isset($deckSize))
                    <input name="decksize" id="decksize" type="text" class="form-control" value="{{ $deckSize }}" placeholder="Deck Size" />
                @else
                    <input name="decksize" id="decksize" type="text" class="form-control" placeholder="Deck Size" />
                @endif
            </div>
            <div class="form-group">
                @if (isset($searchCard))
                    <input name="cardcopies" id="cardcopies" type="text" class="form-control" value="{{ $searchCard }}" placeholder="Identical Card Total" />
                @else
                    <input name="cardcopies" id="cardcopies" type="text" class="form-control" placeholder="Identical Card Total" />
                @endif
            </div>
            <div class="form-group">
                @if (isset($numberOfTurns))
                    <input name="maxturns" id="maxturns" type="text" class="form-control" value="{{ $numberOfTurns }}" placeholder="Number of Turns" />
                @else
                 <input name="maxturns" id="maxturns" type="text" class="form-control" placeholder="Number of Turns" />
                @endif
            </div>
            <button type="submit" class="btn btn-default">Calculate</button>
        </form>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container">
    @yield('content')
</div>
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') }}
    {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js') }}
</body>
</html>