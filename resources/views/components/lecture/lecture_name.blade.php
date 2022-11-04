{{--Seção do nome da Palestra na página Palestra--}}

{{--Quebra da variável da data para reformatar as informações no título--}}
@php
$time = strtotime("$lecture->date");
$day = date('d', $time);
$month = date('n', $time);
$month = $months[$month];
$hours = date('H', $time);
$minutes = date('i', $time);
$registered = false;
$inscritos = 0;
@endphp

<div id="lecture_title" class="-mt-24 inline-block w-full lg:mt-0">
  {{$slot}}
  <div class="text-center pt-6 mx-auto dark:text-gray-200">
    <div class="mb-4 underline text-xl lg:text-2xl">{{$lecture->name}}</div>    
    <span class="text-base font-bold lg:text-xl">{{$day}} de {{$month}} - {{$hours}}:{{$minutes}}</span>
  </div>
</div>
