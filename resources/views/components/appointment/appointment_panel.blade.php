{{--Página Consulta--}}

@php
$time = strtotime("$appointment->date");
$day = date('d', $time);
$month = date('n', $time);
$month_pt_BR = $months[$month];
@endphp
<div class="-mt-24 inline-block w-full text-black text-center lg:mt-0 dark:text-gray-200" id="appointment">
    {{$slot}}
    <div class="my_events mt-5 text-xs text-center dark:text-gray-200 sm:text-base">
        <div><span class="text-xs font-bold sm:text-xl">Consulta {{$day}} de {{$month_pt_BR}}</span><br>
        <span class="text-xs sm:text-lg">Dr./Dra. {{$appointment->professional}}</span></div>
        <div class="appointment_background dark:appointment_background_darkmode">
            <div>{{$appointment->appointment}}</div>
        </div>
        <div>
            @if ($appointment->link)
            Material de apoio <br>
            &#128279;
            <a class="underline" href="{{$appointment->link}}" target="_blank">{{$appointment->link}}</a>

            @else
            &#128279; Não há material de apoio
            @endif
            <br><br>
        </div>
    </div>
</div>