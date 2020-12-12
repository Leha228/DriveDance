@extends('layouts.app')
@section('content')



<div class="container mt-5">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Расписание занятий</h1>
        <p class="lead">Drive Dance нельзя отнести к привычным для России школам танцев. Наш стиль обучения — свобода. Современные танцы являются способом самовыражения, чему мы и стремимся научить. В нашей студии нет стандартных требований к движению, главное, это приобрести уверенность в себе, чтобы начать круто и драйвово двигаться.</p>
    </div>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>День</th>
                <th>Время</th>
                <th>Продолжительность</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>09-00</td>
            <td>2 часа</td>
            </tr>
            <tr>
                <td>2</td>
                <td>11-00</td>
                <td>2 часа</td>
            </tr>
            <tr>
                <td>3</td>
                <td>13-00</td>
                <td>2 часа</td>
            </tr>
            <tr>
                <td>4</td>
                <td>16-00</td>
                <td>2 часа</td>
            </tr>
            <tr>
                <td>5</td>
                <td>19-00</td>
                <td>2 часа</td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection