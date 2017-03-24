@extends('front.layout.index')
@section('content')
    <div class="container">
        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
        <form active="keywords/list" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-8"></div>
            <div class="col-lg-4">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="keywords/add">Add</a></li>
                </ul>
            </div>
            <div class="col-md-5">
                <span class="label label-primary">Chọn ngành học đi</span>
                @if(isset($request))
                    <select class="form-control" name="nganh" id="nganh" style="width: 400px">
                        @foreach($nganh as $n)
                            @if($n->id == $request)
                                <option value="{{$n->id}}" selected>{{$n->nganhhoc}}</option>
                            @else
                                <option value="{{$n->id}}">{{$n->nganhhoc}}</option>
                            @endif
                        @endforeach
                    </select>
                @else
                    <select class="form-control" name="nganh" id="nganh" style="width: 400px">
                        @foreach($nganh as $n)
                            @if($n->id == session('id'))
                                <option value="{{$n->id}}" selected>{{$n->nganhhoc}}</option>
                            @else
                                <option value="{{$n->id}}">{{$n->nganhhoc}}</option>
                            @endif
                        @endforeach
                    </select>
                @endif
            </div>
            <div class="col-md-7" style="padding-top: 20px">
                <button class="btn btn-primary" id="btn">Submit</button>
            </div>
        </form>
        <div>
            @if(count($kw)>0)
                <table class="table" id="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Keywords</th>
                        <th>Major</th>
                        <th>Created_at</th>
                        <th>Update_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kw as $k)
                        @if($k->id%2==0)
                            <tr class="success">
                                <td>{{$k->id}}</td>
                                <td>{{$k->keywords}}</td>
                                <td>{{$k->nganhhoc->nganhhoc}}</td>
                                <td>{{$k->created_at}}</td>
                                <td>{{$k->updated_at}}</td>
                                <td><a href="keywords/edit/{{$k->id}}" class="glyphicon glyphicon-pencil">Edit</a> </td>
                                <td><a href="keywords/delete/{{$k->id}}" class="glyphicon glyphicon-remove">Delete</a> </td>
                            </tr>
                        @else
                            <tr class="warning">
                                <td>{{$k->id}}</td>
                                <td>{{$k->keywords}}</td>
                                <td>{{$k->nganhhoc->nganhhoc}}</td>
                                <td>{{$k->created_at}}</td>
                                <td>{{$k->updated_at}}</td>
                                <td><a href="keywords/edit/{{$k->id}}" class="glyphicon glyphicon-pencil">Edit</a> </td>
                                <td><a href="keywords/delete/{{$k->id}}" class="glyphicon glyphicon-remove">Delete</a> </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination pull-right">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            @if($kw->currentPage() != 1)
                                <li>
                                    <a href="{!! $kw->url($kw->currentPage() -1) !!}&nganh={!! $request !!}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            @endif
                            @for($i=1;$i<= $kw->lastPage(); $i=$i+1)
                                @if($kw->currentPage()==$i)
                                    <li class="active"><a href="{!! $kw->url($i) !!}&nganh={!! $request !!}">{!! $i !!}</a></li>
                                @else
                                    <li><a href="{!! $kw->url($i) !!}&nganh={!! $request !!}">{!! $i !!}</a></li>
                                @endif
                            @endfor
                            @if($kw->currentPage() != $kw->lastPage())
                                <li>
                                    <a href="{!! $kw->url($kw->currentPage()+1) !!}&nganh={!! $request !!}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
        </div>

        @endif

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $("#nganh").change(function () {
                var nganh = $(this).val();
            });
        });
    </script>
@endsection