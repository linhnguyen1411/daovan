@extends('front.layout.index')
@section('content')
<div class="container">
    <form active="index" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <span class="label label-primary">Chọn ngành học đi</span>
            <select class="form-control" name="nganh" id="nganh">
                @foreach($nganh as $n)
                    @if($n->id == session('id'))
                        <option value="{{$n->id}}" selected>{{$n->nganhhoc}}</option>
                    @else
                        <option value="{{$n->id}}">{{$n->nganhhoc}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <span class="label label-primary">Chọn từ khóa nè</span>
            <input type="text" class="form-control" name="keywords" id="keywords"
                   placeholder="Key words liên quan tới file upload. Ví dụ như 'ăn uống', 'du lịch' ... ">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Chắc chưa?
            </label>
        </div>
        </form>
</div>
@endsection