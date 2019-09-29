new Vue({
    el: '#app',
    data: function () {
        return {
            activeName: 'calendar'
        }
    },
    created() {
        
    },
    methods: {
        handleClick(tab, event) {
            console.log(tab, event);
        }
    }
})
