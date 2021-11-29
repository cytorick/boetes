@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @foreach($fines as $fine)
                        <div class="col-md-12">
                            <a href="{{ route('boetes.show') }}">
                                <div class="card mb-3 fine-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title"><b>{{ $fine->reason }}</b></h5>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                @if($fine->payed == 1)
                                                    <h5><span
                                                            class="badge rounded-pill bg-success">{{ $fine->price }}</span>
                                                    </h5>
                                                @else
                                                    <h5><span
                                                            class="badge rounded-pill bg-danger">{{ $fine->price }}</span>
                                                    </h5>
                                                @endif
                                            </div>

                                            <div class="col-md-4 text-start">
                                                <p class="card-text"><b>Team:</b> {{ $fine->team_id }}</p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p class="card-text"><b>Trainer:</b> {{ $fine->team_id }}</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <p class="card-text">
                                                    <b>Datum:</b> {{ Carbon\Carbon::parse($fine->created_at)->format('d F Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-md-12 text-center mb-4">
                        <a href="{{ route('boetes.index') }}">Bekijk Alles...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                        <p class="card-text"><ul>
                            <li>{{ Auth::user()->email }}</li>
                            <li>{{ Auth::user()->team_id }}</li>
                            <li>{{ Auth::user()->created_at }}</li>
                        </ul></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
