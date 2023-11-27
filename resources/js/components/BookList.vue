<template>
    <ul>
        <li v-for="book in books" :key="book.id">
            <a :href="'/books/' + book.id">@{{ book.title }}</a>
        </li>
    </ul>
</template>

<script>
export default {
    props: {
        books: Array
    }
};
</script>
