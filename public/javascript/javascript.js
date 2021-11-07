$(document).ready(function (){
    var customers = [];
    var orders;

    $.ajax({
        url: '/store/home/ajax',
        type: 'get',
        success: function(data){
            orders = $.parseJSON(data);
            console.log(orders);
        },
    });

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var template = [];
    var template2 = [['Month', 'Orders', 'Customers']];
    var count = 0;

    $(orders).each(function(k, v) {
        $(v).each(function(kj, vj) {
        template[count] = [vj.month + ''+ vj.day, parseInt(vj.orders), parseInt(vj.customers)]
        count++;
        });
    });

    $(template).each(function(k, v) {
        template2.push(v);
    });

    var data = google.visualization.arrayToDataTable(template2);

    var options = {
        title: 'Statistics',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}

});