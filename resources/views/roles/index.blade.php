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
        Roles
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Roles</a></li>
        <li class="active">List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="content col-lg-10 col-lg-offset-1 pl-4">
            <div class="row pt-4" style="padding-bottom: 20px">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h4 class="pull-left"></h4>
                </div>
            </div>
            <div class="row pb-4 pl-2">
                 <a href="{{ URL::to('roles/create') }}">
                    <button class="btn btn-success btn-custom waves-effect w-md waves-light m-b-5 pull-left"> <i class="fa fa-plus"> </i> Add Role</button>
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <thead align="center">
                    <tr>
                        <th width="15%">Role</th>
                        <th>Permissions</th>
                        <th width="15%">Operations</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr v-if="roles" v-for="role in roles">
                        <td>@{{role.name}}</td>
                        <td>
                            <ul>
                                <span v-if="role.permissions" v-for="permission in role.permissions">
                                    @{{permission.module+' '+permission.name+' / '}}
                                </span>
                            </ul>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-info btn-block" @click="editRole(role)"> Edit </button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-danger btn-block" @click="deleteRole(role)"> Delete </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr v-if="roles.length == 0">
                        <td colspan="8" class="text-center">No data found</td>
                    </tr>
                </tbody>
            </table>
            <div class="row pt-4">
                <div class="col-sm-12 col-md-12">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous" id="datatable-editable_previous"><a href="#" aria-controls="datatable-editable" data-dt-idx="0" tabindex="0" class="page-link" :disabled="pagination.current_page == pagination.from" @click.prevent="changePage(pagination.current_page - 1,'previous')">Previous</a></li>
                        <li v-for="page in pages" class="paginate_button page-item active">
                            <a href="#" :class="isCurrentPage(page) ? 'is-current selected-page' : ''" @click.prevent="changePage(page)" aria-controls="datatable-editable" data-dt-idx="1" tabindex="0" class="page-link">@{{page}}</a></li>

                        <li class="paginate_button page-item next" id="datatable-editable_next"><a href="#" aria-controls="datatable-editable" data-dt-idx="7" tabindex="0" class="page-link" :disabled="pagination.current_page >= pagination.last_page" @click.prevent="changePage(pagination.current_page + 1,'next')">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
   <!-- footer -->
  @include('includes/footer')
<!-- ./wrapper -->

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
    new Vue({
    el: '.content',
    data: {
        roles: [],
        pagination: '',
        pages: '',
        from: '',
        to: '',
        offset: '',
        firstPage: '',
        nextPage: '',
        prevPage: '',
        lastPage: '',
        noResultFound : false
    },
    components: {
    },
    methods: {
        getRoles(url){
            axios.get(url, {
                headers: {
                    'Authorization': this.header_authorization,
                    'Accept': this.header_accept
                }
            }).then((response) => {
                this.roles = response.data.data;
                if (this.roles.length > 0) {
                    this.noResultFound = true;
                } else {
                    this.noResultFound = false;
                }
                this.pagination = response.data.meta;  
                //get last page item
                this.pages = response.data.meta.last_page;
                this.path = response.data.meta.path;

                this.firstPage = response.data.links.first;
                this.nextPage = response.data.links.next;
                this.prevPage = response.data.links.prev;
                this.lastPage = response.data.meta.last_page;
                console.log(this.roles)
            });
        },
        isCurrentPage(page) {
            return this.pagination.current_page === page;
        },
        editRole(role) {
            console.log(role.id)
            // console.log(window.location.href)
            window.location.href = "{{request()->root().'/roles' }}/"+role.id+"/edit";

        },
        changePage(page, step) {
            // console.log(this.lastPage)
            console.log(page)
          
            if (page) {
                this.pagination.current_page = page;
                if (step == 'previous' && this.pagination.current_page >= 1) {
                    this.roles = [];
                    this.getRoles(this.prevPage);
                } else if(step == 'next' && this.pagination.current_page <= this.pagination.last_page){
                    this.roles = [];
                    this.getRoles(this.nextPage);
                } else if(!step){
                    this.roles = [];
                    this.getRoles(this.path+ "?page=" + page+ "&role=" + this.filterByRoles);
                }
            }
        },
        deleteRole(user) {
                console.log(user)
                swal({
                    title: 'Delete',
                    text: "Are you sure you want to delete this role?",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3c8dbc',
                    cancelButtonColor: '#3c8dbc',
                    confirmButtonText: 'Yes, Please!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-info',
                    cancelButtonClass: 'btn btn-grey',
                    buttonsStyling: false
                }).then(function (result) {
                    if (result.value) {
                        axios.delete("{{url('roles')}}/"+user.id, {
                            headers: {
                                'Authorization': this.header_authorization,
                                'Accept': this.header_accept
                            }
                        })
                        .then((response) => {
                            swal("Success!",response.data.message, "success");
                            setTimeout(function(){
                               window.location.reload(1);
                            }, 2000);
                        })
                        .catch(error => {
                            console.log(error.response.data.errors)
                            swal("Failed!",  JSON.stringify(error.response.data.message), "info");
                        });
                    }
                });
        }
    },
    computed: {
      
    },
        mounted() {

            this.getRoles("{{route('api.roles')}}");
        }
    })

</script>
