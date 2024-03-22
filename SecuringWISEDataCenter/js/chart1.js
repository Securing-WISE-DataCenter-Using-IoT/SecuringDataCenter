document.addEventListener('DOMContentLoaded', function () {
  var temperatureChartCanvas = document.getElementById('temperatureChart');
  var humidityChartCanvas = document.getElementById('humidityChart');
  var vibrationChartCanvas = document.getElementById('vibrationChart');
  var waterLeakChartCanvas = document.getElementById('waterLeakChart');
  var gasChartCanvas = document.getElementById('gasChart');
  var vibrationElement = document.getElementById('vibrationElement');
  var vibrationDateTime = document.getElementById('vibrationDateTime');
  var rainwaterElement = document.getElementById('rainwaterElement');
  var rainwaterDateTime = document.getElementById('rainwaterDateTime');

  var temperatureChart, humidityChart, vibrationChart, waterLeakChart, gasChart;

  // Function to update date/time and value elements
  function updateDataElements() {
    fetch('getLast.php')
      .then(response => response.json())
      .then(data => {
        document.getElementById('temperatureDateTime').textContent = data.temperatureDateTime;
        document.getElementById('humidityDateTime').textContent = data.humidityDateTime;
        document.getElementById('gasDateTime').textContent = data.gasRatioDateTime;
        document.getElementById('temperatureElement').textContent = data.lastTemperature;
        document.getElementById('humidityElement').textContent = data.lastHumidity;
        document.getElementById('gasRatioElement').textContent = data.lastGasRatio;
        vibrationElement.textContent = data.lastVibration; // Update vibration value
        vibrationDateTime.textContent = data.vibrationDateTime; // Update vibration date and time
        rainwaterElement.textContent = data.lastRainwater; // Update rainwater value
        rainwaterDateTime.textContent = data.rainwaterDateTime; // Update rainwater date and time
        console.log('Data retrieved successfully!');
      })
      .catch(error => console.error('Error:', error));
  }

  // Function to fetch data and update charts
  function updateCharts() {
    fetch('data.php')
      .then(response => response.json())
      .then(data => {
        var temperatureData = data.temperatureData;
        var humidityData = data.humidityData;
        var gasData = data.gasData;
        var waterLeakData = data.waterLeakData;
        var vibrationData = data.vibrationData;

        var temperatureLabels = temperatureData.map(item => formatTime(item.datetime));
        var temperatureValues = temperatureData.map(item => item.value);

        if (temperatureChart) {
          temperatureChart.data.labels = temperatureLabels;
          temperatureChart.data.datasets[0].data = temperatureValues;
          temperatureChart.update();
        } else {
          temperatureChart = new Chart(temperatureChartCanvas, {
            type: 'line',
            data: {
              labels: temperatureLabels,
              datasets: [{
                label: 'Temperature',
                data: temperatureValues,
                fill: false,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                x: {
                  type: 'time',
                  time: {
                    parser: 'HH:mm',
                    tooltipFormat: 'HH:mm',
                    unit: 'minute',
                    displayFormats: {
                      minute: 'HH:mm'
                    }
                  },
                  ticks: {
                    stepSize: 5 // Updated step size to 5 minutes
                  }
                },
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        }

        var humidityLabels = humidityData.map(item => formatTime(item.datetime));
        var humidityValues = humidityData.map(item => item.value);

        if (humidityChart) {
          humidityChart.data.labels = humidityLabels;
          humidityChart.data.datasets[0].data = humidityValues;
          humidityChart.update();
        } else {
          humidityChart = new Chart(humidityChartCanvas, {
            type: 'line',
            data: {
              labels: humidityLabels,
              datasets: [{
                label: 'Humidity',
                data: humidityValues,
                fill: false,
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                x: {
                  type: 'time',
                  time: {
                    parser: 'HH:mm',
                    tooltipFormat: 'HH:mm',
                    unit: 'minute',
                    displayFormats: {
                      minute: 'HH:mm'
                    }
                  },
                  ticks: {
                    stepSize: 5 // Updated step size to 5 minutes
                  }
                },
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        }

        var gasLabels = gasData.map(item => formatTime(item.datetime));
        var gasValues = gasData.map(item => item.value);

        if (gasChart) {
          gasChart.data.labels = gasLabels;
          gasChart.data.datasets[0].data = gasValues;
          gasChart.update();
        } else {
          gasChart = new Chart(gasChartCanvas, {
            type: 'line',
            data: {
              labels: gasLabels,
              datasets: [{
                label: 'Gas',
                data: gasValues,
                fill: false,
                borderColor: 'rgba(255, 205, 86, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                x: {
                  type: 'time',
                  time: {
                    parser: 'HH:mm',
                    tooltipFormat: 'HH:mm',
                    unit: 'minute',
                    displayFormats: {
                      minute: 'HH:mm'
                    }
                  },
                  ticks: {
                    stepSize: 5 // Updated step size to 5 minutes
                  }
                },
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        }

        var waterLeakLabels = waterLeakData.map(item => formatTime(item.datetime));
        var waterLeakValues = waterLeakData.map(item => item.value);

        if (waterLeakChart) {
          waterLeakChart.data.labels = waterLeakLabels;
          waterLeakChart.data.datasets[0].data = waterLeakValues;
          waterLeakChart.update();
        } else {
          waterLeakChart = new Chart(waterLeakChartCanvas, {
            type: 'line',
            data: {
              labels: waterLeakLabels,
              datasets: [{
                label: 'Water Leak',
                data: waterLeakValues,
                fill: false,
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                x: {
                  type: 'time',
                  time: {
                    parser: 'HH:mm',
                    tooltipFormat: 'HH:mm',
                    unit: 'minute',
                    displayFormats: {
                      minute: 'HH:mm'
                    }
                  },
                  ticks: {
                    stepSize: 5 // Updated step size to 5 minutes
                  }
                },
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        }

        var vibrationLabels = vibrationData.map(item => formatTime(item.datetime));
        var vibrationValues = vibrationData.map(item => item.value);

        if (vibrationChart) {
          vibrationChart.data.labels = vibrationLabels;
          vibrationChart.data.datasets[0].data = vibrationValues;
          vibrationChart.update();
        } else {
          vibrationChart = new Chart(vibrationChartCanvas, {
            type: 'line',
            data: {
              labels: vibrationLabels,
              datasets: [{
                label: 'Vibration',
                data: vibrationValues,
                fill: false,
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                x: {
                  type: 'time',
                  time: {
                    parser: 'HH:mm',
                    tooltipFormat: 'HH:mm',
                    unit: 'minute',
                    displayFormats: {
                      minute: 'HH:mm'
                    }
                  },
                  ticks: {
                    stepSize: 5 // Updated step size to 5 minutes
                  }
                },
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        }

        console.log('Temperature, humidity, gas, water leak, and vibration data retrieved successfully!');
      })
      .catch(error => console.error('Error:', error));
  }

  // Utility function to format date and time
  function formatTime(datetime) {
    var date = new Date(datetime);
    return date.getHours().toString().padStart(2, '0') + ':' + date.getMinutes().toString().padStart(2, '0');
  }

  // Function to update data elements using fetch
  function updateData() {
    fetch('getLast.php')
      .then(response => response.json())
      .then(data => {
        document.getElementById('temperatureDateTime').textContent = data.temperatureDateTime;
        document.getElementById('humidityDateTime').textContent = data.humidityDateTime;
        document.getElementById('gasDateTime').textContent = data.gasRatioDateTime;
        vibrationElement.textContent = data.lastVibration; // Update vibration value
        vibrationDateTime.textContent = data.vibrationDateTime; // Update vibration date and time
        rainwaterElement.textContent = data.lastRainwater; // Update rainwater value
        rainwaterDateTime.textContent = data.rainwaterDateTime; // Update rainwater date and time
        console.log('Data retrieved successfully!');
      })
      .catch(error => console.error('Error:', error));
  }

  // Call the functions initially
  updateDataElements();
  updateCharts();
  updateData();

  // Update data and charts every 5 seconds
  setInterval(function () {
    updateDataElements();
    updateCharts();
    updateData();
  }, 5000);
});
