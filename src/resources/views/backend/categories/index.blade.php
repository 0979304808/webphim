@extends('backend.layouts.master')
@section('after-script')
    {{ HTML::script('backend/js/category/updateAnddelete.js') }}
@endsection
@section('main')
    <div class="row py-3">
        <div class="col-sm-6">
            <h2 class="m-0">Thể loại</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div>
    </div>


    <div class="col-xs-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                <span>{{ session('success') }}</span>
            </div>
        @endif
    </div>
    <div class="col-xs-4">
        <div class="x_panel">
            <div class="x_title">
                {{--                <h2>Thêm danh mục mới</h2>--}}
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                {{--                <form action="{{ route('backend.category.create') }}" method="POST" data-parsley-validate--}}
                {{--                      class="form-horizontal form-label-left">--}}
                {{--                    @csrf--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="name">Tên danh mục<span class="required text-danger">*</span></label>--}}
                {{--                        <input type="text" id="" name="name" required="required"--}}
                {{--                               class="form-control col-md-7 col-xs-12" placeholder="Tên danh mục">--}}
                {{--                    </div>--}}
                {{--                    <div class="form-group">--}}
                {{--                        <button type="submit" class="btn btn-success btn-add-role pull-right">Thêm</button>--}}
                {{--                    </div>                    --}}
                <div class="form-group">
                    <button class="btn btn-success btn-add-category" data-toggle="modal" data-target="#exampleModal">Thêm mới</button>
                </div>
                {{--                </form>--}}
            </div>
        </div>
    </div>
    <div class="col-xs-8">
        <div class="x_panel">
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table table-bordered">
                        <thead>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Slug</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach ($categories as $key => $category)
                            <tr class="record_jlpt{{ $category->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-primary btn-show-category"
                                            data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                            data-toggle="modal" data-target="#exampleModal"><i
                                            class="fa fa-trash-o"></i> Sửa
                                    </button>

                                    <button class="btn btn-sm btn-danger btn-delete-category"
                                            data-id="{{ $category->id }}" data-name="{{ $category->name }}"><i
                                            class="fa fa-trash-o"></i> Xoá
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--Phân trang-->
                    @include('backend.includes.pagination', ['data' => $categories])
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="categoryModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModal">Thêm mới thể loại</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
{{--                <form action="{{ route('backend.category.create') }}" method="POST" data-parsley-validate--}}
{{--                      class="form-horizontal form-label-left">--}}
{{--                    @csrf--}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Tên danh mục<span class="required text-danger">*</span></label>
                            <input type="text" name="name" id="text-input" required="required" class="form-control"
                                   placeholder="Tên danh mục"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-success btn-save-category pull-right">Lưu</button>
                    </div>
{{--                </form>--}}
            </div>
        </div>
    </div>
@endsection
