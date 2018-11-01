import {dataTable,dataTableColumn} from "vue-data-table"

Vue.use(dataTable);
Vue.use(dataTableColumn);

Vue.component('DataTable', require("../../components/viewers/DataTable.vue"));

const table = new Vue({
    el: "#app"
});
