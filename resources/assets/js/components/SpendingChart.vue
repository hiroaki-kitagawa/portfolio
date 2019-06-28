<template>
  <div id="chart_spending"></div>
</template>

<script>
  //グラフで使うデータを用意
    var orgdata = [
      ['種類', '割合'],
      ['固定費', 12500], ['変動費', 12500], ['自己投資', 12500], ['貯蓄・投資', 12500]
    ];
    google.charts.load('current', {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawSpending);

    function drawSpending() {
      //どのようなグラフを書くのか指定した関数を用意
      var data = google.visualization.arrayToDataTable(orgdata);
      var options = { title: '支出配分', 'is3D': false };
      var chart = new google.visualization.PieChart(document.getElementById('chart_spending'));
      //グラフを表示する
      chart.draw(data, options);
    }

  export default {
    data: function() {
      return {
        dataArray: orgdata
      }
    },
  };
</script>
