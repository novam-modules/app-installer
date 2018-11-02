<template>
    <!-- <table class="table">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table> -->
    <data-table @get-data="getData" @get-data-count="getDataCount">
    </data-table>
</template>

<script>
export default {
    name: "data-table",
    data(){
        return {
            dataSet: {}
        }
    },
    methods: {
        getData: function(first,last,cb) {
            cb(dataSet)
        },
        getDataCount: function(cb) {
            cb(dataCount)
        }
    }
}
</script>

<style>

</style>
