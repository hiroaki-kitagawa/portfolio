<template>
  <!-- 描画エリア -->
  <div id="chart_div"></div>
</template>

<script>
  //グラフで使うデータを用意
    var orgdata = [
      ['種類', '割合'],
      ['固定費', 25], ['変動費', 25], ['自己投資', 25], ['貯蓄・投資', 25]
    ];
    google.charts.load('current', {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
      //どのようなグラフを書くのか指定した関数を用意
      var data = google.visualization.arrayToDataTable(orgdata);
      var options = { title: '支出配分', 'is3D': false };
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      //グラフを表示する
      chart.draw(data, options);
    }

  export default {
    data: {
          dataArray: orgdata
        },
  };
</script>
