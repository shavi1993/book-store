<!-- resources/js/components/BookSearch.vue -->

<template>
    <div>
        <h1>Book Search</h1>

        <input type="text" v-model="searchQuery" @input="searchBooks" placeholder="Search books">

        <ul>
            <li v-for="book in books" :key="book.id">
                {{ book.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            searchQuery: '',
            books: [],
        };
    },
    methods: {
        searchBooks() {
            // Make an AJAX request to the Laravel backend
            axios.get('/books/search', { params: { query: this.searchQuery } })
                .then(response => {
                    this.books = response.data;
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        },
    },
};
</script>
