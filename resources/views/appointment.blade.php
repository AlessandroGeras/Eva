@extends("layouts.main")

@section("title","Consultas")

@section("corpo")

<x-appointment.appointment_panel :user="$user" :appointment="$appointment" :months="$months">
    <x-navbar.darkmode />
</x-appointment.appointment_panel>

@endsection