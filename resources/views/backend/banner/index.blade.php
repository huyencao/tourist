@extends('backend.layouts.master')

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="panel-title"><a href="javascript:void(0);"
                            class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="Maximize Panel"></span></a> {{ __('Danh sách banner') }} </h3>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-primary"> {{ __('Thêm mới') }} </button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="content-row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> {{ __('STT') }} </th>
                                        <th> {{ __('Tiêu đề ')}} </th>
                                        <th> {{ __('Ảnh') }} </th>
                                        <th> {{ __('Đường dẫn') }} </th>
                                        <th> {{ __('Thời gian tạo') }} </th>
                                        <th> {{ __('Trạng thái') }} </th>
                                        <th> {{ __('Thao tác') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> {{ __('Trạng thái') }} </td>
                                        <td><img src="{{ asset(config('app.image_url') . 'thumbnail-2.jpg') }}" alt=""
                                                ></td>
                                        <td> {{ __('Table cell') }} </td>
                                        <td> {{ __('Table cell') }} </td>
                                        <td><span class="badge badge-primary"> {{ __('Hiển thị') }} </span></td>
                                        <td>
                                            <span class="glyphicon glyphicon-trash"></span>
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- panel body -->
    </div>
</div><!-- content -->
@endsection
