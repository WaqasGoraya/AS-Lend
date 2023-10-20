// Line Chart 1
var options = {
    series: [{
      name: "Desktops",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
  }],
    chart: {
    height: 220,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth',
    colors: ['#89C975']
  },
  markers: {
    colors: ['#000']
  },
  tooltip: {
    marker: {
        show: false
    }
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
  };

  var chart = new ApexCharts(document.querySelector("#linechart"), options);
  chart.render();


// Radial Chart
var options = {
    series: [75],
    chart: {
    height: 350,
    type: 'radialBar',
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    radialBar: {
    //   startAngle: -135,
    //   endAngle: 225,
       hollow: {
        margin: 0,
        size: '70%',
        background: '#fff',
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: 'front',
      },
      track: {
        background: '#eee',
        strokeWidth: '60%',
        margin: 0,
      },
  
      dataLabels: {
        show: true,
        value: {
          formatter: function(val) {
            return parseInt(val);
          },
          color: '#000',
          fontSize: '48px',
          fontWeight: '600',
          fontFamily: 'Poppins',
          show: true,
        }
      }
    }
  },
  fill: {
    type: 'gradient',
    colors: ['#2a920a'],
    gradient: {
      type: 'horizontal',
      gradientToColors: ['#86c772'],
      inverseColors: true,
      opacityFrom: 1,
      opacityTo: 1,
      stops: [0, 100]
    }
  },
  stroke: {
    lineCap: 'round'
  },
  labels: [''],
  };

  var chart = new ApexCharts(document.querySelector("#radialChart"), options);
  chart.render();