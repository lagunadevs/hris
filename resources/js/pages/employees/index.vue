<template>

  <div class="container">

    <b-table striped hover :items="employees" :fields="fields" id="table"></b-table>

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

  data () {
    return {
      // Note 'isActive' is left out and will not appear in the rendered table

      fields: {
        last_name: {
          label: 'Employee last name',
          sortable: true
        },
        first_name: {
          label: 'Employee first name',
          sortable: false
        },
        email: {
          // This key overrides `foo`!
          key: 'email',
          label: 'Email',
          sortable: true
        }
      },

      employees: this.$collection({
          url: window.location.origin+'/api/v1/employees'
      })
    }
  }
}
</script>