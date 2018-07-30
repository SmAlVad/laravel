<template>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>URL</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="url in urldata">
            <td>{{ url.title }}</td>
            <td>{{ url.url }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
            'urldata'
        ],
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
              console.log(this.urldata);
            },
        },
    }
</script>
