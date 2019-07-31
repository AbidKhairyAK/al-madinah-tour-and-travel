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
        data: [130000000, 190000000, 50000000, 150000000, 60000000, 30000000],
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
            callbacks: {
                label: function(tooltipItem, data) {
                    return tooltipItem.label + ': Rp ' + format_number(tooltipItem.value);
                }
            }
        },
        scales: {
            xAxes: [{
                display: true,
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 50000000,
                    max: Math.max(...data.datasets[0].data) + 20000000,
                    callback: function(value, index, values) {
                        return (value / 1000000) + 'Jt';
                    }
                }
            }]
        },
        plugins: {
            labels: {
                render: function(args) { return 'Rp ' + format_number(args.value)}
            }
        }
    }
});

var pie = $('#pieChart');
var pieData = {
    labels: ['LUNAS', 'DP', 'CICIL'],
    datasets: [{
        label: 'Transaksi',
        data: [47, 67, 21],
        backgroundColor: ['#28a745', '#17a2b8', '#ffc107']
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
                    render: function(args) { return args.value + ' Transaksi'},
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