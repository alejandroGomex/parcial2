@extends('dashboard.master')

@include('dashboard.partials.validation-error')
@section('content')
    <form action="{{ route('doctor.update', $doctor->id) }}" method="post">
        @method('put')
        @include('dashboard.doctor._form')
    </form>
@endsection
