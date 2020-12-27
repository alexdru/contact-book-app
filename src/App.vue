<template>
  <div id="app">
    <b-container>
      <AddContact
        @add-contact="addContact"
      />
      <Sorting
        @sort-contacts="sortBy"
        @filter-contacts="filter"
      />
      <ContactsList
        v-if="contacts.length"
        v-bind:contacts="contacts"
      />
      <b-row v-else class="d-flex justify-content-center text-center my-5">
        <div class="col-md-8 col-sm-12">
          <p>List is empty</p>
        </div>
      </b-row>
    </b-container>
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
        contacts: []
      }
    },
    mounted() {
      //todo replace api
      fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(json => {
          this.contacts = json
        })
        .catch(error => console.log(error))
    },
    methods: {
      addContact(contact) {
        //todo replace api
        fetch('https://jsonplaceholder.typicode.com/users', {
          method: 'POST',
          body: JSON.stringify(contact),
          headers: {
            'Content-type': 'application/json; charset=UTF-8'
          }
        })
          .then((response) => response.json())
          .then((json) => this.contacts.push(json))
          .catch(error => console.log(error))
      },
      sortBy(value) {
        switch(value) {
          case 'asc': return this.contacts.sort((a,b) => a.name < b.name ? -1 : 1)
          case 'desc': return this.contacts.sort((a,b) => a.name < b.name ? 1 : -1)
          case 'def': return this.contacts.sort((a,b) => a.id < b.id ? -1 : 1)
          default: return this.contacts
        }
      },
      filter(value) {
        //todo replace api
        if (value === 'all') {
          fetch(`https://jsonplaceholder.typicode.com/users`)
            .then(response => response.json())
            .then(json => {
              this.contacts = json
            })
            .catch(error => console.log(error))
        } else {
          fetch(`https://jsonplaceholder.typicode.com/users?_limit=${value}`)
            .then(response => response.json())
            .then(json => {
              this.contacts = json
            })
            .catch(error => console.log(error))
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