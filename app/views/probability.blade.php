@extends('layout')
@section('content')
<br /><br />
@if (isset($error))
    <div class="span4">
        <div class="alert">
            <strong>{{ $error }}</strong>
        </div>
    </div>
@endif
@if (isset($tableData[0]))
    <div class="well">
        <p><h4>Probability of drawing one of the cards</h4></p>
        <table class="table">
            <thead>
                <th>Turn</th>
                <th>Play</th>
                <th>Draw</th>
            </thead>
            <tbody>
            @foreach ($tableData[0] as $idx => $row)
                <tr>
                    <td>{{ $idx }}</td>
                    <td>{{ $tableData[0][$idx] }}%</td>
                    <td>{{ $tableData[1][$idx] }}%</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif
@stop