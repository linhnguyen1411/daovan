@extends('front.layout.index')
@section('content')
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-lg-4">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="keywords/list">List Keywords</a></li>
            </ul>
        </div>
        <form active="keywords" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <span class="label label-primary">Chọn ngành học đi</span>
            <select class="form-control" name="nganh" id="nganh" style="width: 400px">
                @foreach($nganh as $n)
                    @if($n->id == session('id'))
                        <option value="{{$n->id}}" selected>{{$n->nganhhoc}}</option>
                    @else
                        <option value="{{$n->id}}">{{$n->nganhhoc}}</option>
                    @endif
                @endforeach
            </select>
            <div class="form-group" id="loading">
                <label for="exampleInputFile">Keywords input</label></br>
                <input type="text" id="keywords" name="keywords">
            </div>
            <button type="submit" id="btn" class="btn btn-primary">Submit</button>
        </form>
        @if(count($errors) > 0)
            <div class="alert alert-danger" style="width:30%">
                @foreach($errors->all() as $err)
                    {{ $err }}<br />
                @endforeach
            </div>
        @endif
        <div class="output">
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#nganh').change(function () {
                var nganh = $(this).val();
            });
        });
    </script>

@endsection