<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="title">Nadpis</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Zadaj nadpis">

    </div>
    <div class="form-group">
        <label for="article">Text</label>
        <input type="text" class="form-control" id="article" name="article"
               placeholder="Zadaj text">

    </div>
    <div class="form-group">
        <label for="imageLink">Načítanie obrázka</label>
        <input type="text" class="form-control" id="imageLink" name="imageLink"
               placeholder="Zadaj text">
    </div>
    <div class="form-group">
        <input type="submit" class="btn-primary form-control">
    </div>
</form>

