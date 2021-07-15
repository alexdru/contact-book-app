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
        @delete-contact="deleteContact"
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
    async mounted() {
      fetch(process.env.VUE_APP_API_URL + '/contacts')
        .then(response => response.json())
        .then(json => {
          this.contacts = json.data
        })
        .catch(error => console.log(error))
    },
    methods: {
      addContact(contact) {
        fetch(process.env.VUE_APP_API_URL + '/contacts', {
          method: 'POST',
          headers: {
            'Content-type': 'application/json; charset=UTF-8'
          },
          body: JSON.stringify(contact)
        })
          .then(response => response.json())
          .then(json => this.contacts.push(json.data))
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
        if (value === 'all') {
          fetch(process.env.VUE_APP_API_URL + `/contacts`)
            .then(response => response.json())
            .then(json => {
              this.contacts = json.data
            })
            .catch(error => console.log(error))
        } else {
          fetch(process.env.VUE_APP_API_URL + `/contacts/${value}`)
            .then(response => response.json())
            .then(json => {
              this.contacts = json.data
            })
            .catch(error => console.log(error))
        }
      },
      deleteContact(id) {
        this.contacts = this.contacts.filter(c => c.id !== id)
        fetch(process.env.VUE_APP_API_URL + `/contacts/${id}`, {
          method: 'DELETE'
        })
          .catch(error => console.log(error))
      }
    },
    components: {
      ContactsList,
      AddContact,
      Sorting
    }
  }
</script>