<template>
<div>
  <form action="action('SpendingController@create')" method="post" enctype="multipart/form-data">
    <div class="col-md-8 clearfix" style="margin-top:10px">
      <div class="form-group form-inline">
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="手取収入" class="label-font-size">手取収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="fixed_income" v-model="income.fixed_income"><label class="label-font-size">円</label>
          </dd>
        </div>
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="臨時収入" class="label-font-size">臨時収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="extra_income" v-model="income.extra_income"><label class="label-font-size">円</label>
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
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.fixed_rent"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.fixed_rent"></td>
              <td class="col-xs-2"><label>{{ budget.fixed_rent - paid.fixed_rent | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">保険</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.fixed_insurance"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.fixed_insurance"></td>
              <td class="col-xs-2"><label>{{ budget.fixed_insurance - paid.fixed_insurance | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.fixed_other"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.fixed_other"></td>
              <td class="col-xs-2"><label>{{ budget.fixed_other - paid.fixed_other | localeNum }}</label></td>
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
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_utilities"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_utilities"></td>
              <td class="col-xs-2"><label>{{ budget.variable_utilities - paid.variable_utilities | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">食費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_food"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_food"></td>
              <td class="col-xs-2"><label>{{ budget.variable_food - paid.variable_food | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">日用品</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_daily"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_daily"></td>
              <td class="col-xs-2"><label>{{ budget.variable_daily - paid.variable_daily | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">交通費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_transportation"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_transportation"></td>
              <td class="col-xs-2"><label>{{ budget.variable_transportation - paid.variable_transportation | localeNum }}</label> </td>
            </tr>
            <tr>
              <th class="col-xs-3">自動車関連</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_automotive"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_automotive"></td>
              <td class="col-xs-2"><label>{{ budget.variable_automotive - paid.variable_automotive | localeNum }}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.variable_other"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.variable_other"></td>
              <td class="col-xs-2">
                <label>{{ budget.variable_other - paid.variable_other | localeNum }}</label>
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
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_communication"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_communication"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_communication - paid.selfinvest_communication | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">教育費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_education"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_education"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_education - paid.selfinvest_education | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">医療費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_medical"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_medical"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_medical - paid.selfinvest_medical | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">被服費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_clothing"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_clothing"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_clothing - paid.selfinvest_clothing | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">交際費</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_allowance"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_allowance"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_allowance - paid.selfinvest_allowance | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">小遣い</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_pocketmoney"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_pocketmoney"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_pocketmoney - paid.selfinvest_pocketmoney | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">嗜好品</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_favorite"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_favorite"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_favorite - paid.selfinvest_favorite | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.selfinvest_other"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.selfinvest_other"></td>
              <td class="col-xs-2">
                <label>{{ budget.selfinvest_other - paid.selfinvest_other | localeNum }}</label>
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
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.storeinvest_saving"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.storeinvest_saving"></td>
              <td class="col-xs-2">
                <label>{{ budget.storeinvest_saving - paid.storeinvest_saving | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">投資</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.storeinvest_investment"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.storeinvest_investment"></td>
              <td class="col-xs-2">
                <label>{{ budget.storeinvest_investment - paid.storeinvest_investment | localeNum }}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="budget.storeinvest_other"></td>
              <td><input type="number" min="0" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="paid.storeinvest_other"></td>
              <td class="col-xs-2">
                <label>{{ budget.storeinvest_other - paid.storeinvest_other | localeNum }}</label>
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
          </tr>
          <tr>
            <th class="col-xs-3">固定費</th>
            <td>{{ rateFixed }}%</td>
            <td>{{ sumFixed | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">変動費</th>
            <td>{{ rateVar }}%</td>
            <td>{{ sumVar | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">自己投資</th>
            <td>{{ rateSelfInvest }}%</td>
            <td>{{ sumSelfInvest | localeNum}}</td>
          </tr>
          <tr>
            <th class="col-xs-3">貯蓄・投資</th>
            <td>{{ rateSaveInvest }}%</td>
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
          ['固定費', this.sumFixed],
          ['変動費', this.sumVar],
          ['自己投資', this.sumSelfInvest],
          ['貯蓄・投資', this.sumSaveInvest]
        ],
        chartOptions: {
          chart: { title: '支出配分' }
        },
        income: {
          "fixed_income": this.spendings.fixed_income,
          "extra_income": this.spendings.extra_income
        },
        budget: {
          "fixed_rent": this.spendings.fixed_rent_budget,
          "fixed_insurance": this.spendings.fixed_insurance_budget,
          "fixed_other": this.spendings.fixed_other_budget,
          "variable_utilities": this.spendings.variable_utilities_budget,
          "variable_food": this.spendings.variable_food_budget,
          "variable_daily": this.spendings.variable_daily_budget,
          "variable_transportation": this.spendings.variable_transportation_budget,
          "variable_automotive": this.spendings.variable_automotive_budget,
          "variable_other": this.spendings.variable_other_budget,
          "selfinvest_communication": this.spendings.selfinvest_communication_budget,
          "selfinvest_education": this.spendings.selfinvest_education_budget,
          "selfinvest_medical": this.spendings.selfinvest_medical_budget,
          "selfinvest_clothing": this.spendings.selfinvest_clothing_budget,
          "selfinvest_allowance": this.spendings.selfinvest_allowance_budget,
          "selfinvest_pocketmoney": this.spendings.selfinvest_pocketmoney_budget,
          "selfinvest_favorite": this.spendings.selfinvest_favorite_budget,
          "selfinvest_other": this.spendings.selfinvest_other_budget,
          "storeinvest_saving": this.spendings.storeinvest_saving_budget,
          "storeinvest_investment": this.spendings.storeinvest_investment_budget,
          "storeinvest_other": this.spendings.storeinvest_other_budget
        },
        paid: {
          "fixed_rent": this.spendings.fixed_rent,
          "fixed_insurance": this.spendings.fixed_insurance,
          "fixed_other": this.spendings.fixed_other,
          "variable_utilities": this.spendings.variable_utilities,
          "variable_food": this.spendings.variable_food,
          "variable_daily": this.spendings.variable_daily,
          "variable_transportation": this.spendings.variable_transportation,
          "variable_automotive": this.spendings.variable_automotive,
          "variable_other": this.spendings.variable_other,
          "selfinvest_communication": this.spendings.selfinvest_communication,
          "selfinvest_education": this.spendings.selfinvest_education,
          "selfinvest_medical": this.spendings.selfinvest_medical,
          "selfinvest_clothing": this.spendings.selfinvest_clothing,
          "selfinvest_allowance": this.spendings.selfinvest_allowance,
          "selfinvest_pocketmoney": this.spendings.selfinvest_pocketmoney,
          "selfinvest_favorite": this.spendings.selfinvest_favorite,
          "selfinvest_other": this.spendings.selfinvest_other,
          "storeinvest_saving": this.spendings.storeinvest_saving,
          "storeinvest_investment": this.spendings.storeinvest_investment,
          "storeinvest_other": this.spendings.storeinvest_other
        },
     }
    },
    computed: {
      sumFixed() {
        const sum = Number(this.paid.fixed_rent) + Number(this.paid.fixed_insurance) + Number(this.paid.fixed_other);
        const item = ['固定費', sum];
        this.chartDataRows.splice(0, 1, item);
        return sum;
      },
      sumVar() {
        const sum = Number(this.paid.variable_utilities) + Number(this.paid.variable_food) + Number(this.paid.variable_daily) + Number(this.paid.variable_transportation) + Number(this.paid.variable_automotive) + Number(this.paid.variable_other);
        if (this.chartDataRows[1][1] != sum) {
          const item = ['変動費', sum];
          this.chartDataRows.splice(1, 1, item);
        }
        return sum;
      },
      sumSelfInvest() {
        const sum = Number(this.paid.selfinvest_communication) + Number(this.paid.selfinvest_communication) + Number(this.paid.selfinvest_communication) + Number(this.paid.selfinvest_clothing) + Number(this.paid.selfinvest_allowance) + Number(this.paid.selfinvest_pocketmoney) + Number(this.paid.selfinvest_favorite) + Number(this.paid.selfinvest_other)
        if (this.chartDataRows[2][1] != sum) {
          const item = ['自己投資', sum];
          this.chartDataRows.splice(2, 1, item);
        }
        return sum;
      },
      sumSaveInvest() {
        const sum = Number(this.paid.storeinvest_saving) + Number(this.paid.storeinvest_investment) + Number(this.paid.storeinvest_other)
        if (this.chartDataRows[3][1] != sum) {
          const item = ['貯蓄・投資', sum];
          this.chartDataRows.splice(3, 1, item);
        }
        return sum;
      },
      rateFixed() {
        if(this.sumFixed > 0){
          return Math.round((this.sumFixed * 1000 / this.sumSpend) / 10)
      }
        return 0
      },
      rateVar() {
        if(this.sumVar > 0){
          return Math.round((this.sumVar * 1000 / this.sumSpend) / 10)
      }
        return 0
      },
      rateSelfInvest() {
        if(this.sumSelfInvest > 0){
          return Math.round((this.sumSelfInvest * 1000 / this.sumSpend) / 10)
      }
        return 0
      },
      rateSaveInvest() {
        if(this.sumSaveInvest > 0){
          return Math.round((this.sumSaveInvest * 1000 / this.sumSpend) / 10)
      }
        return 0
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
