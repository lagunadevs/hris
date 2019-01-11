<template>
    <div class="wrapper">
        <breadcrumbs></breadcrumbs>
        <div class="container">
                <div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">Name
                                </label>
                                <input 
                                    id="name" 
                                    type="text" 
                                    name="name" 
                                    @keyup.enter="create"
                                    class="form-control" 
                                    v-model="name" />
                            </div>
                           <div v-for="department in departments" :key="department.id">
                              {{ department.name }}
                          </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</template>

<script>
  export default {
        mounted() {
            this.departments.fetch();
            var id = this.$route.params.id;
            this.departments.get(id);
            //console.log('mounted')
            //this.name = this.departments.name;
            this.create();
        },
        methods: {
            create() {
              axios.post('/departments', {
                    name: 'hey axios',
                }).then(response => {
                    //this.$router.push({ name: 'apps.plans.show', params: { plan_id: this.$route.params.plan_id }})
                    // console.log(response.data);
                })
                // this.departments
                //     .create({ name: this.name })
                //     .then(resp => {
                //         //this.name = '';
                //         this.$router.push({ name: 'departments.index', params: { app_id: 1 }})
                //     });
            }
        },
        data() {
            //console.log('dta')
            return {
                departments: this.$collection({
                  url: '/departments'
                }),
                name: ''
            }
        }
    }
</script>
