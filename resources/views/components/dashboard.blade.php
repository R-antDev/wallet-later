@extends('layouts.app')
@section('content')

    <div class="flex gap-x-36 items-start">
        @include('partials.sidebar')
        @include('partials.balance')
        @include('partials.expenses')
    </div>
@endsection
