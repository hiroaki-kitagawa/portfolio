<h2>さんの支出配分</h2>

<form action="{{ action('Admin\SpendingController@create') }}" method="post" enctype="multipart/form-data">
  <div class="col-md-12 clearfix" style="margin-top:10px">
    <div class="form-group form-inline">
      <div class="col-md-5">
        <label for="手取収入" class="label-font-size">手取収入</label>
        <input type="number" class="form-control" name="fixed_income"><label class="label-font-size">円</label>
      </div>
      <div class="col-md-5">
        <label for="臨時収入" class="label-font-size">臨時収入</label>
        <input type="number" class="form-control" name="extra_income"><label class="label-font-size">円</label>
      </div>
    </div>
  </div>
  <div class="col-md-7 clearfix" style="margin-bottom:20px">

    <h3>固定費</h3>
    <div>
      <table class="table table-condensed">
        <tr>
          <th>項目</th><th>理想(25%)</th><th>実績(25%)</th><th>差額</th>
        </tr>
        <tr>
          <th class="col-xs-3">住居費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">保険</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">その他</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>変動費</h3>
    <div>
      <table class="table">
        <tr>
          <th>項目</th><th>理想(25%)</th><th>実績(25%)</th><th>差額</th>
        </tr>
        <tr>
          <th class="col-xs-3">水道光熱費費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">食費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">日用品</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">交通費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">自動車関連</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">その他</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>自己投資</h3>
    <div>
      <table class="table">
        <tr>
          <th>項目</th><th>理想(25%)</th><th>実績(25%)</th><th>差額</th>
        </tr>
        <tr>
          <th class="col-xs-3">通信費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">教育費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">医療費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">被服費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">交際費</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">小遣い</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">その他</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>貯蓄・投資</h3>
    <div>
      <table class="table">
        <tr>
          <th>項目</th><th>理想(25%)</th><th>実績(25%)</th><th>差額</th>
        </tr>
        <tr>
          <th class="col-xs-3">預貯金</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">投資</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">その他</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-success pull-right btn-user-style" value="保存">
  </form>
</div>

<div class="col-xs-12 col-md-5 top-buffer pull-right">
<h3>支出合計 {50,000} 円</h3>
  <div>
    <table class="table">
      <tr>
        <th>項目</th><th>割合</th><th>合計</th>
      <tr>
        <th class="col-xs-3">固定費</th>
        <td>25%</td>
        <td>12,500</td>
      </tr>
      <tr>
        <th class="col-xs-3">変動費</th>
        <td>25%</td>
        <td>12,500</td>
      </tr>
      <tr>
        <th class="col-xs-3">自己投資</th>
        <td>25%</td>
        <td>12,500</td>
      </tr>
      <tr>
        <th class="col-xs-3">貯蓄・投資</th>
        <td>25%</td>
        <td>12,500</td>
      </tr>
      <tr>
        <th class="col-xs-3">合計</th>
        <td></td>
        <td>50,000</td>
      </tr>
    </table>
  </div>

  <div class="panel panel-default" style="margin-bottom: 60px;">
      <div class="panel-heading">
          ポートフォリオ
      </div>
      <div id="app">
        <spending-chart></spending-chart>
      </div>

  </div>
</div>
