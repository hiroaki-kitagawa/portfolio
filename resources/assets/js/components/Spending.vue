<template>
<div>
  <form action="action('Admin\SpendingController@store')" method="post" enctype="multipart/form-data">
    <div class="col-md-8 clearfix" style="margin-top:10px">
        <div class="form-group form-inline">
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="手取収入" class="label-font-size">手取収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="fixed_income" v-model="spendings.fixed_income"><label class="label-font-size">円</label>
          </dd>
        </div>
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="臨時収入" class="label-font-size">臨時収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="extra_income" v-model="spendings.extra_income"><label class="label-font-size">円</label>
          </dd>
        </div>
      </div>
    </div>
    <div class="col-md-7 clearfix" style="margin-bottom:20px">
      <h3>固定費</h3>
      <div>
        <table class="table">
          <tbody>
            <tr>
              <th>項目</th>
              <th>理想</th>
              <th>実績</th>
              <th>差額</th>
            </tr>
            <tr>
              <th class="col-xs-3">住居費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_rent_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_rent"></td>
              <td class="col-xs-2"><label>{{ rent.budget - rent.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">保険</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_insurance_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_insurance"></td>
              <td class="col-xs-2"><label>{{ insurance.budget - insurance.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_other_budget"></td>
              <td><input type="number" min="1" step="any"spendingspattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.fixed_other"></td>
              <td class="col-xs-2"><label>{{ otherFix.budget - otherFix.fixed}}</label></td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>変動費</h3>
      <div>
        <table class="table">
          <tbody>
            <tr>
              <th>項目</th>
              <th>理想</th>
              <th>実績</th>
              <th>差額</th>
            </tr>
            <tr>
              <th class="col-xs-3">水道光熱費費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_utilities_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_utilities"></td>
              <td class="col-xs-2"><label>{{ util.budget - util.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">食費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_food_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_food"></td>
              <td class="col-xs-2"><label>{{ food.budget - food.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">日用品</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_daily_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_daily"></td>
              <td class="col-xs-2"><label>{{ daily.budget - daily.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">交通費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_transportation_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_transportation"></td>
              <td class="col-xs-2"><label>{{ transportation.budget - transportation.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">自動車関連</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_automotive_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_automotive"></td>
              <td class="col-xs-2"><label>{{ automotive.budget - automotive.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_other_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.variable_other"></td>
              <td class="col-xs-2">
                <label>{{ otherVar.budget - otherVar.fixed}}</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>自己投資</h3>
      <div>
        <table class="table">
          <tbody>
            <tr>
              <th>項目</th>
              <th>理想</th>
              <th>実績</th>
              <th>差額</th>
            </tr>
            <tr>
              <th class="col-xs-3">通信費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_communication_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_communication"></td>
              <td class="col-xs-2">
                <label>{{ communication.budget - communication.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">教育費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_education_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_education"></td>
              <td class="col-xs-2">
                <label>{{ education.budget - education.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">医療費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_medical_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_medical"></td>
              <td class="col-xs-2">
                <label>{{ medical.budget - medical.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">被服費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_clothing_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_clothing"></td>
              <td class="col-xs-2">
                <label>{{ cloth.budget - cloth.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">交際費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_allowance_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_allowance"></td>
              <td class="col-xs-2">
                <label>{{ allowance.budget - allowance.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">小遣い</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_pocketmoney_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_pocketmoney"></td>
              <td class="col-xs-2">
                <label>{{ pocketmoney.budget - pocketmoney.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">嗜好品</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_favorite_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_favorite"></td>
              <td class="col-xs-2">
                <label>{{ favorite.budget - favorite.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_other_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.selfinvest_other"></td>
              <td class="col-xs-2">
                <label>{{ otherSelfInvestment.budget - otherSelfInvestment.fixed}}</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>貯蓄・投資</h3>
      <div>
        <table class="table">
          <tbody>
            <tr>
              <th>項目</th>
              <th>理想</th>
              <th>実績</th>
              <th>差額</th>
            </tr>
            <tr>
              <th class="col-xs-3">預貯金</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_saving_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_saving"></td>
              <td class="col-xs-2">
                <label>{{ save.budget - save.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">投資</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_investment_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_investment"></td>
              <td class="col-xs-2">
                <label>{{ investment.budget - investment.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_other_budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="spendings.storeinvest_other"></td>
              <td class="col-xs-2">
                <label>{{ otherInvestment.budget - otherInvestment.fixed}}</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <input type="hidden" name="_token" :value="csrf">
      <input type="submit" class="btn btn-success pull-right btn-block" value="保存">
    </div>
  </form>
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
            <td>{{ sumFixed | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">変動費</th>
            <td>25%</td>
            <td>{{ sumVar | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">自己投資</th>
            <td>25%</td>
            <td>{{ sumSelfInvest | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">貯蓄・投資</th>
            <td>25%</td>
            <td>{{ sumSaveInvest | localeNum}}</td>
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
 </div>
</template>

<script>
  import { GChart } from 'vue-google-charts'
  export default {
    components: { GChart },
    props: ['spendings'],
    data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        chartDataHeader: ["種類", "小計"],
        chartDataRows: [
          ['固定費', 50000],
          ['変動費', 50000],
          ['自己投資', 50000],
          ['貯蓄・投資', 50000]
        ],
        chartOptions: {
          chart: { title: '支出配分' }
        },
        rent: {
          budget: '', fixed: '', diff: ''
        },
        insurance: {
          budget: '', fixed: '', diff: ''
        },
        otherFix: {
          budget: '', fixed: '', diff: ''
        },
        util: {
          budget: '', fixed: '', diff: ''
        },
        food: {
          budget: '', fixed: '', diff: ''
        },
        daily: {
          budget: '', fixed: '', diff: ''
        },
        transportation: {
          budget: '', fixed: '', diff: ''
        },
        automotive: {
          budget: '', fixed: '', diff: ''
        },
        otherVar: {
          budget: '', fixed: '', diff: ''
        },
        communication: {
          budget: '', fixed: '', diff: ''
        },
        education: {
          budget: '', fixed: '', diff: ''
        },
        medical: {
          budget: '', fixed: '', diff: ''
        },
        cloth: {
          budget: '', fixed: '', diff: ''
        },
        allowance: {
          budget: '', fixed: '', diff: ''
        },
        pocketmoney: {
          budget: '', fixed: '', diff: ''
        },
        favorite: {
          budget: '', fixed: '', diff: ''
        },
        otherSelfInvestment: {
          budget: '', fixed: '', diff: ''
        },
        save: {
          budget: '', fixed: '', diff: ''
        },
        investment: {
          budget: '', fixed: '', diff: ''
        },
        otherInvestment: {
          budget: '', fixed: '', diff: ''
        },
     }
    },
    computed: {
      sumFixed: function() {
        const sum = Number(this.rent.fixed) + Number(this.insurance.fixed) + Number(this.otherFix.fixed);
        const item = ['固定費', sum];
        this.chartDataRows.splice(0, 1, item);
        return sum;
      },
      sumVar: function() {
        const sum = Number(this.util.fixed) + Number(this.food.fixed) + Number(this.daily.fixed) + Number(this.transportation.fixed) + Number(this.automotive.fixed) + Number(this.otherVar.fixed);
        if (this.chartDataRows[1][1] != sum) {
          const item = ['変動費', sum];
          this.chartDataRows.splice(1, 1, item);
        }
        return sum;
      },
      sumSelfInvest: function() {
        const sum = Number(this.communication.fixed) + Number(this.education.fixed) + Number(this.medical.fixed) + Number(this.cloth.fixed) + Number(this.allowance.fixed) + Number(this.pocketmoney.fixed) + Number(this.favorite.fixed) + Number(this.otherSelfInvestment.fixed)
        if (this.chartDataRows[2][1] != sum) {
          const item = ['自己投資', sum];
          this.chartDataRows.splice(2, 1, item);
        }
        return sum;
      },
      sumSaveInvest: function() {
        const sum =  Number(this.save.fixed) + Number(this.investment.fixed) + Number(this.otherInvestment.fixed)
        if (this.chartDataRows[3][1] != sum) {
          const item = ['貯蓄・投資', sum];
          this.chartDataRows.splice(3, 1, item);
        }
        return sum;
      },
      chartData() {
        return [this.chartDataHeader, ...this.chartDataRows];
      },
      sumSpend() {
        const sum = this.sumFixed + this.sumVar + this.sumSelfInvest +  this.sumSaveInvest;
        return sum;
      },
    }
  }
</script>
