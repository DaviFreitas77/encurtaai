const data = {
  labels: ['Celular', 'Desktop', 'Tablet'],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'doughnut', 
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: false ,
      plugins: {
      legend: {
        position: 'left',
        align: 'center',  
        labels: {
          boxWidth: 20,    
          padding: 20     
        }
      }}
  }
};

const myChart = new Chart(
  document.getElementById('myChart'),
  config
);


// grafico Browsers
const dataBrowsers = {
  labels: ['Chrome', 'Firefox', 'Safari', 'Edge', 'Outros'],
  datasets: [{
    label: 'Browsers',
    data: [300, 50, 100, 50, 50],
    backgroundColor: [
      'rgb(66, 135, 245)',  
      'rgb(255, 99, 132)',   
      'rgb(255, 205, 86)',   
      'rgb(75, 192, 192)',   
      'rgb(153, 102, 255)'  
    ],
    hoverOffset: 4
  }]
};


const configBrowsers = {
  type: 'doughnut', 
  data: dataBrowsers,
  options: {
    responsive: true,
    maintainAspectRatio: false ,
      plugins: {
      legend: {
        position: 'left',
        align: 'center',  
        labels: {
          boxWidth: 20,    
          padding: 20     
        }
      }}
  }
};

const myChartBrowsers = new Chart(
  document.getElementById('myChartBrowsers'),
  configBrowsers
);




const labels = ['Brasil','Argentina','Estados unidos','México' ];

const dataCountries = {
  labels: labels,
  datasets: [{
    label: 'Visitantes por país',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

const configCountries = {
  type: 'bar',
  data: dataCountries,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};

const myChartCountries = new Chart(
  document.getElementById('myChartCountries'),
  configCountries
);



const labelsHrs = ['00:00','01:00','02:00','03:00','04:00','05:00','06:00','07:00','08:00'];

const dataHrs = {
  labels: labelsHrs,
  datasets: [{
    label: 'click por hora',
    data: [65, 59, 80, 81, 56, 55, 40, 70, 60],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    backgroundColor: 'rgba(75, 192, 192, 0.2)',
    tension: 0.1
  }]
};

const configHrs = {
  type: 'line', // corrigido de 'linha'
  data: dataHrs,
  options: {    
    responsive: true,
    maintainAspectRatio: false, 
    plugins: {
      legend: {
        position: 'top', // posição da legenda
      },
      title: {
        display: true,
        text: 'Usuários por Hora'
      }
    },
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};

const myChartHrs = new Chart(
  document.getElementById('myChartHrs'),
  configHrs
);