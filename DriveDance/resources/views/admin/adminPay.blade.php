<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="author" content="">
    <title>Admin</title>
</head>
@if (Auth::check())
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DriveDance</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{ route('logout') }}">Выход</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
        <div style="display: flex; justify-content: space-between; margin:0;">
            <nav class="col-md-2 d-none d-md-block  sidebar" style="flex: 3; background-color: white;">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                          <a class="nav-link active" href=" {{ route('admin') }}"> Новости </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href=" {{ route('adminPay') }}"> Заказы </a>
                      </li>
                    </ul>
                </div>
            </nav>

            <div class="mt-3" style="flex: 1;">
                <div class="row">
                  <div class="col-sm"> 
                    <h2>Список заказов</h2>
                  </div>
                </div>

                @if($pays ?? False)
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>id</th>
                            <th>order_id</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Емайл</th>
                            <th>Телефон</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pays as $pay)
                                <tr>
                                    <td>{{ $pay->id }}</td>
                                    <td>{{ $pay->order_id }}</td>
                                    <td>{{ $pay->fname }}</td>
                                    <td>{{ $pay->sname }}</td>
                                    <td>{{ $pay->email }}</td>
                                    <td>
                                        {{ $pay->phone }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Заказов пока нету</p>
                @endif  
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('layouts.modalCreate')
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
</body>
@else
<body class="text-center">    
    <form class="form-signin" action="{{ route('admin_signin') }}" method="post" style="width: 40%; margin: auto; margin-top: 100px;" >
      @csrf
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Введите данные для входа</h1>
      @if (Session::has('Info'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('Info') }}
        </div>
      @endif
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">© 2020</p>
    </form>
</body>
@endif
</html>