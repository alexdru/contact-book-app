<template>
  <div id="app">
    <AddContact
      @add-contact="addContact"
    />
    <Sorting
      @sort-contacts="sortBy"
    />
    <ContactsList
      v-bind:contacts="contacts"
    />
  </div>
</template>

<script>
  import ContactsList from "./components/ContactsList";
  import AddContact from "./components/AddContact";
  import Sorting from "./components/Sorting";

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
      },
      sortBy(prop) {
        switch(prop) {
          case 'asc': return this.contacts.sort((a,b) => a.name < b.name ? -1 : 1)
          case 'desc': return this.contacts.sort((a,b) => a.name < b.name ? 1 : -1)
          case 'def': return this.contacts.sort((a,b) => a.id < b.id ? -1 : 1)
          default: return this.contacts
        }
      }
    },
    components: {
      ContactsList,
      AddContact,
      Sorting
    }
  }
</script>