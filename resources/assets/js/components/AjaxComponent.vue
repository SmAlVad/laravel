<template>
    <button @click="update" class="btn btn-primary" v-if="!is_refresh"> Обновить {{ id }} </button>
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
        data: function(){
            return {
                urldata: [],
                is_refresh: false,
                id: 0,
            }
        },
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
