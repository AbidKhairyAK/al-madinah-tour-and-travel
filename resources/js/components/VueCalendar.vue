<template>
    <v-calendar is-expanded :attributes="calendar"></v-calendar>
</template>

<script>
    import Vue from 'vue';
    import VCalendar from 'v-calendar';

    Vue.use(VCalendar, { locale: 'id-ID' });

    export default {
        data: () => ({
            todos: [
                {description: 'hmmm...', dates: new Date(2019, 7, 7)},
                {description: 'hmmm...', dates: new Date(2019, 6, 8)},
                {description: 'hmmm...', dates: new Date(2019, 6, 11)},
                {description: 'hmmm...', dates: new Date(2019, 6, 21)},
                {description: 'ehem...', dates: new Date(2019, 6, 21)},
            ],
        }),
        computed: {
            calendar() {
                if (this.todos != null) {
                    return [
                        {
                            dates: new Date(),
                            highlight: {
                                color: 'green',
                                fillMode: 'light'
                            }
                        },
                        ...this.todos.map(todo => (
                            {
                                dates: todo.dates,
                                dot: todo.dates > new Date() ? 'blue' : 'red',
                                popover: {
                                    label: todo.description
                                }
                            }
                        )),
                    ];
                } else {
                    return [];
                }
            }
        },
    }
</script>
