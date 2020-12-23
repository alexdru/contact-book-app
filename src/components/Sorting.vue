<template>
    <b-container>
        <b-row class="d-flex justify-content-center">
            <div class="col-md-8 col-sm-12">
                <b-dropdown v-bind:text="sortTitle">
                    <b-dropdown-item @click="sortBy('def', 'default')">Default</b-dropdown-item>
                    <b-dropdown-item @click="sortBy('asc', 'ascending')">Ascending</b-dropdown-item>
                    <b-dropdown-item @click="sortBy('desc', 'descending')">Descending</b-dropdown-item>
                </b-dropdown>
            </div>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        name: "Sorting",
        data() {
            return {
                sortName: 'default'
            }
        },
        computed: {
            sortTitle() {
                return 'Sort by ' + this.sortName
            }
        },
        methods: {
            sortBy(value, name) {
                this.$emit('sort-contacts', value)
                this.sortName = name
            }
        }
    }
</script>