<template>
    <b-row class="d-flex justify-content-center my-2">
        <div class="col-md-8 col-sm-12">
            <b-form @submit.prevent="onSubmit">
                <b-input-group>
                    <input type="text" class="form-control mr-3 rounded" v-model="name">
                    <span class="input-group-btn"><button type="submit" class="btn btn-primary">Add Contact</button></span>
                </b-input-group>
            </b-form>
        </div>
    </b-row>
</template>

<script>
    export default {
        name: "AddContact",
        data() {
            return {
                name: ''
            }
        },
        methods: {
            onSubmit() {
                if (this.name.trim()) {
                    const newContact = {
                        id: Date.now(),
                        name: this.name
                    }

                    this.$emit('add-contact', newContact)
                    this.name = ''
                }
            }
        }
    }
</script>