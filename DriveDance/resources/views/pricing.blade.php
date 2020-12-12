@extends('layouts.app')
@section('content')



<div class="container mt-5">

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Стоимость занятий</h1>
    <p class="lead">Drive Dance нельзя отнести к привычным для России школам танцев. Наш стиль обучения — свобода. Современные танцы являются способом самовыражения, чему мы и стремимся научить. В нашей студии нет стандартных требований к движению, главное, это приобрести уверенность в себе, чтобы начать круто и драйвово двигаться.</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      @foreach ($pricings as $pricing)
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{ $pricing->title }}</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">{{ $pricing->price }} руб <small class="text-muted">/ {{ $pricing->time }}</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 часов</li>
            <li>1 раз в неделю</li>
            <li>Моральная поддержка</li>
            <li>Помощь в обучении</li>
          </ul>
          
          <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#modalOrder{{$pricing->id}}">{{ $pricing->info_button }}</button>
          @include('layouts.modalOrder')
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
  
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>


@endsection
