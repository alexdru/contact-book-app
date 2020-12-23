<template>
    <div class="contacts__item py-3">
        <b-row>
            <div class="col-md-2 col-sm-2">
                <div class="contacts__item-img rounded-circle"></div>
            </div>
            <div class="col-md-7 col-sm-7">
                <h5>{{ contact.name }}</h5>
            </div>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "ContactsItem",
        props: {
            contact: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>
    .contacts__item {
        border-bottom: 1px solid #f1f2f2;
    }

    .contacts__item:last-child {
        border-bottom: none;
    }

    .contacts__item-img {
        height: 80px;
        width: 80px;
        background-image: url(./../assets/user.svg);
    }
</style>