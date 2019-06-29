<h2>◯◯さんの支出配分</h2>

<form action="{{ action('Admin\SpendingController@create') }}" method="post" enctype="multipart/form-data">
  <div class="col-md-8 clearfix" style="margin-top:10px">
    <div class="form-group form-inline">
      <div class="col-md-5 col-sm-5">
        <label for="投資・貯蓄額" class="label-font-size">投資・貯蓄額</label>
        <input type="number" class="form-control" name="fixed_income"><label class="label-font-size">円</label>
      </div>
    </div>
  </div>
  <div class="col-md-7 clearfix" style="margin-bottom:20px">
    <h3>安全資産</h3>
    <div>
      <table class="table table-condensed">
        <tr>
          <th>商品</th><th>配分比率</th><th>金額</th>
        </tr>
        <tr>
          <th class="col-xs-3">現金</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">国債</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>株式</h3>
    <div>
      <table class="table table-condensed">
        <tr>
          <th>商品</th><th>配分比率</th><th>金額</th>
        </tr>
        <tr>
          <th class="col-xs-3">国内株式</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">先進国株式</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">新興国株式</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>債券</h3>
    <div>
      <table class="table table-condensed">
        <tr>
          <th>商品</th><th>配分比率</th><th>金額</th>
        </tr>
        <tr>
          <th class="col-xs-3">国内債券</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">先進国債権</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">新興国債権</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>

    <h3>その他</h3>
    <div>
      <table class="table table-condensed">
        <tr>
          <th>商品</th><th>配分比率</th><th>金額</th>
        </tr>
        <tr>
          <th class="col-xs-3">国内RIET</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">海外RIET</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
        <tr>
          <th class="col-xs-3">その他</th>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
          <td><input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)"  class="form-control input-sm"></td>
        </tr>
      </table>
    </div>
    {{ csrf_field() }}
    <button class="btn btn-success pull-right btn-block">保存</button>
  </form>
</div>

<div class="col-xs-12 col-md-5 top-buffer pull-right">
<h3>支出合計 {50,000} 円</h3>
  {{-- <div>
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
  </div> --}}
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
        <investment-chart></investment-chart>
      </div>

  </div>
</div>
