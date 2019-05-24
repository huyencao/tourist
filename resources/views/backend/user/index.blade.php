@extends('backend.layouts.master')

@section('title', __('label.user_title') )

@section('content')

<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"></span></a>{{ __('List news')}}</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('user.create') }}" class="btn btn-primary"> {{ __('label.add') }} </a>
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
                                        <th>{{ __('label.serial') }}</th>
                                        <th>{{ __('label.image') }}</th>
                                        <th>{{ __('label.user.username') }}</th>
                                        <th>{{ __('label.user.fullname') }}</th>
                                        <th>{{ __('label.user.email') }}</th>
                                        <th>{{ __('label.user.role') }}</th>
                                        <th>{{ __('label.manipulation') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $key => $user)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><img src="{{ asset($user->media->link_url) }}" alt="" class="image">
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->fullname }}</td>
                                        <td>{{ $user->email }}</td>
                                        @if ($user->role == 1)
                                            <td>{{ __('Admin') }}</td>
                                        @elseif ($user->role == 2)
                                            <td>{{ __('Manager') }}</td>
                                        @else
                                            <td>{{ __('Customer') }}</td>
                                        @endif
                                        <td>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="glyphicon glyphicon-pencil"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- panel body -->
    </div>
</div>

@endsection
