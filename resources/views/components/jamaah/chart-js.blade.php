<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js
"></script>
<script type="text/javascript">
var ctx = $('#barChart');
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Orang',
        data: [12, 19, 5, 15, 6, 3],
        backgroundColor: '#36b9cc'
    }]
};
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
    	legend: {
    		display: false
    	},
    	tooltips: {
			mode: 'index',
			intersect: false,
		},
        scales: {
        	xAxes: [{
				display: true,
			}],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 5,
                    max: Math.max(...data.datasets[0].data) + 5
                }
            }]
        },
        plugins: {
            labels: {
                render: function(args) { return args.value + ' orang'}
            }
        }
    }
});

var pie = $('#pieChart');
var pieData = {
    labels: ['Haji dan Umroh', 'Umroh', 'Umroh Plus', 'Travel Ke Turki', 'Travel Ke Palestina'],
    datasets: [{
        label: 'Orang',
        data: [47, 67, 21, 18, 31],
        backgroundColor: ['#28a745', '#17a2b8', '#ffc107', '#dc3545', '#007bff']
    }]
};
var pieChart = new Chart(pie, {
    type: 'pie',
    data: pieData,
    options: {
        legend: {
            display: false
        },
        plugins: {
            labels: [
                {
                    render: function(args) { return args.value + ' orang'},
                    fontColor: 'white',
                    fontStyle: 'bold'
                },
                {
                    render: 'label',
                    position: 'outside',
                    arc: true,
                    fontColor: '#555',
                }
            ]
        }
    }
})
</script>