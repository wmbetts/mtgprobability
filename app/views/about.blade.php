@extends('layout')
@section('content')
<div class="container">
    <div class="span4">
        <div class="row">
            <p><h4>What is MTGProbability.com?</h4></p>
            <p>This is a simple tool that will tell you the probability of drawing or not drawing a card by a turn.</p>
        </div>
        <div class="row">
            <p><h4>How does this work?</h4></p>
            <p>Hypergeometric distribution</p>
        </div>
        <div class="row">
            <p><h4>Why is this knowledge useful?</h4></p>
            <p>Two of the most common uses for probability in Magic: The Gathering are building a proper mana base or
               knowing what to run less than 4 copies of. Another use is determining if your opponent particular line
               of play. For example you're on turn 10 and your opponent is playing a standard tier one deck. You know
               there are 6 counter spells in the deck. They have played 4 already. You can kill them this turn with
               a direct damage spell. What is the probability of your opponent having one of the two remaining
               counter spells?</p>
        </div>
    </div>
</div>
@stop