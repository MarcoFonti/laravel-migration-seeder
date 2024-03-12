@extends('layouts.app')

@section('title', 'Home Train')

@section('main-content')
    @foreach ($trains as $train)
        <div class="table-responsive m-4">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Compagnia</th>
                        <td>{{ $train->Company }}</td>
                    </tr>
                    <tr>
                        <th>Stazione di partenza</th>
                        <td>{{ $train->Departure_station }}</td>
                    </tr>
                    <tr>
                        <th>Stazione di arrivo</th>
                        <td>{{ $train->Arrival_station }}</td>
                    </tr>
                    <tr>
                        <th>Orario di partenza</th>
                        <td>{{ $train->Departure_time }}</td>
                    </tr>
                    <tr>
                        <th>Orario di arrivo</th>
                        <td>{{ $train->Arrival_time }}</td>
                    </tr>
                    <tr>
                        <th>Codice treno</th>
                        <td>{{ $train->Train_Code }}</td>
                    </tr>
                    <tr>
                        <th>Numero di carrozze</th>
                        <td>{{ $train->Number_of_Carriages }}</td>
                    </tr>
                    <tr>
                        <th>Puntualità</th>
                        <td>{{ $train->On_time }}</td>
                    </tr>
                    <tr>
                        <th>Annullato</th>
                        <td>
                            @if ($train->Cancelled == 0)
                                <i class="fa-solid fa-circle-xmark text-danger">x</i>
                            @else
                                <i class="fa-solid fa-circle-check text-success">v</i>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
@endsection
