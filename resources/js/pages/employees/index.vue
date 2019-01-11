<template>
  <div class="wrapper">
    <breadcrumbs></breadcrumbs>
    <div>
      <div class="row pb-2">
          <div class="col-md-3">
              <a href="">
                  <router-link :to="{name: 'create'}" class="btn btn-success btn-custom waves-effect w-md waves-light m-b-5 pull-left"> <i class="fa fa-plus"> </i>Add Employee</router-link>
              </a>
          </div>
          <!-- <div class="col-md-9">
              <div class="form-inline pull-right">
                    <label>Search Employee: </label> &nbsp;
                  <input type="text" name="search" v-model="search" @change="filter()" class="form-control">
              </div>
            
          </div> -->
      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <thead align="center">
               <tr>
                    <th>Name</th>
                    <th width="20%">Email</th>
                    <th width="18%">Date / Time Created</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody align="center">
                <tr v-if="users" v-for="user in users">
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.created_at}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                 <router-link :to="{name: 'edit', params: { employeeId: user.id }}" class="btn btn-info btn-block"> <i class="fa fa-plus"> </i> Edit </router-link>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-danger btn-block" @click="deleteUser(user)"> Delete </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr v-if="users.length == 0">
                    <td colspan="8" class="text-center">No data found</td>
                </tr>
            </tbody>
        </table>
      </div>
      
    
      <div class="row pt-4">
          <div class="col-sm-12 col-md-12">
              <ul class="pagination">
                  <li class="paginate_button page-item previous" id="datatable-editable_previous"><a href="#" aria-controls="datatable-editable" data-dt-idx="0" tabindex="0" class="page-link" :disabled="pagination.current_page == pagination.from" @click.prevent="changePage(pagination.current_page - 1,'previous')">Previous</a></li>
                  <li v-for="page in pages" class="paginate_button page-item active">
                      <a href="#" :class="isCurrentPage(page) ? 'is-current selected-page' : ''" @click.prevent="changePage(page)" aria-controls="datatable-editable" data-dt-idx="1" tabindex="0" class="page-link">{{page}}</a></li>

                  <li class="paginate_button page-item next" id="datatable-editable_next"><a href="#" aria-controls="datatable-editable" data-dt-idx="7" tabindex="0" class="page-link" :disabled="pagination.current_page >= pagination.last_page" @click.prevent="changePage(pagination.current_page + 1,'next')">Next</a></li>
              </ul>
          </div>
      </div>
    </div>
  </div>
</template>


<style type="text/css">
  .container {

    margin-top: 5%;

  }  

</style>


<script>
export default {

  mounted() {

      this.getUsers(window.location.origin+'/api/v1/employees');

  },

  methods : {

      getUsers : function(url){
          axios.get(url, {
              headers: {
                  'Authorization': this.header_authorization,
                  'Accept': this.header_accept
              }
          }).then((response) => {
              this.users = response.data.data;
              if (this.users.length > 0) {
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
              console.log(this.users)
          });
      },

      getRoles : function(url) {
          axios.get(url, {
              headers: {
                  'Authorization': this.header_authorization,
                  'Accept': this.header_accept
              }
          }).then((response) => {
              this.roles = response.data.data;
          });
      },
      filter : function() {
          if (this.search && this.search.length >= 3) {
              this.searchFunction();
          } else {
              this.searchFunction();
          }
      },
      searchFunction : function() {
          axios.get(window.location.origin+''+"?search="+this.search+"&role="+this.filterByRoles)
          .then((response) => {
              console.log(response)
              this.users = response.data.data;
              if (this.users.length > 0) {
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
              this.lastPage = response.data.links.last_page;
          });
      },

      isCurrentPage : function(page) {
          return this.pagination.current_page === page;
      },

      editUser : function(user) {
          console.log(user.id)
          // console.log(window.location.href)
          window.location.href = "{{request()->root().'/employees' }}/"+user.id+"/edit";

      },

      changePage : function(page, step) {
          // console.log(this.lastPage)
          console.log(page)
        
          if (page) {
              this.pagination.current_page = page;
              if (step == 'previous' && this.pagination.current_page >= 1) {
                  this.products = [];
                  this.getUsers(this.prevPage);
              } else if(step == 'next' && this.pagination.current_page <= this.pagination.last_page){
                  this.products = [];
                  this.getUsers(this.nextPage);
              } else if(!step){
                  this.products = [];
                  this.getUsers(this.path+ "?page=" + page+ "&role=" + this.filterByRoles);
              }
          }
      },

      deleteUser : function(user) {
              console.log(user)
              Vue.swal({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then(function (result) {
                  if (result.value) {
                      axios.delete("{{url('users')}}/"+user.id, {
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
  data () {



    return {
      // Note 'isActive' is left out and will not appear in the rendered table
      employees: [],
      meta: [],
      users : [],
      roles: [],
      search: '',
      filterByRoles: '',
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
    }
  }
}
</script>