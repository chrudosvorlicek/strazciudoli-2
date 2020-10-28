<template>
    <div class="overflow-auto">
        <b-pagination
            v-model="currentPage"
            :total-rows="itemsCount"
            :per-page="perPage"
            aria-controls="plan-table"
        ></b-pagination>

        <b-table hover
                 id="plan-table"
                 :busy.sync="isBusy"
                 :items="eventsProvider"
                 :fields="fields"
                 :per-page="perPage"
                 :current-page="currentPage"
                 small
        ></b-table>

        <b-pagination
            v-model="currentPage"
            :total-rows.sync="itemsCount"
            :per-page="perPage"
            aria-controls="plan-table"
        ></b-pagination>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "FilterTable",
    data() {
        return {
            currentPage: 1,
            isBusy: false,
            itemsCount: 0,
        }
    },
    props: {

        countKey: {type: String, default: 'itemsCount'},
        dataKey: {type: String, default: 'items'},
        endpoint: String,
        fields: Array,
        perPage: {
            type: Number,
            default: 5,
        }
    },
    methods: {
        async eventsProvider(ctx) {
            let data = {
                currentPage: ctx.currentPage,
                perPage: ctx.perPage,
                filter: ctx.filter,
                sortKey: ctx.sortBy,
                sortDir: ctx.sortDesc === true ? 'desc' : 'asc',
            };
            const response = await axios.post(this.endpoint, data);
            this.itemsCount = response.data[this.countKey];
            return response.data[this.dataKey];
        },
    },
}

</script>
