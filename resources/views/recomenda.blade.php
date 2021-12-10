@extends('layouts.main')

@section('title', 'Recomenda')

@section('content')

<div>
    <table>
        <tr>
            <td>
                <a href="obra.html">
                    <img src="/images/doro.jpg" style="height: 900px; padding: 200px 200px 10px"/>
                </a>
            </td>

            <td>
                <a href="obra.html">
                    <img src="/images/silver.jpg" style="height: 900px; padding: 200px 60px 10px"/>
                </a>
            </td>
        </tr>

        <tr>
            <td>
                <p style="padding: 10px 400px; color: white">Dororo</p>
            </td>

            <td>
                <p style="padding: 10px 200px; color: white">Silver Spoon</p>
            </td>
        </tr>
    </table>
</div>

@endsection
