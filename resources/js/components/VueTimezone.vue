<template>
    <div>
        {{times.jakarta}}
    </div>
</template>

<script>
    import Vue from 'vue';
    import moment from 'moment-timezone';
    import VueMoment from 'vue-moment-tz';

    Vue.use(VueMoment);

    export default {
        data: () => ({
            times: {
                jakarta: "00:00:00",
                riyadh: "00:00:00",
                cairo: "00:00:00",
            },
        }),
        methods: {
            updateDate() {
                const self = this;
                setInterval(function() {
                    var dates = moment(new Date());
                    self.times.jakarta = dates.clone().tz("Asia/Jakarta").format("HH:mm:ss");
                    self.times.riyadh = dates.clone().tz("Asia/Riyadh").format("HH:mm:ss");
                    self.times.cairo = dates.clone().tz("Africa/Cairo").format("HH:mm:ss");
                }, 1000);
            }
        },
        created() {
            this.updateDate();
        }
    }
</script>
