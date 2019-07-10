<template>
  <div>
    <form action="action('Admin\SpendingController@create')" method="post" enctype="multipart/form-data">
      <div class="col-md-8 clearfix" style="margin-top:10px">
        <div class="form-group form-inline">
          <div class="col-md-5 col-sm-5">
            <dt>
              <label for="投資・貯蓄額" class="label-font-size">投資・貯蓄額</label>
            </dt>
            <dd>
              <input type="number" class="form-control" name="save_investment" v-model="saveInvestment"><label class="label-font-size">円</label>
            </dd>
          </div>
        </div>
      </div>
      <div class="col-md-7 clearfix" style="margin-bottom:20px">
        <h3>安全資産</h3>
        <div>
          <table class="table">
            <tbody>
              <tr>
                <th>商品</th>
                <th>割合</th>
                <th>金額</th>
              </tr>
              <tr>
                <th class="col-xs-3">現金</th>
                <td class="col-xs-3"><label>{{ cash.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="cash.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">国債</th>
                <td class="col-xs-3"><label>{{ bond.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="bond.cost"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3>株式</h3>
        <div>
          <table class="table">
            <tbody>
              <tr>
                <th>商品</th>
                <th>割合</th>
                <th>金額</th>
              </tr>
              <tr>
                <th class="col-xs-3">国内株式</th>
                <td class="col-xs-3"><label>{{ domesticStocks.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="domesticStocks.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">先進国株式</th>
                <td class="col-xs-3"><label>{{ developedStocks.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="developedStocks.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">新興国株式</th>
                <td class="col-xs-3"><label>{{ emergingStocks.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="emergingStocks.cost"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3>債券</h3>
        <div>
          <table class="table">
            <tbody>
              <tr>
                <th>商品</th>
                <th>割合</th>
                <th>金額</th>
              </tr>
              <tr>
                <th class="col-xs-3">国内債券</th>
                <td class="col-xs-3"><label>{{ domesticBonds.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="domesticBonds.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">先進国債権</th>
                <td class="col-xs-3"><label>{{ developedBonds.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="developedBonds.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">新興国債権</th>
                <td class="col-xs-3"><label>{{ emergingBonds.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="emergingBonds.cost"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <h3>その他</h3>
        <div>
          <table class="table">
            <tbody>
              <tr>
                <th>商品</th>
                <th>割合</th>
                <th>金額</th>
              </tr>
              <tr>
                <th class="col-xs-3">国内RIET</th>
                <td class="col-xs-3"><label>{{ japanRiet.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="japanRiet.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">海外RIET</th>
                <td class="col-xs-3"><label>{{ overseaRiet.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="overseaRiet.cost"></td>
              </tr>
              <tr>
                <th class="col-xs-3">その他</th>
                <td class="col-xs-3"><label>{{ otherInvestment.rate }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherInvestment.cost"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <input type="hidden" name="_token" :value="csrf">
        <input type="submit" class="btn btn-success pull-right btn-block" value="保存">
      </div>
    </form>
    <div class="col-xs-12 col-md-5 top-buffer pull-right">
      <h3>貯蓄・投資割合</h3>
      <div>
        <table class="table">
          <tbody>
            <tr>
              <th>項目</th>
              <th>割合</th>
              <th>合計</th>
            <tr>
              <th class="col-xs-3">安全資産</th>
              <td>25%</td>
              <td>{{ sumCach | localeNum}}</td>
            </tr>
            <tr>
              <th class="col-xs-3">株式</th>
              <td>25%</td>
              <td>{{ sumStocks | localeNum}}</td>
            </tr>
            <tr>
              <th class="col-xs-3">債券</th>
              <td>25%</td>
              <td>{{ sumBonds | localeNum}}</td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td>25%</td>
              <td>{{ sumOther | localeNum}}</td>
            </tr>
            <tr>
              <th class="col-xs-3">合計</th>
              <td></td>
              <td>{{ sumSaveInvest | localeNum}} </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel panel-default" style="margin-bottom: 60px;">
        <div class="panel-heading">
          ポートフォリオ
        </div>
        <div id="investChart">
          <GChart type="PieChart" :data="chartData" :options="chartOptions" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { GChart } from 'vue-google-charts'
  export default {
    components: { GChart },
    data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        chartDataHeader: ["種類", "小計"],
        chartDataRows: [
          [ '安全資産', 25000 ],
          [ '株式', 25000 ],
          [ '債券', 25000 ],
          [ 'その他', 25000 ]
        ],
        chartOptions: {
          chart: { title: '貯蓄・投資配分' }
        },
        saveInvestment: '',
        cash: {
          rate: '', cost: ''
        },
        bond: {
          rate: '', cost: ''
        },
        domesticStocks: {
          rate: '', cost: ''
        },
        developedStocks: {
          rate: '', cost: ''
        },
        emergingStocks: {
          rate: '', cost: ''
        },
        domesticBonds: {
          rate: '', cost: ''
        },
        developedBonds: {
          rate: '', cost: ''
        },
        emergingBonds: {
          rate: '', cost: ''
        },
        japanRiet: {
          rate: '', cost: ''
        },
        overseaRiet: {
          rate: '', cost: ''
        },
        otherInvestment: {
          rate: '', cost: ''
        },
      }
    },
    computed: {
      sumCach: function() {
        const sum = Number(this.cash.cost) + Number(this.bond.cost)
        const item = ['安全資産', sum];
        this.chartDataRows.splice(0, 1, item);
        return sum;
      },
      sumStocks: function() {
        const sum = Number(this.domesticStocks.cost) + Number(this.developedStocks.cost) + Number(this.emergingStocks.cost)
        if (this.chartDataRows[1][1] != sum) {
          const item = ['株式', sum];
          this.chartDataRows.splice(1, 1, item);
        }
        return sum;
      },
      sumBonds: function() {
        const sum = Number(this.domesticBonds.cost) + Number(this.developedBonds.cost) + Number(this.emergingBonds.cost)
        if (this.chartDataRows[2][1] != sum) {
          const item = ['債券', sum];
          this.chartDataRows.splice(2, 1, item);
        }
        return sum;
      },
      sumOther: function() {
        const sum = Number(this.japanRiet.cost) + Number(this.overseaRiet.cost) + Number(this.otherInvestment.cost)
        if (this.chartDataRows[3][1] != sum) {
          const item = ['その他', sum];
          this.chartDataRows.splice(3, 1, item);
        }
        return sum;
      },
      chartData() {
        return [ this.chartDataHeader, ...this.chartDataRows ];
      },
      sumSaveInvest() {
        var sum = 0;
        sum = this.sumCach + this.sumStocks + this.sumBonds + this.sumOther;
        return sum;
      },
    }
  }
</script>
