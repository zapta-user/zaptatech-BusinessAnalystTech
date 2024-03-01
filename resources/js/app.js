import { createApp, h } from 'vue';
import scheduleCall from '@/components/scheduleCall.vue';

const app = createApp({
    render: () => h(scheduleCall)
});

app.component('schedule-call', scheduleCall);
app.mount('#app')