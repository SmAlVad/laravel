<template>
    <div>
        <line-chart :chart-data="data" :height="100" :options="{response: true, maintainAspectRatio: true}"></line-chart>
    </div>
</template>

<script>
    import LineChart from './lineChart'

    export default {

        components:{
            LineChart
        },

        data: function(){
            return {
                data: [],
            }
        },

        mounted() {
            this.update()
        },

        methods: {
            update: function () {

                axios.get('/home/data-chart').then((response) => {
                    this.data = response.data;
                });

            },
        },
    }
</script>
