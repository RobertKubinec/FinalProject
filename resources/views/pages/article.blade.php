@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Príspevky používateľov</h1>
        </div>
    </div>
    <div class="container">
        <a class="btn btn-success" href="javascript:void(0)" id="createNewArticle">Vytvor nový príspevok</a>
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>P. č.</th>
                <th>Tvoj komentár</th>
                <th>Prezývka</th>
                <th width="300px">Možnosti</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="container, modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="articleForm" name="articleForm" class="form-horizontal">
                        <input type="hidden" name="article_id" id="article_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Komentár</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" id="title" name="title"
                                          placeholder="Svoj komentár vlož sem" value="" required="">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Prezývka</label>
                            <div class="col-sm-12">
                                <input id="author" name="author" required="" placeholder="Sem vlož svoju prezývku"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Uložiť
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('articles.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'author', name: 'author'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            $('#createNewArticle').click(function () {
                $('#saveBtn').val("create-article");
                $('#article_id').val('');
                $('#articleForm').trigger("reset");
                $('#modelHeading').html("Vytvoriť príspevok");
                $('#ajaxModel').modal('show');
            });
            $('body').on('click', '.editArticle', function () {
                var article_id = $(this).data('id');
                $.get("{{ route('articles.index') }}" + '/' + article_id + '/edit', function (data) {
                    $('#modelHeading').html("Uprav príspevok");
                    $('#saveBtn').val("edit-article");
                    $('#ajaxModel').modal('show');
                    $('#article_id').val(data.id);
                    $('#title').val(data.title);
                    $('#author').val(data.author);
                })
            });
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Uložiť');

                $.ajax({
                    data: $('#articleForm').serialize(),
                    url: "{{ route('articles.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {

                        $('#articleForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();

                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Uložiť zmeny');
                    }
                });
            });

            $('body').on('click', '.deleteArticle', function () {

                var article_id = $(this).data("id");
                confirm("Naozaj chcete príspevok vymazať?");

                $.ajax({
                    type: "DELETE",
                    url: "{{ route('articles.store') }}" + '/' + article_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>

@endsection
