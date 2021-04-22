@extends('front.admin.master1')

@section('title', 'Staff')

@section('style')

@endsection
@section('body')
    <div class="content">

        <div class="container">
            <h2 class="mb-5">Staff</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a class="btn btn-info {{ (request()->segment(1) == 'addProfessor') ? 'active' : '' }}" href="addprofessor" id="addRow">
                            Add New
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive custom-table-responsive">

                <table class="table custom-table">
                    <thead>
                    <tr>

{{--                        <th scope="col">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"  class="js-check-all"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}

                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joining Date</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr scope="row">
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}
                        <td>
                            <a>James Yates</a>
                        </td>
                        <td>
                            Web Designer
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>
                            Male
                        </td>
                        <td>P.H.D.</td>
                        <td>+63 983 0962 971</td>
                        <td>aaa@gmail.com</td>
                        <td>11/11/2011</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_edit" style="background: #17a2b8; border-color: #17a2b8"><i class="fa fa-edit"></i></span>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr>
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox" checked="" />--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}

                        <td><a>Matthew Wasil</a></td>
                        <td>
                            Graphic Designer
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>
                            Male
                        </td>
                        <td>B.B.A.</td>
                        <td>+02 020 3994 929</td>
                        <td>bbb@gmail.com</td>
                        <td>21/03/2020</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_edit" style="background: #17a2b8; border-color: #17a2b8"><i class="fa fa-edit"></i></span>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr>
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}

                        <td><a>Sampson Murphy</a></td>
                        <td>
                            Mobile Dev
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>
                            Male
                        </td>
                        <td>M.Com,B.Ed</td>
                        <td>+01 352 1125 0192</td>
                        <td>ccc@gmail.com</td>
                        <td>12/12/2011</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_edit" style="background: #17a2b8; border-color: #17a2b8"><i class="fa fa-edit"></i></span>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr>
{{--                        <th scope="row">--}}
{{--                            <label class="control control--checkbox">--}}
{{--                                <input type="checkbox"/>--}}
{{--                                <div class="control__indicator"></div>--}}
{{--                            </label>--}}
{{--                        </th>--}}

                        <td><a>Lolie Semenov</a></td>
                        <td>
                            Illustrator
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>
                            Female
                        </td>
                        <td>M.E.</td>
                        <td>+92 020 3994 929</td>
                        <td>ddd@gmail.com</td>
                        <td>12/04/2012</td>
                        <td>
                            <span class="btn btn-sm btn-danger btn_row_edit" style="background: #17a2b8; border-color: #17a2b8"><i class="fa fa-edit"></i></span>
                            <span class="btn btn-sm btn-danger btn_row_delete"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
        @section('script')
            <script src="front/admin/js/jquery-3.3.1.min.js"></script>
            <script src="front/admin/js/popper.min.js"></script>
            <script src="front/admin/js/bootstrap.min.js"></script>
            <script src="front/admin/js/main.js"></script>
        @endsection
    </div>
@endsection
