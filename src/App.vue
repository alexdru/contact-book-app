<template>
  <div id="app">
    <AddContact
      @add-contact="addContact"
    />
    <ContactsList
      v-bind:contacts="contacts"
    />
  </div>
</template>

<script>
  import ContactsList from "./components/ContactsList";
  import AddContact from "./components/AddContact";

  export default {
    name: 'App',
    data() {
      return {
        contacts: [
          {id: 1, name: 'Вася Петрович'},
          {id: 2, name: 'Саша Васильевич'},
          {id: 3, name: 'Митя Достоевский'}
        ]
      }
    },
    methods: {
      addContact(contact) {
        this.contacts.push(contact)
      }
    },
    components: {
      ContactsList,
      AddContact
    }
  }
</script>