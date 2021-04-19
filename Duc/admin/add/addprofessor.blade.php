@extends('front.admin.master1')

@section('title', 'Add Professor')


@section('body')
    <div class="content">
        <div class="container">
            <div class="card-box">
                <div class="card-header">
                    <header>
                        <h4>Professor Information</h4>
                    </header>
                </div>

                <div class="card-body row">
                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="txtFirstName">
                            <label class="mdl-textfield__label">
                                First Name
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="txtLastName">
                            <label class="mdl-textfield__label">
                                Last Name
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="txtemail">
                            <label class="mdl-textfield__label">
                                Email
                            </label>
                            <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input flatpickr-input" type="text" id="date">
                            <label class="mdl-textfield__label">
                                Joining Date
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="password" id="txtPwd">
                            <label class="mdl-textfield__label">
                                Password
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="txtConfirmPwd">
                            <label class="mdl-textfield__label">
                                Confirm Password
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="designation">
                            <label class="mdl-textfield__label">
                                Designation
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="txtDepartment">
                            <label class="mdl-textfield__label" for="txtDepartment">
                                Department
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" id="sample2">
                            <label for="sample2" class="mdl-textfield__label">
                                Gender
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
                            <label class="mdl-textfield__label" for="text5">
                                Phone Number
                            </label>
                            <span class="mdl-textfield__error">Number required!</span>
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <input class="mdl-textfield__input flatpickr-confirm" type="text" id="dateOfBirth">
                            <label class="mdl-textfield__label">
                                Birth Date
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <textarea class="mdl-textfield__input" id="text7" rows="4"></textarea>
                            <label class="mdl-textfield__label" for="text7">
                                Address
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield txt-full-width is-upgraded" data-upgraded=",MaterialTextField">
                            <textarea class="mdl-textfield__input" id="education" rows="4"></textarea>
                            <label class="mdl-textfield__label" for="text7">
                                Education
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20">
                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" data-upgraded=",MaterialButton,MaterialRipple">
                            Submit
                            <span class="mdl-button__ripple-container">
                                <span class="mdl-ripple"></span>
                            </span>
                        </button>

                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default" data-upgraded=",MaterialButton,MaterialRipple">
                            Cancel
                            <span class="mdl-button__ripple-container">
                                <span class="mdl-ripple"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </div>
@endsection
