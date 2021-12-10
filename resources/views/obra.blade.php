@extends('layouts.main')

@section('title', "$name")

@section('content')

<table>
    <tr>
        <td> <img src="/images/{{$name}}.jpg" class="placeHolderObras text" style="padding-left: 50px"></td>

        <td class="titulo">Nome da Obra</td>
    </tr>
</table>

<hr class="separacao">

<div>
    <p class="text" style="padding: 0px 50px">Lorem ipsum non mattis convallis tempus ornare a, non odio iaculis fames rutrum id, elit mi sed aliquet dolor integer. lectus donec pharetra nisi consequat amet eget cras adipiscing felis turpis, quis aenean egestas fames tincidunt arcu dui vel dictum. rhoncus augue placerat erat sagittis sodales nec habitasse, fames auctor porttitor phasellus tempus dictumst, fermentum quis pellentesque potenti fames bibendum. fermentum facilisis enim orci dictumst magna inceptos phasellus ornare vestibulum, porttitor sed sociosqu torquent mi ligula sed himenaeos, ornare in at egestas cubilia ut magna egestas. amet nostra condimentum taciti risus maecenas, curabitur praesent lacus vivamus vel lorem, netus felis at commodo. </p>
</div>

@endsection
