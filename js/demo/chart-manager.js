   
           var options = {
            series: [
            {
              name: 'Q1 Budget',
              group: 'budget',
              data: [44000, 55000]
            },
           
            {
              name: 'Q2 Budget',
              group: 'budget',
              data: [13000, 36000]
            }
          
          ],
            chart: {
            type: 'bar',
            height: 250,
            stacked: true,
          },
          stroke: {
            width: 1,
            colors: ['#fff']
          },
          dataLabels: {
            formatter: (val) => {
              return val / 1000 + 'K'
            }
          },
          plotOptions: {
            bar: {
              horizontal: false
            }
          },
          xaxis: {
            categories: [
              'Online advertising',
              'Sales Training',
             
            ]
          },
          fill: {
            opacity: 1
          },
          colors: ['#80c7fd', '#80f1cb', '#00E396', '#008FFB'],
          yaxis: {
            labels: {
              formatter: (val) => {
                return val / 1000 + 'K'
              }
            }
          },
          legend: {
            position: 'top',
            horizontalAlign: 'left'
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#chart000"), options);
          chart.render();