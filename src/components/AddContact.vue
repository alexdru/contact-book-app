<template>
    <div class="contact-add">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-sm-12">
                <form class="form" @submit.prevent="onSubmit">
                    <div class="input-group">
                        <input type="text" class="form-control mr-3 rounded">
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Add Contact</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddContact",
        methods: {
            onSubmit() {
                console.log('Add Contact')
            }
        }
    }
</script>

<style>
    .contact-add {
        margin: 20px 0;
    }
</style>