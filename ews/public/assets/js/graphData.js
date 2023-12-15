var ctx_Acceleration = document.getElementById("chart-line-accel").getContext("2d");
var gradientStroke1 = ctx_Acceleration.createLinearGradient(0, 230, 0, 50);
gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

function updateChartAcceleration (timestamps, values){
    new Chart(ctx_Acceleration, {
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Getaran",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke1,
                fill: true,
                data: values,
                maxBarThickness: 6
        
            },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
}

function updateHistoryData() {
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/accelerometer-history',
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                // const timestamps = data.data.map(entry => entry.ts);

                const timestamps = data.data.map(entry => {
                    // Convert timestamp to Date object
                    const date = new Date(entry.ts);

                    date.setHours(date.getHours() - 2)
                    
                    // Get hours, minutes, and seconds
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const seconds = date.getSeconds();

                    // Format the time in Indonesia/WIB timezone
                    const formattedTime = `${hours}:${minutes}:${seconds} WIB`;

                    return formattedTime;
                });
                const values = data.data.map(entry => entry.value);

                const reversedTimestamps = timestamps.reverse();
                const reversedValues = values.reverse();

                // Update the chart
                updateChartAcceleration(reversedTimestamps, reversedValues);
                // updateChartUltrasonic();
            } else {
                console.warn('Empty data received.');
                updateChartAcceleration();
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData();


var ctx_Rotation = document.getElementById("chart-line-rota").getContext("2d");//ubah
var gradientStroke2 = ctx_Rotation.createLinearGradient(0, 230, 0, 50);//ubah
gradientStroke2.addColorStop(1, 'rgba(203,12,159,0.2)');//ubah
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');//ubah
gradientStroke2.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors //ubah
//chart2
function updateChartRotation (timestamps, values){//ubah
    new Chart(ctx_Rotation, {//ubah
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Kemiringan",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke2, //ubah
                fill: true,
                data: values,
                maxBarThickness: 6
        
            },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
}

function updateHistoryData2() {//ubah
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/rotation-history',//ubah
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                // const timestamps = data.data.map(entry => entry.ts);

                const timestamps = data.data.map(entry => {
                    // Convert timestamp to Date object
                    const date = new Date(entry.ts);

                    date.setHours(date.getHours() - 2)
                    
                    // Get hours, minutes, and seconds
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const seconds = date.getSeconds();

                    // Format the time in Indonesia/WIB timezone
                    const formattedTime = `${hours}:${minutes}:${seconds} WIB`;

                    return formattedTime;
                });
                const values = data.data.map(entry => entry.value);

                const reversedTimestamps = timestamps.reverse();
                const reversedValues = values.reverse();

                // Update the chart
                updateChartRotation(reversedTimestamps, reversedValues); //ubah
                // updateChartUltrasonic();
            } else {
                console.warn('Empty data received.');
                updateChartRotation(); //ubah
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData2(); //ubah

var ctx_Temperature = document.getElementById("chart-line-temp").getContext("2d");//ubah
var gradientStroke3 = ctx_Temperature.createLinearGradient(0, 230, 0, 50);//ubah
gradientStroke3.addColorStop(1, 'rgba(203,12,159,0.2)');//ubah
gradientStroke3.addColorStop(0.2, 'rgba(72,72,176,0.0)');//ubah
gradientStroke3.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors //ubah

//chart3
function updateChartSuhu (timestamps, values){//ubah
    new Chart(ctx_Temperature, {//ubah
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Suhu",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke3, //ubah
                fill: true,
                data: values,
                maxBarThickness: 6
        
            },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
}

function updateHistoryData3() {//ubah
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/temperature-history',//ubah
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                // const timestamps = data.data.map(entry => entry.ts);

                const timestamps = data.data.map(entry => {
                    // Convert timestamp to Date object
                    const date = new Date(entry.ts);

                    date.setHours(date.getHours() - 2)
                    
                    // Get hours, minutes, and seconds
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const seconds = date.getSeconds();

                    // Format the time in Indonesia/WIB timezone
                    const formattedTime = `${hours}:${minutes}:${seconds} WIB`;

                    return formattedTime;
                });
                const values = data.data.map(entry => entry.value);

                const reversedTimestamps = timestamps.reverse();
                const reversedValues = values.reverse();

                // Update the chart
                updateChartSuhu(reversedTimestamps, reversedValues); //ubah
                // updateChartUltrasonic();
            } else {
                console.warn('Empty data received.');
                updateChartSuhu(); //ubah
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData3(); //ubah


var ctx_Humidity = document.getElementById("chart-line-humi").getContext("2d");//ubah
var gradientStroke4 = ctx_Humidity.createLinearGradient(0, 230, 0, 50);//ubah
gradientStroke4.addColorStop(1, 'rgba(203,12,159,0.2)');//ubah
gradientStroke4.addColorStop(0.2, 'rgba(72,72,176,0.0)');//ubah
gradientStroke4.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors //ubah

//chart4
function updateChartKelembapan (timestamps, values){//ubah
    new Chart(ctx_Humidity, {//ubah
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Kelembapan",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke4, //ubah
                fill: true,
                data: values,
                maxBarThickness: 6
        
            },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
}

function updateHistoryData4() {//ubah
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/humidity-history',//ubah
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                // const timestamps = data.data.map(entry => entry.ts);

                const timestamps = data.data.map(entry => {
                    // Convert timestamp to Date object
                    const date = new Date(entry.ts);

                    date.setHours(date.getHours() - 2)
                    
                    // Get hours, minutes, and seconds
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const seconds = date.getSeconds();

                    // Format the time in Indonesia/WIB timezone
                    const formattedTime = `${hours}:${minutes}:${seconds} WIB`;

                    return formattedTime;
                });
                const values = data.data.map(entry => entry.value);

                const reversedTimestamps = timestamps.reverse();
                const reversedValues = values.reverse();

                // Update the chart
                updateChartKelembapan(reversedTimestamps, reversedValues); //ubah
                // updateChartUltrasonic();
            } else {
                console.warn('Empty data received.');
                updateChartKelembapan(); //ubah
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData4(); //ubah


