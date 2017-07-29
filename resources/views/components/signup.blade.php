<form method="post" action="/signup/new">
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input class="form-control" placeholder="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input class="form-control" placeholder="lastname">
  </div>
  <div class="form-group">
    {{ csrf_field() }}
    <input type="submit" class="btn btn-default">
  </div>
</form>
