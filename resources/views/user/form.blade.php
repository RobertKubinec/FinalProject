<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>

<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="name">Meno</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Zadajte meno"
               value="{{ old('name', @$model->name) }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Zadajte e-mail"
               value="{{ old('email', @$model->email) }}">
    </div>
    <div class="form-group">
        <label for="password">Heslo</label>
        <input type="password" class="form-control" id="password" name="password"   placeholder="Zadajte heslo"
        value="{{ old('password', @$model->password) }}">
        <small id="emailHelp" class="form-text text-muted">S nikým nezdieľajte svoje heslo!</small>
    </div>
    <div class="form-group">
        <label for="password">Potvrdenie hesla</label>
        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Potvrďte heslo"
        value="{{ old('password', @$model->password) }}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn-primary form-control">
    </div>
</form>
