import {Chart} from "chart.js/auto";

document.addEventListener('DOMContentLoaded', function (mode) {
    // recuperation du contexte du canvas
    const ctx = document.getElementById('myChart').getContext('2d');

    //Initialisation de l'instance de charts.js
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [
                {
                    label: 'Likes',
                    data: [],
                    backgroundColor: 'rgba(112,178,245,0.75)',
                    borderColor: 'rgb(2,22,98)',
                    borderWidth: 1
                },
                {
                    label: 'Dislikes',
                    data: [],
                    backgroundColor: 'rgba(238,103,103,0.62)',
                    borderColor: 'rgba(213,0,0,0.81)',
                    borderWidth: 1
                }
            ]
        }
    })
    axios.get('/recup-donnees')
        .then(response =>{
            console.log(response);
            myChart.data.labels = response.data.map(entry => entry.programme_titre);
            myChart.data.datasets[0].data = response.data.map(entry => entry.likesCount);
            myChart.data.datasets[1].data = response.data.map(entry => entry.dislikesCount);

            myChart.update(mode);
        }).catch( error => {
            console.error('Erreur lors du chargement des données du graphique', error);
    })
})