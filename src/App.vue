<template>
  <div id="app">
    <ContactsList
      v-bind:contacts="contacts"
    />
  </div>
</template>

<script>
  import ContactsList from "./components/ContactsList";

  export default {
    name: 'App',
    data() {
      return {
        contacts: [
          {id: 1, name: 'Вася Петрович', title: 'Коллега'},
          {id: 2, name: 'Саша Васильевич', title: 'Друг'},
          {id: 3, name: 'Митя Достоевский', title: 'Знакомый'}
        ]
      }
    },
    components: {
      ContactsList
    }
  }
</script>