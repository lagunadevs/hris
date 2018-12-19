@extends('layouts.app')
 <!-- header -->
  @include('includes/header')
  <!-- sidebar -->
  @include('includes/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Employees
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <!-- Main content -->
        <div class="container">
            <section class="content">
                <div class='col-lg-10 pl-4'>
                    {{-- @include ('errors.list') --}}

                    {{ Form::open(array('url' => 'employees', 'files' => true)) }}
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="employee_number">Employee Number
                                    <small>(Required)</small>
                                </label>
                                <input id="employee_number" type="text" name="employee_number" class="form-control" value="{{$employee->employee_number}}">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name
                                    <small>(Required)</small>
                                </label>
                                <input id="first_name" type="text" name="first_name" class="form-control" value="{{$employee->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name
                                    <small>(Required)</small>
                                </label>
                                <input id="last_name" type="text" name="last_name" class="form-control" value="{{$employee->last_name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address
                                    <small>(Required)</small>
                                </label>
                                <input id="email" type="text" name="email" class="form-control" value="{{$employee->email}}">
                            </div>
                            <span>Note: this used by employee to access their account.</span>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email">Password
                                        </label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Verify
                                        </label>
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="civil_status">Civil Status</label>
                                <select name="civil_status" class="form-control">
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Separated</option>
                                    <option>Widow</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address_line_1">Address Line 1</label>
                                <textarea class="form-control" name="address_line_1">{{$employee->address_line_1}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="address_line_2">Address Line 2</label>
                                <textarea class="form-control" name="address_line_2">{{$employee->address_line_1}}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country_id">Country</label>
                                        <select name="country_id" class="form-control">
                                            <option value="1">USA</option>
                                            <option value="2">Phillippines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="province_id">Province</label>
                                        <select name="province_id" class="form-control">
                                            <option value="1">USA</option>
                                            <option value="2">Phillippines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city_id">City</label>
                                        <select name="city_id" class="form-control">
                                            <option value="1">USA</option>
                                            <option value="2">Phillippines</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Postal Zip Code</label>
                                <input type="number" name="zipcode" class="form-control" value="{{$employee->postal_zip_code}}">
                            </div>
                            <span>Contact Number</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="work_phone_number">Work</label>
                                        <input type="text" name="work_phone_number" class="form-control" value="{{$employee->work_phone_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="home_phone_number">Home</label>
                                        <input type="text" name="home_phone_number" class="form-control" value="{{$employee->home_phone_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile_phone_number">Mobile</label>
                                        <input type="text" name="mobile_phone_number" class="form-control" value="{{$employee->mobile_phone_number}}">
                                    </div>
                                </div>
                            </div>
                            <span>Benefits</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sss">SSS Number</label>
                                        <input type="number" name="sss" class="form-control" value="{{$employee->sss_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pagibig">Pagibig Number</label>
                                        <input type="number" name="pagibig" class="form-control" value="{{$employee->pagibig_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="philhealth">PhilHealth Number</label>
                                        <input type="number" name="philhealth" class="form-control" value="{{$employee->philhealth_number}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                  <!-- Widget: user widget style 1 -->
                                  <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                                    </div>
                                    <div class="widget-user-image">
                                      <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                                    </div>
                                    <div class="box-footer">
                                        <label>Upload Image</label>
                                        <input type="file" name="profile_picture" class="form-control">
                                        <!-- /.col -->
                                      <!-- /.row -->
                                    </div>
                                  </div>
                                  <!-- /.widget-user -->
                                </div>
                            <div class="form-group">
                                <label for="personal_email">Personal Email
                                </label>
                                <input id="personal_email" type="text" name="personal_email" class="form-control" value="{{$employee->personal_email}}">
                            </div>
                            <div class="form-group">
                                <label for="company">Company
                                </label>
                                <select name="company_id" class="form-control">
                                    <option value="1">Company 1</option>
                                    <option value="2">Company 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="department">Department
                                </label>
                                <select name="department_id" class="form-control">
                                    <option value="1">IT</option>
                                    <option value="2">Accounting</option>
                                    <option value="3">Engineering</option>
                                    <option value="4">CSR</option>
                                    <option value="5">Sales</option>
                                    <option value="6">Marketing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="position_id">Designation
                                </label>
                                <select name="position_id" class="form-control">
                                    <option value="1">IT Support</option>
                                    <option value="2">Tambay</option>
                                    <option value="3">Accountant</option>
                                    <option value="4">Runner</option>
                                    <option value="5">Taga tawag</option>
                                    <option value="6">Manager</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary
                                </label>
                                <input type="number" name="salary" class="form-control" value="{{$employee->salary}}">
                            </div>
                            <div class="form-group">
                                <label for="manager">Manager
                                </label>
                                <select name="manager_id" class="form-control">
                                    <option value="1">Gerald Anderson</option>
                                    <option value="2">Juan Luna</option>
                                    <option value="3">Kim Domingo</option>
                                    <option value="4">Derek Santos</option>
                                    <option value="5">Lorie Vito Cruz</option>
                                    <option value="6">Kim Chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="supervisor">Supervisor
                                </label>
                                <select name="supervisor" class="form-control">
                                    <option value="1">Kim Chu</option>
                                    <option value="2">Gerald Anderson</option>
                                    <option value="3">Juan Luna</option>
                                    <option value="4">Kim Domingo</option>
                                    <option value="5">Derek Santos</option>
                                    <option value="6">Lorie Vito Cruz</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="driving_license_number">Driving License Number
                                </label>
                                <input type="number" name="driving_license_number" class="form-control" value="{{$employee->driving_license_number}}">
                            </div>
                            <div class="form-group">
                                <label for="first_level_approver">First Approver
                                </label>
                                <select name="first_level_approver" class="form-control">
                                    <option value="1">Gerald Anderson</option>
                                    <option value="2">Juan Luna</option>
                                    <option value="3">Kim Domingo</option>
                                    <option value="4">Derek Santos</option>
                                    <option value="5">Lorie Vito Cruz</option>
                                    <option value="6">Kim Chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="seond_level_approver">Second Approver
                                </label>
                                <select name="seond_level_approver" class="form-control">
                                    <option value="1">Gerald Anderson</option>
                                    <option value="2">Juan Luna</option>
                                    <option value="3">Kim Domingo</option>
                                    <option value="4">Derek Santos</option>
                                    <option value="5">Lorie Vito Cruz</option>
                                    <option value="6">Kim Chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="third_level_approver">Third Approver
                                </label>
                                <select name="third_level_approver" class="form-control">
                                    <option value="1">Gerald Anderson</option>
                                    <option value="2">Juan Luna</option>
                                    <option value="3">Kim Domingo</option>
                                    <option value="4">Derek Santos</option>
                                    <option value="5">Lorie Vito Cruz</option>
                                    <option value="6">Kim Chu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-11 text-right">
                                        {{ Form::submit('Cancel', array('class' => 'btn btn-default')) }}
                                    </div>
                                    <div class="col-lg-1 text-right">
                                        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
                                    </div>
                                    <br>-
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </section>
        </div>

        <!-- /.content -->
    </div>

    <!-- footer -->
    @include('includes/footer')
<script src="{{asset('assets/js/vue.js')}}"></script>
<!-- <script src="{{url('assets/js/vue.min.js')}}"></script> -->
<script src="{{asset('assets/js/vue-resource.js')}}"></script>
<script src="{{asset('assets/js/axios.js')}}"></script>
<!-- Include the Quill library -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js"></script><!-- Popper for Bootstrap --><!-- ')}}Tether for Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>
<script>

    Vue.filter('unique', function (values, unique) {
        return values.filter(function(element, index, self) {
            return index == self.indexOf(element);
        });
    });

    new Vue({
    el: '.content',
    data: {
        question: '',
        is_expire_access: 0,
        expiration_date: '',
        options: [
            {
                'text': '', 'is_correct': false
            },
            {
                'text': '', 'is_correct': false
            }
        ],
        selected_week_number: "",
        permissions: [],
        collectionPermissions: {'roleIds':[],'permissionIds':[], 'permissionsData': []},
        collectionPermissionsArray: [],
        roles: [],
        roleIds: [],
        week_numbers: [],
        editorOption: {
            theme: 'snow'
        }
    },
    components: {
    },
    methods: {
        onEditorBlur(quill) {
            console.log('editor blur!', quill)
        },
        onEditorFocus(quill) {
            console.log('editor focus!', quill)
        },
        onEditorReady(quill) {
        console.log('editor ready!', quill)
        },
        selectedAccess(selectedCheckBox) {
            alert(selectedCheckBox)
        },
        getRoles(url) {
            axios.get(url, {
                headers: {
                    'Authorization': this.header_authorization,
                    'Accept': this.header_accept
                }
            }).then((response) => {
                this.roles = response.data.data;
            });
        },
        isInArray(value, array) {
          return array.indexOf(value) > -1;
        },
        getRolePermissions(roleId = null, selectedIndex) {
            let vm = this;
            if (this.isInArray(roleId, vm.collectionPermissions.roleIds)) {
                var roles = vm.collectionPermissions.roleIds.filter(item => item !== roleId);
                this.getPermissions(roles);
                vm.collectionPermissions.permissionId = [];
                vm.collectionPermissions.permissionsData = [];

                vm.collectionPermissions.roleIds = vm.collectionPermissions.roleIds.filter(item => item !== roleId);

            } else {
                vm.collectionPermissions.roleIds.push(roleId);
                this.getPermissions(vm.collectionPermissions.roleIds);

            }
        }, 
        getPermissions(roles) {
            let vm = this;
            $.each(roles, function( indexRole, role ) {
            // when select only one role
                //check
                axios.get("{{route('api.role_permissions')}}"+"?role_id="+role, {
                    headers: {
                        'Authorization': this.header_authorization,
                        'Accept': this.header_accept
                    }
                }).then((response) => {
                    $.each(response.data.data, function( indexPermission, permission ) {
                        console.log(permission)
                        vm.collectionPermissions.permissionIds.push(permission.permission_id);
                        vm.collectionPermissions.permissionsData.push(permission); //was not 
                    });
                });
            });
        }
    },
    computed: {
        unique () {
          return function (arr, key) {
            var output = []
            var usedKeys = {}
            for (var i = 0; i < arr.length; i++) {
              if (!usedKeys[arr[i][key]]) {
                usedKeys[arr[i][key]] = true
                output.push(arr[i])
              }
            }
            return output
          }
        },
        editorA() {
            return this.$refs.quillEditorA.quill
        }
    },
        mounted() {
            this.getRoles("{{route('api.roles')}}");
            for (var i = 1; i < 27; i++) {
                this.week_numbers.push(i);
            }
            console.log(this.week_numbers)
        }
    })

</script>




