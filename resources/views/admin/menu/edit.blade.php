@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center w-100">
                            <h4 class="card-title">Chỉnh sửa menu</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.menu.update') }}">
                            @csrf
                            <input type="hidden" value="{{ $itemMenu->id }}" name="id">
                            <div class="form-group">
                                <label for="email">Tên menu</label>
                                <input type="text" class="form-control" required value="{{ $itemMenu->name }}"
                                    name="name">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Route</label>
                                <input type="text" class="form-control" required value="{{ $itemMenu->route }}"
                                    name="route">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Thứ tự</label>
                                <input type="text" class="form-control" required
                                    value="{{ $itemMenu->order }}"name="order">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                                <a href="{{ route('admin.menu.index') }}" class="btn bg-danger">Quay lại</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
