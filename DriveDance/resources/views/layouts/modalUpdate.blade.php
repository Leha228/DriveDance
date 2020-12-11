@if($post ?? False)
  @foreach ($posts as $post)
      <div class="modal fade" id="modalUpdate{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Обновить новость</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('admin_update_news') }}" method="POST" class="form">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="update_id" value="{{ $post->id }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Тема</label>
                      <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Тема">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Дата</label>
                      <input type="date" class="form-control" name="date" value="{{ $post->date }}" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Дата">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Описание</label>
                      <input type="text" class="form-control" name="description" value="{{ $post->description }}" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Описание">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    @endif