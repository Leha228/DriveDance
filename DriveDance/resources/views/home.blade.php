@extends('layouts.app')

@section('content')
  

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item-next carousel-item-left">
      <img class="first-slide" height="600" width="1920" src="{{ asset('img/11.jpg') }}" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>У нас самые низкие цены.</h1>
          <p>Школа современных танцев с хореографами из Лондона. Учись у лучших! Новый курс для начинающих с 30 ноября</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('pricing') }}" role="button">Записаться прямо сейчас!</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" height="600" width="1920" src="{{ asset('img/22.jpg') }}" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>У нас самые низкие цены.</h1>
          <p>Школа современных танцев с хореографами из Лондона. Учись у лучших! Новый курс для начинающих с 30 ноября</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('pricing') }}" role="button">Записаться прямо сейчас!</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item active carousel-item-left">
      <img class="third-slide" height="600" width="1920" src="{{ asset('img/33.jfif') }}" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>У нас самые низкие цены.</h1>
          <p>Школа современных танцев с хореографами из Лондона. Учись у лучших! Новый курс для начинающих с 30 ноября</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('pricing') }}" role="button">Записаться прямо сейчас!</a></p>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Предыдущее</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Следущее</span>
  </a>
</div>


<div class="container marketing mt-5">
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/MickScott.jpg') }}" alt="Generic placeholder image" width="140" height="140">
      <h2 class="mt-2">Майк Скотт</h2>
      <p>Начав музыкальную карьеру в 1970-х годах, которая продолжается по сей день, Скотт занимается музыкой профессионально с 1980-х и хорошо известен своими радикальными изменениями в музыкальных жанрах на протяжении того, что он называет своей «якобы неортодоксальной» карьерой.</p>
    </div>
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/IvanIvanov.jpg') }}" alt="Generic placeholder image" width="140" height="140">
      <h2 class="mt-2">Иван Иванов</h2>
      <p>С 1999 по 2004 год Иван был директором и куратором Artspeak, одного из многих канадских художественных центров в Ванкувере, Британская Колумбия, а в настоящее время является заместителем директора при Британском университете Колумбия.</p>
    </div>
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/PetrDibrov.jpg') }}" alt="Generic placeholder image" width="140" height="140">
      <h2 class="mt-2">Петр Дибров</h2>
      <p>В подростковом возрасте Петр покинул Новую Зеландию и переехал в Лондон, где начал работать в кино и на телевидении. В своей кинематографической карьере Петр работал каскадером, оружейником, пиротехником, редактором, почтмейстером, продюсером и писателем.</p>
    </div>
  </div>


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Удобный зал в Drive Dance</h2>
      <p class="lead">Мы одна из немногих танцевальных школ в Москве, которая занимается обучением не в одном направлении, а сочетает несколько стилей в один импровизированный танец. Мы готовы за один курс сделать вас мастером импровизации, научить развитию танца, круто и современно двигаться (вне зависимости сколько вам лет) и научить вас правильно расслабляться под музыку.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/1.jpg') }}" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Что Вас ждет</h2>
      <p class="lead">Танцевальная школа Drive Dance входит в рейтинг самых популярных студий танца в Москве. Мы сотрудничаем с такими артистами, как Сергей Лазарев, Виктория Дайнеко, Юлия Ковальчук и многими другими. Если вы сомневаетесь в себе или наших возможностях, чтобы убедиться в своем решении мы приглашаем вас по адресу: г. Москва, м. Трубная, Трубная площадь, д.2. Так же вы всегда можете ознакомиться с отзывами о нашей школе, или посетить наш канал на YouTube, где можно просмотреть бесплатные уроки от преподавателей школы Drive Dance. Но ни один видео урок не сможет заменить атмосферы, которая присутствует в зале.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/2.jfif') }}" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Что мы предлагаем</h2>
      <p class="lead">
        <ul class="lead">
          <li>обучение современным стилям танца (хип-хоп, джаз фанк, контемпорари и хаус);</li>
          <li>занятия в просторном зале (танцевальная студия в 170 м2);</li>
          <li>удобное время занятий (утром/вечером, 1 — 3 раза в неделю);</li>
          <li>преподаватели — известные лондонские хореографы, которые сотрудничают со звездами;</li>
          <li>каждый месяц прилетают профессиональные танцоры из Лондона;</li>
          <li>через каждые 4 недели меняется преподаватель для внесения «свежего» стиля;</li>
        </ul>
        Все занятия рассчитаны на начинающих танцоров.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('img/3.jfif') }}" data-holder-rendered="true">
    </div>
  </div>
  <hr class="featurette-divider">
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

@endsection