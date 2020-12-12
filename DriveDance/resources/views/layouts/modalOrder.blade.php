@if($pricing ?? False)
  @foreach ($pricings as $pricing)
      <div class="modal fade" id="modalOrder{{$pricing->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оформить заказ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('pay') }}" method="POST" class="form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="order_id" value="{{ $pricing->id }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Фамилия</label>
                      <input type="text" class="form-control" name="fname" required  id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Имя">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Имя</label>
                      <input type="text" class="form-control" name="sname" required id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Емайл</label>
                      <input type="email" class="form-control" name="email" required id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Емайл">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="number" class="form-control" name="phone" required id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Телефон">
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary">Заказать</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    @endif