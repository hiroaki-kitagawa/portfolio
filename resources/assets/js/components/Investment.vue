<template>
  <div id="investment">
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
              <td class="col-xs-2"><label>{{ cash.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="cash.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">国債</th>
              <td class="col-xs-2"><label>{{ bond.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="bond.fixed"></td>
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
              <td class="col-xs-2"><label>{{ domesticStocks.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="domesticStocks.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">先進国株式</th>
              <td class="col-xs-2"><label>{{ developedStocks.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="developedStocks.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">新興国株式</th>
              <td class="col-xs-2"><label>{{ emergingStocks.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="emergingStocks.fixed"></td>
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
              <td class="col-xs-2"><label>{{ domesticBonds.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="domesticBonds.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">先進国債権</th>
              <td class="col-xs-2"><label>{{ developedBonds.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="developedBonds.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">新興国債権</th>
              <td class="col-xs-2"><label>{{ emergingBonds.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="emergingBonds.fixed"></td>
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
              <td class="col-xs-2"><label>{{ japanRiet.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="japanRiet.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">海外RIET</th>
              <td class="col-xs-2"><label>{{ overseaRiet.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="overseaRiet.fixed"></td>
            </tr>
            <tr>
              <th class="col-xs-3">その他</th>
              <td class="col-xs-2"><label>{{ otherInvestment.rate }}</label></td>
              <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control input-sm" v-model="otherInvestment.fixed"></td>
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
    name: 'investment',
    data() {
      return {
        saveInvestment: '',
        cash: {
          rate: '', fixed: ''
        },
        bond: {
          rate: '', fixed: ''
        },
        domesticStocks: {
          rate: '', fixed: ''
        },
        developedStocks: {
          rate: '', fixed: ''
        },
        emergingStocks: {
          rate: '', fixed: ''
        },
        domesticBonds: {
          rate: '', fixed: ''
        },
        developedBonds: {
          rate: '', fixed: ''
        },
        emergingBonds: {
          rate: '', fixed: ''
        },
        japanRiet: {
          rate: '', fixed: ''
        },
        overseaRiet: {
          rate: '', fixed: ''
        },
        otherInvestment: {
          rate: '', fixed: ''
        },
        medical: {
          rate: '', fixed: ''
        },
        cloth: {
          rate: '', fixed: ''
        },
        allowance: {
          rate: '', fixed: ''
        },
        pocketmoney: {
          rate: '', fixed: ''
        },
        favorite: {
          rate: '', fixed: ''
        },
        otherSelfInvestment: {
          rate: '', fixed: ''
        },
        save: {
          rate: '', fixed: ''
        },
        investment: {
          rate: '', fixed: ''
        },
        otherInvestment: {
          rate: '', fixed: ''
        },


     }
    }
  }
</script>
