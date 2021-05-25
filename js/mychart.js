var ctx = document.getElementById('mylineChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Sales',
            lineTension:0.4,
            backgroundColor: 'rgba(255, 99, 132, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [1870, 1580, 5540, 2372, 1420, 4230, 3145] //sales data
        }, {
            label:'Purchase',
            lineTension:0.4,
            backgroundColor: 'rgba(54, 254, 138, 0.1)',
            borderColor: 'rgb(54, 254, 138)',
            data: [2420, 1684, 2486, 3784, 2480, 1220, 1576]  //purchase data
        }]
    },

    // Configuration options go here
    options: {enabled:true},
        
});