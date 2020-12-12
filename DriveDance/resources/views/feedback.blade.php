@extends('layouts.app')
@section('content')
    
    <div class="container mt-5">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Отзывы</h1>
        </div>

        <div class="container marketing mt-5">
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/sanya.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Александр Шандыба</h2>
                <p>Мне очень понравилось первое занятие, теперь на всех вечеринках я показываю высший пилотаж.</p>
              </div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/tolya.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Анатолий Прилипко</h2>
                <p>Хожу к вам с 4 лет, уже 15 лет к вам хожу. Вот все хожу и хожу, а результата ноль. Бывает</p>
              </div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/albina.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Альбина Хаметова</h2>
                <p>Была пару раз, уютно у вас, конфеты вкусные. Учат очень хорошо, получаеться не всегда, точнее никогда не получаеться.</p>
              </div>
        </div>

        <div class="container marketing mt-5">
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/dimon.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Дмитрий Егоров</h2>
                <p>Преодолеваю далекий путь, чтобы добраться к вам, но оно того стоит. Хорошие хореографы преподают, есть о чем с ними поговорить.</p>
              </div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/denis.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Денис Казаев</h2>
                <p>Хорошо, что когда опаздываешь не ругают. А опаздываю я очень часто, и бывает на все занятие.</p>
              </div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/vova.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2 class="mt-2">Владимир Ломакин</h2>
                <p>Можно  побуду тут.</p>
              </div>
        </div>

    </div>

@endsection