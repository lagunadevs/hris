<template>
  <div class="wrapper">
    <breadcrumbs></breadcrumbs>
    <div>
      <div class="row pb-2">
          <div class="col-md-3">
              <a href="">
                  <router-link :to="{name: 'departments.create'}" class="btn btn-success btn-custom waves-effect w-md waves-light m-b-5 pull-left"> <i class="fa fa-plus"> </i>Add</router-link>
              </a>
          </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <thead align="center">
               <tr>
                    <th>Name</th>
                    <th>Date / Time Created</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody align="center">
                <tr v-if="departments" v-for="department in departments">
                    <td>{{department.name}}</td>
                    <td>{{department.created_at}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                 <router-link :to="{name: 'departments.edit', params: { id: department.id }}" class="btn btn-info btn-block"> <i class="fa fa-plus"> </i> Edit </router-link>
                            </div>
                            <!-- <div class="col-md-6">
                                <button class="btn btn-danger btn-block" @click="deleteUser(department)"> Delete </button>
                            </div> -->
                            <button @click.stop="department.remove">X</button>
                        </div>
                    </td>
                </tr>
                <tr v-if="departments.length == 0">
                    <td colspan="8" class="text-center">No data found</td>
                </tr>
            </tbody>
        </table>
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
        this.departments.fetch();
    },
    data() {
        return {
            departments: this.$collection({
                url: '/api/v1/departments' // I need this to know where the api calls should go.
            })
        }
    }
  }
</script>