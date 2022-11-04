@extends("layouts.main")

@section("title","Consultas")

@section("corpo")

<x-consulta.consultas_painel :user="$user" :consulta="$consulta" :months="$months"/>

@endsection