<template>
    <div class="content-wrapper">
        <section class="content offset-sm-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
<!--                            <h4 class="card-title">Suppliers</h4>-->
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="supplier">Edit Employees</label>
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
                                <input
                                    type="text"
                                    id="supplier"
                                    name="supplier"
                                    class="form-control form-control-sm"
                                >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block btn-sm">
                                    <i class="fa fa-plus-circle"></i>&nbsp;Add
                                </button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {}
</script>
