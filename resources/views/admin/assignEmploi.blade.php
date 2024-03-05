@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #f2f2f2;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <th>jour</th>
                <th>horaire</th>
                <th>action</th>
            </thead>
            <tbody>
            @php
                $allHasProfId = true;
            @endphp
                @foreach($desponibilities as $dispo)
                    @if(!$dispo->t8_10 && !$dispo->t10_12 && !$dispo->t14_16 && !$dispo->t16_18 )
                        @continue
                    @endif
                    @if( $dispo->professeur_id === null)
                        @php
                            $allHasProfId = false;
                        @endphp
                    @endif
                    <tr>
                        <td>{{ $dispo->jour }}</td>
                        <td>
                            {{ $dispo->t8_10?  '8-10':'' }}
                            {{ $dispo->t10_12? '10-12':'' }}
                            {{ $dispo->t14_16? '14-16':'' }}
                            {{ $dispo->t16_18? '16-18':'' }}
                        </td>

                        <td>
                            <form action="{{route('update.classe')}}" method="POST">
                                @csrf
                                <label>
                                    <input type="hidden" value="{{$dispo->id}}" name="dispo">
                                    <select name="classe" class="form-control">
                                        <option value="null">Sélectionnez votre classe</option>
                                        @foreach( $professeur as $prof )
                                            <option
                                                value="{{ $prof->id }}"
                                                @if($dispo->professeur_id == $prof->id)
                                                    {{'selected'}}
                                                @endif
                                            >
                                                {{ $prof->fillier .' | '. $prof->semestre.' | ' . $prof->module }}
                                            </option>
                                        @endforeach
                                    </select>
                                </label>
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($allHasProfId)
            <a href="{{ route('emploi.generate') }}" class="btn btn-success">Generate Emploi</a>
        @endif

    </div>
@endsection

@section('styles')
    <style>
        th {
            text-align: center;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
@endsection
