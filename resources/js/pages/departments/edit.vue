<template>
    <div class="wrapper">
        <breadcrumbs></breadcrumbs>
        <div class="container">
                <div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">Name
                                    <small></small>
                                </label>
                                <input 
                                    id="name" 
                                    type="text" 
                                    name="name" 
                                    @keyup.enter="create"
                                    class="form-control" 
                                    v-model="name" />
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
        },
        methods: {
            create() {
                this.departments
                    .create({ name: this.name })
                    .then(resp => {
                        //this.name = '';
                        //this.$router.push({ name: 'departments.index', params: { app_id: 1 }})
                    });
            }
        },
        data() {
            return {
                departments: this.$collection({
                    url: '/api/v1/departments'
                }),
                name: ''
            }
        }
    }
</script>
