import Chart from 'chart.js';

export default {
    template: '<canvas id="graph" width="400" height="400"></canvas>',
    mounted() {
        var chart = new Chart(document.getElementById('graph').getContext('2d'), {
            labels: ['test'],
            datasets: [{
                label: '# of Votes',
                data: [3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                ],
            }],
        });
        console.log(chart);
    }
}