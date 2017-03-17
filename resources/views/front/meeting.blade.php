@extends('front.layout.index')
@section('content')
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-lg-4">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="keywords">New Meeting</a></li>
                <li role="presentation"><a href="#">List</a></li>
                <li role="presentation"><a href="#">Management</a></li>
            </ul>
        </div>

        <form class="form-horizontal" active="meeting" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">For what?:</label>
                <div class="col-md-4 pull-left">
                    <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề họp">
                </div>
            </div>
            <div class="form-group">
                <label for="place" class="col-lg-2 control-label">Place :</label>
                <div class="col-md-4 pull-left">
                    <input type="text" class="form-control" id="place" placeholder="Nhập tiêu đề họp">
                </div>
            </div>
            <div class="checkbox" style="padding-left: 200px">
                <label><input type="checkbox" value="">Phạm Việt Hoàng Dũng</label>
            </div>
            <div class="checkbox" style="padding-left: 200px">
                <label><input type="checkbox" value="">Nguyễn Phan Hoàng Linh</label>
            </div>
            <div class="checkbox" style="padding-left: 200px">
                <label><input type="checkbox" value="">Nguyễn Ngọc Minh</label>
            </div>
            <div class="checkbox" style="padding-left: 200px">
                <label><input type="checkbox" value="">Lê Đức Duy</label>
            </div>
            <div class="checkbox" style="padding-left: 200px">
                <label><input type="checkbox" value="">Nguyễn Hữu Chính</label>
            </div>
            </br>

            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Main of content :</label>
                <div class="col-md-4 pull-left">
                    <textarea class="form-control" id="title" placeholder="Nhập tiêu đề họp" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" id="btn" class="btn btn-primary" >Submit</button>
        </form>
    </div>

@endsection