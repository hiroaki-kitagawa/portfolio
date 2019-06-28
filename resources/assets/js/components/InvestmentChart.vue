<template>
  <div id="chart_investment"></div>
</template>

<script>
  //グラフで使うデータを用意
    var orgdata = [
      ['種類', '割合'],
      ['安全資産', 12500], ['株式', 12500], ['債券', 12500], ['その他', 12500]
    ];
    google.charts.load('current', {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawInvestment);

    function drawInvestment() {
      //どのようなグラフを書くのか指定した関数を用意
      var data = google.visualization.arrayToDataTable(orgdata);
      var options = { title: '貯蓄・投資配分', 'is3D': false };
      var chart = new google.visualization.PieChart(document.getElementById('chart_investment'));
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
