<template>
  <div class="wrapper">
    <div class="container">
      <b-button @click="addEmployee()">
          Add
      </b-button>
      <div class="card-body">
        <b-table striped hover :items="employees" :fields="fields" >
            <template slot="action" slot-scope="row">
              <b-button @click="getEmployee(row.item.id)">
                  Edit
              </b-button>
              <b-button @click.stop="removeEmployee(row.item)">
                  Delete
              </b-button>
            </template>
        </b-table>
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
            this.employees.fetch();
        },
        methods: {
            createTodo : function() {
                this.employees
                    .create({ name: this.newTodo })
                    .then(resp => {
                        this.newTodo = '';
                    });
            },
            getEmployee :function(employee) {

                this.$router.push({ name: 'edit', params: { employeeId: employee} }) 
                console.log(id);

            },
            removeEmployee : function(employee) {

                employee.remove();

            },
            addEmployee : function() {

                this.$router.push({ name: 'create' }) 

            }
            // companiesempty () {
            //     this.employees.empty();
            // },
            // hideModal () {
            //     this.$refs.myModalRef.hide()
            // }
        },
        data() {
            return {
                fields: [
                {
                  key: 'last_name',
                  label: 'Last Name',
                  sortable: true
                },
                {
                  key: 'first_name',
                  label: 'First Name',
                },
                {
                  key: 'email',
                  label: 'Email',
                  sortable: true,
                },
                {
                  key: 'action',
                  label: 'Action',
                }
                ],

                employees: this.$collection({
                    url: window.location.origin+'/api/v1/employees'
                }),
                newTodo: ''
            }
        }
    }
</script>

