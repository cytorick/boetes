@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Openstaande boetes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Aantal boetes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Totaal bedrag</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            @foreach($fines as $fine)
                <div class="col-md-6">
                    <a href="{{ route('boetes.show') }}">
                        <div class="card mb-3 fine-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title"><b>{{ $fine->reason }}</b></h5>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        @if($fine->payed == 1)
                                            <h5><span class="badge rounded-pill bg-success">{{ $fine->price }}</span>
                                            </h5>
                                        @else
                                            <h5><span class="badge rounded-pill bg-danger">{{ $fine->price }}</span>
                                            </h5>
                                        @endif
                                    </div>

                                    <div class="col-md-4 text-start">
                                        <p class="card-text"><b>Team:</b> {{ $fine->team_id }}</p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <p class="card-text"><b>Trainer:</b> {{ $fine->team_id }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="card-text">
                                            <b>Datum:</b> {{ Carbon\Carbon::parse($fine->created_at)->format('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
