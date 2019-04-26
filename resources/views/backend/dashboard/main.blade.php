@extends('backend.layouts.master')

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <form action="index_submit" method="get">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                            class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
                    {{ __('Home Website') }} </h3>
            </div>
            <div class="panel-body">
               {{ __('This is website tourist') }}
            </div><!-- panel body -->
        </div>
    </form>
</div><!-- content -->
@endsection
