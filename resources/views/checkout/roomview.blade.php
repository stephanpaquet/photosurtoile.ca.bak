@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <h1>{{ __('checkout.roomview_title') }}</h1>
    </div>
@endsection

@section('javascript')
    @parent
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
