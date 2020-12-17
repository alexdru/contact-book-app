<template>
    <div class="contacts__item">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="contacts__item-img"></div>
            </div>
            <div class="col-md-7 col-sm-7">
                <h5>{{ contact.name }}</h5>
                <div>{{ contact.title }}</div>
            </div>
        </div>
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
        padding: 20px 0;
        border-bottom: 1px solid #f1f2f2;
        margin-bottom: 20px;
    }

    .contacts__item:last-child {
        border-bottom: none;
    }

    .contacts__item-img {
        height: 80px;
        width: 80px;
        border-radius: 50%;
        background-image: url(./../assets/user.svg);
    }
</style>