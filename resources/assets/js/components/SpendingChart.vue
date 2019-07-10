<template>
  <div class="col-xs-12 col-md-5 top-buffer pull-right">
    <h3>支出割合</h3>
    <div>
      <table class="table">
        <tbody>
          <tr>
            <th>項目</th>
            <th>割合</th>
            <th>合計</th>
          <tr>
            <th class="col-xs-3">固定費</th>
            <td>25%</td>
            <td>{{chartDataRows[0][1]| localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">変動費</th>
            <td>25%</td>
            <td>{{chartDataRows[1][1] | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">自己投資</th>
            <td>25%</td>
            <td>{{chartDataRows[2][1] | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">貯蓄・投資</th>
            <td>25%</td>
            <td>{{chartDataRows[3][1] | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">合計</th>
            <td></td>
            <td>{{ sumSpend | localeNum}} </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="panel panel-default" style="margin-bottom: 60px;">
      <div class="panel-heading">
        ポートフォリオ
      </div>
      <div id="spendChart">
        <GChart type="PieChart" :data="chartData" :options="chartOptions" />
      </div>
    </div>
  </div>
</template>

<script>

  import { GChart } from 'vue-google-charts'
  export default {
    name: 'spendChart',
    components: {
      GChart
    },
    props: ['sumSpending'],
    data(){
      return {
        fixedCost: 0,
        chartDataHeader: ["種類", "小計"],
        chartDataRows: [
          ["固定費", 50000],
          ["変動費", 50000],
          ["自己投資", 50000],
          ["貯蓄・投資", 50000]
        ],
        chartOptions: {
            chart: {
              title: "支出配分"
          }
        }
      }
    },
    computed: {
      chartData() {
        return [this.chartDataHeader, ...this.chartDataRows];
      },
      sumSpend() {
        var sum = 0;
        for (var i = 0; i < 4; i++) {
            sum += this.chartDataRows[i][1]
          }
          return sum;
        }
      }
    }
</script>
