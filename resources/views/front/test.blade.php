@extends('front.layout.index')
@section('content')

    <form class="form-group" active="test" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="col-md-6">
            <strong><h3>Input field 1:</h3></strong></br>
            <textarea class="form-control" rows="7" name="txt1"></textarea>
        </div>
        <div class="col-md-6">
            <strong><h3>Input field 2:</h3></strong></br>
            <textarea class="form-control" rows="7" name="txt2"></textarea>
        </div>
        <div style="padding-left: 47%">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div class="col-md-6"><h3>Đoạn 1 nhập vào:</h3></br>
       {{$dv1}}
    </div>
    <div class="col-md-6"><h3>Đoạn 2 nhập vào:</h3></br>
        {{$dv2}}
    </div>
    <div>
    </div>
@endsection