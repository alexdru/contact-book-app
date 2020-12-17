<template>
    <div class="container">
        <AddContact />
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="contacts">
                    <ContactsItem
                        v-for="contact of contacts"
                        v-bind:contact="contact"
                        v-bind:key="contact.id"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ContactsItem from "./ContactsItem";
    import AddContact from "./AddContact";

    export default {
        name: "ContactsList",
        props: ['contacts'],
        components: {
            ContactsItem,
            AddContact
        }
    }
</script>