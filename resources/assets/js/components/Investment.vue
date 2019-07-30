<template>
  <div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="col-md-8 clearfix" style="margin-top:10px">
        <div class="form-group form-inline">
          <div class="col-md-5 col-sm-5">
            <dt>
              <label for="投資・貯蓄額" class="label-font-size">投資・貯蓄額</label>
            </dt>
            <dd>
              <input type="number" class="form-control" name="save_investment" v-model="investData.total_amount"><label class="label-font-size">円</label>
            </dd>
          </div>
        </div>
      </div>

      <div>
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
                <td class="col-xs-3"><label>{{ rate.cach }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.cash"></td>
              </tr>
              <tr>
                <th class="col-xs-3">国債</th>
                <td class="col-xs-3"><label>{{ rate.government_bonds }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.government_bonds"></td>
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
                <td class="col-xs-3"><label>{{ rate.domestic_stocks }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.domestic_stocks"></td>
              </tr>
              <tr>
                <th class="col-xs-3">先進国株式</th>
                <td class="col-xs-3"><label>{{ rate.developed_stocks }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.developed_stocks"></td>
              </tr>
              <tr>
                <th class="col-xs-3">新興国株式</th>
                <td class="col-xs-3"><label>{{ rate.emerging_stocks }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.emerging_stocks"></td>
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
                <td class="col-xs-3"><label>{{ rate.domestic_bonds }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.domestic_bonds"></td>
              </tr>
              <tr>
                <th class="col-xs-3">先進国債権</th>
                <td class="col-xs-3"><label>{{ rate.developed_bonds }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.developed_bonds"></td>
              </tr>
              <tr>
                <th class="col-xs-3">新興国債権</th>
                <td class="col-xs-3"><label>{{ rate.emerging_bonds }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.emerging_bonds"></td>
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
                <td class="col-xs-3"><label>{{ rate.japan_riet }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.japan_riet"></td>
              </tr>
              <tr>
                <th class="col-xs-3">海外RIET</th>
                <td class="col-xs-3"><label>{{ rate.oversea_riet }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.oversea_riet"></td>
              </tr>
              <tr>
                <th class="col-xs-3">その他</th>
                <td class="col-xs-3"><label>{{ rate.other }}</label></td>
                <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investData.other"></td>
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
    props: ['investments'],
    data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        chartDataHeader: ["種類", "小計"],
        chartDataRows: [
          [ '安全資産', this.sumCach ],
          [ '株式', this.sumStocks ],
          [ '債券', this.sumBonds ],
          [ 'その他', this.sumOther ]
        ],
        chartOptions: {
          chart: { title: '貯蓄・投資配分' }
        },
        investData: {
          "id": '',
          "user_id": '',
          "total_amount": this.investments.total_amount,
          "cash": this.investments.cash,
          "government_bonds": this.investments.government_bonds,
          "domestic_stocks": this.investments.domestic_stocks,
          "developed_stocks": this.investments.developed_stocks,
          "emerging_stocks": this.investments.emerging_stocks,
          "domestic_bonds": this.investments.domestic_bonds,
          "developed_bonds": this.investments.developed_bonds,
          "emerging_bonds": this.investments.emerging_bonds,
          "japan_riet": this.investments.japan_riet,
          "oversea_riet": this.investments.oversea_riet,
          "other": this.investments.other,
        },
        rate: {
          "cash": '',
          "government_bonds": '',
          "domestic_stocks": '',
          "developed_stocks": '',
          "emerging_stocks": '',
          "domestic_bonds": '',
          "developed_bonds": '',
          "emerging_bonds": '',
          "japan_riet": '',
          "oversea_riet": '',
          "other": '',
          "created_at": '',
          "updated_at": ''
        },
      }
    },
    computed: {
      sumCach() {
        const sum = Number(this.investData.cash) + Number(this.investData.government_bonds)
        const item = ['安全資産', sum];
        this.chartDataRows.splice(0, 1, item);
        return sum;
      },
      sumStocks() {
        const sum = Number(this.investData.domestic_stocks) + Number(this.investData.developed_stocks) + Number(this.investData.emerging_stocks)
        if (this.chartDataRows[1][1] != sum) {
          const item = ['株式', sum];
          this.chartDataRows.splice(1, 1, item);
        }
        return sum;
      },
      sumBonds() {
        const sum = Number(this.investData.domestic_bonds) + Number(this.investData.developed_bonds) + Number(this.investData.emerging_bonds)
        if (this.chartDataRows[2][1] != sum) {
          const item = ['債券', sum];
          this.chartDataRows.splice(2, 1, item);
        }
        return sum;
      },
      sumOther() {
        const sum = Number(this.investData.japan_riet) + Number(this.investData.oversea_riet) + Number(this.investData.other)
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
        const sum = this.sumCach + this.sumStocks + this.sumBonds + this.sumOther;
        return sum;
      },
    }
  }
</script>
