@extends('layouts.dashboard')

@section('header')
@endsection

@section('sidebar')
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">用户列表</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>展示 <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                    <option value="10">10</option><option value="25">25</option><option value="50">50</option>
                                    <option value="100">100</option></select> 条记录</label>
                        </div></div><div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 247px;">用户MID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 302px;">用户名</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 269px;">设备ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 213px;">客户端SID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 156px;">注册时间</th></tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{ $user->mid }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->sitemid }}</td>
                                    <td>{{ $user->sid }}</td>
                                    <td>{{ date("Y-m-d H:i:s",$user->mtime) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    {{ $users->links() }}
                </div>
        </div>
        <!-- /.box-body -->
    </div></div>
@endsection

@section('footer')
@endsection

@section('scripts')
@endsection