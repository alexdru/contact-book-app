<template>
    <b-row class="d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <b-dropdown v-bind:text="sortTitle">
                <b-dropdown-item @click="sortBy('def', 'default')">Default</b-dropdown-item>
                <b-dropdown-item @click="sortBy('asc', 'ascending')">Ascending</b-dropdown-item>
                <b-dropdown-item @click="sortBy('desc', 'descending')">Descending</b-dropdown-item>
            </b-dropdown>
            <div class="float-right d-inline-flex align-items-center">
                <label class="mr-2 mb-0">Show:</label>
                <b-form-select v-model="filter" v-bind:options="options" id="filter"></b-form-select>
            </div>
        </div>
    </b-row>
</template>

<script>
    export default {
        name: "Sorting",
        data() {
            return {
                sortDefault: 'default',
                filter: 5,
                options: [
                    { value: 5, text: '5' },
                    { value: 10, text: '10' },
                    { value: 15, text: '15' }
                ]
            }
        },
        computed: {
            sortTitle() {
                return 'Sort by ' + this.sortDefault
            }
        },
        watch: {
            filter(value) {
                this.$emit('filter-contacts', value)
            }
        },
        methods: {
            sortBy(value, name) {
                this.$emit('sort-contacts', value)
                this.sortDefault = name
            }
        }
    }
</script>

<style scoped>
    select#filter {
        width: 60px;
    }
</style>