@extends('front.layout.index')
@section('content')
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-lg-4">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="keywords/add">Keywords</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
        </div>

        <form active="index" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="docx" id="fileUpload">
                <p class="help-block">Chỉ chọn file có định dạng docx nhé ! file khác không có tác dụng gì đâu :]]~</p>
            </div>
            <button type="submit" id="btn" class="btn btn-primary">Submit</button>
        </form>
        @if(isset($_Post))
            <div id="fountainG">
                <div id="fountainG_1" class="fountainG"></div>
                <div id="fountainG_2" class="fountainG"></div>
                <div id="fountainG_3" class="fountainG"></div>
                <div id="fountainG_4" class="fountainG"></div>
                <div id="fountainG_5" class="fountainG"></div>
                <div id="fountainG_6" class="fountainG"></div>
                <div id="fountainG_7" class="fountainG"></div>
                <div id="fountainG_8" class="fountainG"></div>
            </div>
        @endif
        <div class="output">
            @if(count($errors) > 0)
                <div class="alert alert-danger" style="width:30%">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br />
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                <div class="alert alert-success">
                    {{session('content')}}
                </div>
                <div class="alert alert-success">
                    {{session('convert')}}
                </div>
            @endif
        </div>
    </div><!-- /.container -->

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
