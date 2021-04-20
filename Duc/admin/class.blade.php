@extends('front.admin.master1')

@section('title', 'Classes')


@section('body')
    <div class="content">

        <div class="container">
            <h2 class="mb-5">Classes</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a class="btn btn-info {{ (request()->segment(1) == 'addCourse') ? 'active' : '' }}" href="addcourse" id="addRow">
                            Add New
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive custom-table-responsive">

                <table class="table custom-table">
                    <thead>
                    <tr role="row">

                        <th scope="col">
                            <label class="control control--checkbox">
                                <input type="checkbox"  class="js-check-all"/>
                                <div class="control__indicator"></div>
                            </label>
                        </th>

                        <th scope="col">Order</th>
                        <th scope="col">Name</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Education</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr scope="row">
                        <th scope="row">
                            <label class="control control--checkbox">
                                <input type="checkbox"/>
                                <div class="control__indicator"></div>
                            </label>
                        </th>
                        <td>
                            1392
                        </td>
                        <td><a>James Yates</a></td>
                        <td>
                            Web Designer
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>+63 983 0962 971</td>
                        <td>abc@gmail.com</td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr class="active">
                        <th scope="row">
                            <label class="control control--checkbox">
                                <input type="checkbox" checked="" />
                                <div class="control__indicator"></div>
                            </label>
                        </th>

                        <td>4616</td>
                        <td><a>Matthew Wasil</a></td>
                        <td>
                            Graphic Designer
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>+02 020 3994 929</td>
                        <td>aaa@gmail.com</td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr>
                        <th scope="row">
                            <label class="control control--checkbox">
                                <input type="checkbox"/>
                                <div class="control__indicator"></div>
                            </label>
                        </th>

                        <td>9841</td>
                        <td><a>Sampson Murphy</a></td>
                        <td>
                            Mobile Dev
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>+01 352 1125 0192</td>
                        <td>Senior High</td>
                    </tr>
                    <tr class="spacer"><td colspan="100"></td></tr>
                    <tr>
                        <th scope="row">
                            <label class="control control--checkbox">
                                <input type="checkbox"/>
                                <div class="control__indicator"></div>
                            </label>
                        </th>

                        <td>9548</td>
                        <td><a>Gaspar Semenov</a></td>
                        <td>
                            Illustrator
                            <small class="d-block">Far far away, behind the word mountains</small>
                        </td>
                        <td>+92 020 3994 929</td>
                        <td>bbb@gmail.com</td>
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
