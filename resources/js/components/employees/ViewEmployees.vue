<template>
    <div class="content-wrapper">
        <router-view/>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employees</h3>

                    <div class="card-tools">
                        <router-link to="/employees/add">
                            <button type="button" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus-circle"></i>&nbsp;Add Employees</button>
                        </router-link>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                User
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <td>
                                <div v-if="!employee.user_profile_pic">
                                    <img alt="Avatar" class="table-avatar" src="plugins/dist/img/placeholder.png">
                                </div>
                                <div v-else>
                                    <img alt="Avatar" class="table-avatar" :src="`plugins/dist/img/placeholder.png`">
                                </div>
                            </td>
                            <td>
                                {{ employee.name }}
                            </td>
                            <td>
                                {{ employee.email }}
                            </td>
                            <td>
                                <router-link :to="`/employees/${employee.id}`">
                                    <b-button size="sm" variant="success">
                                        <i class="fa fa-eye"></i>&nbsp;View
                                    </b-button>
                                </router-link>
                                <b-button size="sm" variant="danger">
                                    <i class="fa fa-trash"></i>&nbsp;Delete
                                </b-button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        computed:{
            employees(){
                return this.$store.getters.employees;
            }
        },
        created(){
            this.$store.dispatch('getEmployees');
        }
    }
</script>
