@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg border-0 mb-5 bg-white rounded">
                <div class="card-header bg-info text-white font-weight-bold">Apartments</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($plans as $plan)
                        <li class="list-group-item clearfix shadow border-0 mb-3 bg-white rounded">
                            <div class="pull-left">
                                <h5>{{ $plan->name }}</h5>
                                <h5>KSH{{ number_format($plan->cost, 2) }} monthly</h5>
                                <h5>{{ $plan->description }}</h5>
                                @if(!auth()->user()->subscribedToPlan($plan->stripe_plan, 'main'))
                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-outline-dark pull-right">Choose</a>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection