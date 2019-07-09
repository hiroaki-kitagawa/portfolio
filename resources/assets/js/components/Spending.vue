<template>
  <div id="spending">
    <div class="col-md-8 clearfix" style="margin-top:10px">
      <div class="form-group form-inline">
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="手取収入" class="label-font-size">手取収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="fixed_income" v-model="fixedIncome"><label class="label-font-size">円</label>
          </dd>
        </div>
        <div class="col-md-5 col-sm-5">
          <dt>
            <label for="臨時収入" class="label-font-size">臨時収入</label>
          </dt>
          <dd>
            <input type="number" class="form-control" name="extra_income" v-model="extraIncome"><label class="label-font-size">円</label>
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
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="rent.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="rent.fixed"></td>
              <td class="col-xs-2"><label>{{ rent.budget - rent.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">保険</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="insurance.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="insurance.fixed"></td>
              <td class="col-xs-2"><label>{{ insurance.budget - insurance.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherFix.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherFix.fixed"></td>
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
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="util.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="util.fixed"></td>
              <td class="col-xs-2"><label>{{ util.budget - util.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">食費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="food.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="food.fixed"></td>
              <td class="col-xs-2"><label>{{ food.budget - food.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">日用品</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="daily.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="daily.fixed"></td>
              <td class="col-xs-2"><label>{{ daily.budget - daily.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">交通費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="transportation.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="transportation.fixed"></td>
              <td class="col-xs-2"><label>{{ transportation.budget - transportation.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">自動車関連</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="automotive.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="automotive.fixed"></td>
              <td class="col-xs-2"><label>{{ automotive.budget - automotive.fixed}}</label></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherVar.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherVar.fixed"></td>
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
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="communication.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="communication.fixed"></td>
              <td class="col-xs-2">
                <label>{{ communication.budget - communication.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">教育費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="education.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="education.fixed"></td>
              <td class="col-xs-2">
                <label>{{ education.budget - education.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">医療費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="medical.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="medical.fixed"></td>
              <td class="col-xs-2">
                <label>{{ medical.budget - medical.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">被服費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="cloth.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="cloth.fixed"></td>
              <td class="col-xs-2">
                <label>{{ cloth.budget - cloth.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">交際費</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="allowance.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="allowance.fixed"></td>
              <td class="col-xs-2">
                <label>{{ allowance.budget - allowance.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">小遣い</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="pocketmoney.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="pocketmoney.fixed"></td>
              <td class="col-xs-2">
                <label>{{ pocketmoney.budget - pocketmoney.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">嗜好品</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="favorite.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="favorite.fixed"></td>
              <td class="col-xs-2">
                <label>{{ favorite.budget - favorite.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherSelfInvestment.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherSelfInvestment.fixed"></td>
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
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherSelfInvestment.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherSelfInvestment.fixed"></td>
              <td class="col-xs-2">
                <label>{{ otherSelfInvestment.budget - otherSelfInvestment.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">投資</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investment.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="investment.fixed"></td>
              <td class="col-xs-2">
                <label>{{ investment.budget - investment.fixed}}</label>
              </td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherInvestment.budget"></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherInvestment.fixed"></td>
              <td class="col-xs-2">
                <label>{{ otherInvestment.budget - otherInvestment.fixed}}</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <input type="submit" class="btn btn-success pull-right btn-block" value="保存">
    </div>
  </div>
</template>

<script>
  export default {
    name: 'spending',
    data() {
      return {
        fixedIncome: '',
        extraIncome: '',
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
    }
  }
</script>
