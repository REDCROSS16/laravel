@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('email confirm panel') }}</div>
                    <div class="card-body">
                          @if (\Illuminate\Support\Facades\Auth::user()->email_status == 1)
                              <h5> Ваш эмейл подтвержден!</h5>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
