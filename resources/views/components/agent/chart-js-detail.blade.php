<script type="text/javascript">
var ctx = $('#barChart');
var data = {
    labels: ['June', 'May', 'April', 'March', 'February', 'January'],
    datasets: [{
        label: 'Orang',
        data: [12, 19, 5, 15, 6, 3],
        backgroundColor: '#36b9cc'
    }]
};
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: data,
    options: {
    	legend: {
    		display: false
    	},
    	tooltips: {
			mode: 'index',
			intersect: false,
		},
    }
});
</script>