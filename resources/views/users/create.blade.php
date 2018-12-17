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
                Users
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
                <li class="active">Create</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class='col-lg-10 pl-4'>
                {{-- @include ('errors.list') --}}

                {{ Form::open(array('url' => 'users')) }}

                <div class="row col-lg-12 col-md-12 pb-2">
                    <div class="col-lg-11 text-right">
                        {{ Form::submit('Cancel', array('class' => 'btn btn-default pr-2')) }}
                    </div>
                    <div class="col-lg-1 text-right">
                        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>
                
                <div class="row col-lg-12 col-md-12 pb-2">
                    <h4>User Details</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name
                                <small>(Required)</small>
                            </label>
                            <input id="first_name" type="text" name="first_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name
                                <small>(Required)</small>
                            </label>
                            {{ Form::text('last_name', '', array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address
                                <small>(Required)</small>
                            </label>
                            {{ Form::email('email', '', array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="form-group pl-2">
                            {{ Form::label('expiration_date', 'Access Expiry Date') }}
                            <div class="radio radio-primary pt-2">
                                <span class="pr-4">
                                    <input id="expiration_date_1" v-model="is_expire_access" v-bind:value="0" name="is_expire_access" value='1' type="radio">
                                    <label for="expiration_date_1">
                                       Never
                                    </label>
                                </span>
                                <br>
                                <span class="pl-4">
                                    <input id="expiration_date_2" v-model="is_expire_access" v-bind:value="1" name="is_expire_access" value='0' type="radio">
                                    <label for="expiration_date_2">
                                       On
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 pt-4">
                        <input type="date" id="expiration_date" v-model="expiration_date" :disabled="is_expire_access == 0" name="expiration_date" class="form-control">

                    </div>
                </div>
                <label>Select Role</label> <br>
                <div class="row pt-2" style="padding-left: 20px">
                     <div class="col-md-2 pb-2"  v-for="(role, index) in roles" v-if="role.name != 'Super Admin' ">
                        <div class="checkbox checkbox-primary">
                            <input name="roles[]"  v-bind:id="'role-'+role.id" v-bind:value="role.id" type="checkbox" @click="getRolePermissions(role.id, index);">
                            <label v-bind:for="'role-'+role.id">
                                @{{role.name}}
                            </label>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label>Permissions: </label>
                    <ul>
                        <li  v-for="permission in unique(collectionPermissions.permissionsData, 'name')">@{{permission.name}}</li>
                    </ul>
                </div>
                {{ Form::close() }}
            </div>
        </section>
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




