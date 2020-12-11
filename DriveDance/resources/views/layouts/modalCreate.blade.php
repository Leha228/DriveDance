
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Добавить новость</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin_create_news') }}" method="POST" class="form">
          @csrf
          <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Тема</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Тема">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Дата</label>
                <input type="date" class="form-control" name="date" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Дата">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Описание</label>
                <input type="text" class="form-control" name="description" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Описание">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Добавить</button>
          </div>
        </form>
      </div>
    </div>
  </div>