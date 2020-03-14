<template>
    <div class="content-wrapper">
        <section class="content offset-sm-3">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Add Employees</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" @submit.prevent="addEmployee">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            type="text"
                                            class="form-control form-control-sm"
                                            name="name"
                                            v-model="form.name"
                                            id="name"
                                            placeholder="Name"
                                            :class="{ 'is-invalid': form.errors.has('name') }"
                                        >
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            type="text"
                                            name="email"
                                            v-model="form.email"
                                            class="form-control form-control-sm"
                                            id="email"
                                            placeholder="Email"
                                            :class="{ 'is-invalid': form.errors.has('email')}"
                                        >
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <b-button size="sm" block variant="danger" type="submit">
                                            <i class="fa fa-plus-circle"></i>&nbsp;Submit
                                        </b-button>
                                    </div>
                                </div>
                            </form>
<!--                            <div class="form-group">-->
<!--                                <label for="supplier">Add Suppliers</label>-->
<!--                                <input-->
<!--                                    type="text"-->
<!--                                    id="supplier"-->
<!--                                    name="supplier"-->
<!--                                    v-model="form.supplier"-->
<!--                                    class="form-control form-control-sm"-->
<!--                                    placeholder="Enter the supplier name e.g. Netflix"-->
<!--                                    :class="{ 'is-invalid': form.errors.has('supplier') }"-->
<!--                                >-->
<!--                                <has-error :form="form" field="supplier"></has-error>-->
<!--                                <input-->
<!--                                    type="text"-->
<!--                                    id="supplier"-->
<!--                                    name="supplier"-->
<!--                                    class="form-control form-control-sm"-->
<!--                                >-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <button class="btn btn-primary btn-block btn-sm">-->
<!--                                    <i class="fa fa-plus-circle"></i>&nbsp;Add-->
<!--                                </button>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data: () => ({
            form: new Form({
                name: '',
                email: ''
            })
        }),
        methods: {
            addEmployee(){
                this.$store.dispatch('createEmployees', this.form);
            }
        }
    }
</script>
