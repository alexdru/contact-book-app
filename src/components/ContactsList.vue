<template>
    <b-row class="d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="contacts">
                <ContactsItem
                    v-for="contact of contacts"
                    v-bind:contact="contact"
                    v-bind:key="contact.id"
                />
            </div>
        </div>
    </b-row>
</template>

<script>
    import ContactsItem from "./ContactsItem";

    export default {
        name: "ContactsList",
        props: ['contacts'],
        components: {
            ContactsItem
        }
    }
</script>