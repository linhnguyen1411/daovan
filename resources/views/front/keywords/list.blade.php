@extends('front.layout.index')
@section('content')
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-lg-4">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="keywords/add">Add</a></li>
            </ul>
        </div>
        <span class="label label-primary">Chọn ngành học đi</span>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <select class="form-control" name="nganh" id="nganh" style="width: 400px">
            @foreach($nganh as $n)
                @if($n->id == session('id'))
                    <option value="{{$n->id}}" selected>{{$n->nganhhoc}}</option>
                @else
                    <option value="{{$n->id}}">{{$n->nganhhoc}}</option>
                @endif
            @endforeach
        </select>
        <div class="table-responsive">
            <table id="table" class="display table-responsive" width="100%">
                <thead>
                </thead>
            </table>
        </div>
        <div class="table-responsive">
            {{--<table class="table" id="test">--}}
            {{--<thead>--}}
            {{--<tr>--}}
            {{--<th>ID</th>--}}
            {{--<th>Keywords</th>--}}
            {{--<th>Ngành</th>--}}
            {{--<th>Created_at</th>--}}
            {{--<th>Edit_ad</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
            {{--<td></td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
            {{--</table>--}}
            <table id="example" class="display" width="100%"></table>
        </div>
        <div class="pagination pull-right">
            <ul class="pagination">
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
@endsection
@section('script')
    <script>

        $(document).ready(function () {
            $("#nganh").change(function () {
                var nganh = $(this).val();
                var token = $("input:first").val();
                $.get("keywords/list/" + nganh, function (data) {
                    $('#example').DataTable( {
                        data: data,
                        columns: [
                            { title: "Id" },
                            { title: "Keyword" },
                            { title: "Ngành" },
                            { title: "Create." },
                            { title: "Update" }
                        ]
                    } );
                    //$("#test").html(data);
                });
            });
        });

    </script>
@endsection