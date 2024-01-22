var options = {
    series: [ {
    name: 'amount',
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['Number of jobs this month']
  },
  xaxis: {
    categories: ['sale1', 'sale2', 'sale3', 'sale4', 'sale5', 'sale6', 'sale7', 'sale8', 'sale9'],
  },
  yaxis: {
    title: {
      text: ' Number of jobs'
    }
  }

  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();