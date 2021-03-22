<template>
    <div class="contacts__item py-3">
        <b-row>
            <div class="col-md-2 col-sm-2">
                <div class="contacts__item-img rounded-circle"></div>
            </div>
            <div class="col-md-7 col-sm-7">
                <h5>{{ contact.name }}</h5>
            </div>
            <div class="contacts__item-remove" @click="$emit('delete-contact', contact.id)"></div>
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
        position: relative;
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

    .contacts__item-remove {
        position: absolute;
        top: 1rem;
        right: 0;
        cursor: pointer;
        width: 28px;
        height: 28px;
        opacity: 0.3;
        border-radius: 50%;
    }
    .contacts__item-remove:hover {
        opacity: 1;
    }
    .contacts__item-remove:before, .contacts__item-remove:after {
        position: absolute;
        left: 13px;
        content: ' ';
        height: 28px;
        width: 2px;
        background-color: #333;
    }
    .contacts__item-remove:before {
        transform: rotate(45deg);
    }
    .contacts__item-remove:after {
        transform: rotate(-45deg);
    }
</style>