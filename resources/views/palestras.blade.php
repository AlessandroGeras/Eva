@extends("layouts.main")

@section("title","Palestras")

@section("corpo")
<x-palestras.palestras_title />

<x-palestras.timeline :palestras="$palestras" :months="$months" :search="$search"/>
@endsection