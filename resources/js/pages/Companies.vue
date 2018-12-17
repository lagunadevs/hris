
<template>
    <div>
        <input
            type="text"
            placeholder="New Company"
            v-model="newTodo" />

            <b-button @click="createTodo">Save</b-button>
        <div v-for="company in companies" :key="company.id">
            <!-- <span @click="company.update({ status: !company.id })">
                {{ company.id ? 'O' : 'X' }}
            </span> -->
            <span>{{ company.name }}</span>
            <b-button @click.stop="removeCompany(company)">X</b-button>
            <b-button @click.get="getCompany(company)">get</b-button>
        </div>
        <b-button @click.stop="companiesempty">X</b-button>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.companies.fetch();
        },
        methods: {
            createTodo() {
                this.companies
                    .create({ name: this.newTodo })
                    .then(resp => {
                        this.newTodo = '';
                    });
            },
            getCompany(company) {
                var id ;
               id =  this.companies.get(company.id);
                console.log(id);
            },
            removeCompany(company) {

                company.remove();
            },
            companiesempty () {
                this.companies.empty();
            },
            hideModal () {
                this.$refs.myModalRef.hide()
            }
        },
        data() {
            return {
                companies: this.$collection({
                    url: '/api/companies'
                }),
                newTodo: ''
            }
        }
    }
</script>