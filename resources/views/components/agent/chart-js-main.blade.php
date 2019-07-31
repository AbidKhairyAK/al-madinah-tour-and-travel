<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js
"></script>
<script type="text/javascript">

function format_number(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

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
    labels: ['Pendaftar Melalui Agent', 'Pendaftar Melalui Kantor'],
    datasets: [{
        label: 'Jamaah',
        data: [721, 512],
        backgroundColor: ['#28a745', '#17a2b8']
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
                    render: function(args) { return args.value + ' Jamaah'},
                    fontColor: 'white',
                    fontStyle: 'bold'
                },
                {
                    render: 'label',
                    position: 'outside',
                    arc: true,
                    fontColor: '#555',
                    fontSize: 15
                }
            ]
        }
    }
})
</script>