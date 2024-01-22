(function($) {
    "use strict";
    const ctxUsers = $('#vironeer-users-charts'),
        ctxEarnings = $('#vironeer-earnings-charts'),
        ctxUploads = $('#vironeer-uploads-charts'),
        ctxBrowsers = $('#vironeer-browsers-charts'),
        ctxOs = $('#vironeer-os-charts'),
        ctxCountries = $('#vironeer-countries-charts');
    const charts = {
        initUsers: function() { this.usersChartsData() },
        initEarnings: function() { this.earningsChartsData() },
        initUploads: function() { this.uploadsChartsData() },
        initLogs: function() { this.logsChartsData() },
        usersChartsData: function() {
            const dataUrl = BASE_URL + '/dashboard/charts/users';
            const request = $.ajax({
                method: 'GET',
                url: dataUrl
            });
            request.done(function(response) {
                charts.createUsersCharts(response);
            });
        },
        earningsChartsData: function() {
            const dataUrl = BASE_URL + '/dashboard/charts/earnings';
            const request = $.ajax({
                method: 'GET',
                url: dataUrl
            });
            request.done(function(response) {
                charts.createEarningsCharts(response);
            });
        },
        uploadsChartsData: function() {
            const dataUrl = BASE_URL + '/dashboard/charts/uploads';
            const request = $.ajax({
                method: 'GET',
                url: dataUrl
            });
            request.done(function(response) {
                charts.createUploadsCharts(response);
            });
        },
        logsChartsData: function() {
            const dataUrl = BASE_URL + '/dashboard/charts/logs';
            const request = $.ajax({
                method: 'GET',
                url: dataUrl
            });
            request.done(function(response) {
                charts.createBrowsersCharts(response.browsers);
                charts.createOsCharts(response.os);
                charts.createOCountriesCharts(response.countries);
            });
        },
        createUsersCharts: function(response) {
            const max = response.suggestedMax;
            const labels = response.usersChartLabels;
            const data = response.usersChartData;
            window.Chart && (new Chart(ctxUsers, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Users',
                        data: data,
                        fill: true,
                        tension: 0.3,
                        backgroundColor: "#d4e3f9",
                        borderColor: "#0045ad",
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    scales: {
                        y: {
                            suggestedMax: max,
                        }
                    }
                }
            })).render();
        },
        createEarningsCharts: function(response) {
            const max = response.suggestedMax;
            const labels = response.earningsChartLabels;
            const data = response.earningsChartData;
            window.Chart && (new Chart(ctxEarnings, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Earnings',
                        data: data,
                        fill: true,
                        tension: 0.3,
                        backgroundColor: "#e2f3e1",
                        borderColor: "#30b244",
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';

                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += WEBSITE_CURRENCY + context.parsed.y;
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            ticks: {
                                beginAtZero: true,
                                callback: function(value, index, values) {
                                    return value + ' ' + WEBSITE_CURRENCY;
                                }
                            },
                            suggestedMax: max,
                        }
                    },
                }
            })).render();
        },
        createUploadsCharts: function(response) {
            const max = response.suggestedMax;
            const labels = response.uploadsChartLabels;
            const data = response.uploadsChartData;
            window.Chart && (new Chart(ctxUploads, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Uploads',
                        data: data,
                        fill: true,
                        tension: 0.3,
                        backgroundColor: SECONDARY_COLOR,
                        borderColor: SECONDARY_COLOR,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    scales: {
                        y: {
                            suggestedMax: max,
                        }
                    }
                }
            })).render();
        },
        createBrowsersCharts: function(response) {
            window.Chart && (new Chart(ctxBrowsers, {
                type: 'doughnut',
                data: {
                    labels: response.keys,
                    datasets: [{
                        data: response.values,
                        backgroundColor: [
                            "#263bd8",
                            "#91628d",
                            "#d4aaf1",
                            "#aab045",
                            "#71cccd",
                            "#de388a",
                            "#a7935b",
                            "#5fb2fb",
                            "#fabb01",
                            "#51ab1c",
                            "#728251",
                            "#709e14",
                            "#2e4007",
                            "#a57837",
                            "#8f1672",
                            "#a76bd1",
                            "#5b6d38",
                            "#7cb7aa",
                            "#a140b7",
                            "#17855c",
                            "#4bb7ce",
                            "#a688b0",
                            "#5351b7",
                            "#569cfa",
                            "#8ca2d1",
                        ],
                        borderColor: [
                            '#e7505abf'
                        ],
                        borderWidth: 0,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                }
            })).render();
        },
        createOsCharts: function(response) {
            window.Chart && (new Chart(ctxOs, {
                type: 'doughnut',
                data: {
                    labels: response.keys,
                    datasets: [{
                        data: response.values,
                        backgroundColor: [
                            "#52ebad",
                            "#f75345",
                            "#9b5aed",
                            "#9a3cb",
                            "#51a62d",
                            "#af3ca2",
                            "#fab325",
                            "#39a474",
                            "#95c55e",
                            "#38d692",
                            "#e46126",
                            "#f68f56",
                            "#62c4df",
                            "#fbcd37",
                            "#33edba",
                            "#bbb4b8",
                            "#af6189",
                            "#21bdb",
                            "#1e106a",
                            "#817221",
                            "#431c09",
                            "#91c508",
                            "#355b62",
                            "#697079",
                            "#de3ae4",
                        ],
                        borderColor: [
                            '#e7505abf'
                        ],
                        borderWidth: 0,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                }
            })).render();
        },
        createOCountriesCharts: function(response) {
            window.Chart && (new Chart(ctxCountries, {
                type: 'doughnut',
                data: {
                    labels: response.keys,
                    datasets: [{
                        data: response.values,
                        backgroundColor: [
                            "#2ccf1b",
                            "#42ea",
                            "#6e1dc4",
                            "#bf1f98",
                            "#f5ffb2",
                            "#4bfce4",
                            "#bb9416",
                            "#460716",
                            "#3fc812",
                            "#86b104",
                            "#c5fe39",
                            "#29e230",
                            "#66b8dc",
                            "#9f5927",
                            "#28702c",
                            "#abe28c",
                            "#9fc9ef",
                            "#d50909",
                            "#aecc6f",
                            "#39540c",
                            "#bc9623",
                            "#d93b8b",
                            "#b907d1",
                            "#436948",
                            "#9ea635",
                        ],
                        borderColor: [
                            '#e7505abf'
                        ],
                        borderWidth: 0,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                }
            })).render();
        }
    }
    charts.initUsers();
    charts.initUploads();
    if (ctxBrowsers.length || ctxOs.length || ctxCountries.length) {
        charts.initLogs();
    }
    if (LICENCE_TYPE == 2) {
        charts.initEarnings();
    }
})(jQuery);