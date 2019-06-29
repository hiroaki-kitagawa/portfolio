<template>
    <div class="tab-pane fade in active" id="sim-future">
        <div class="col-md-6 col-sm-6">
            <form class="form-horizontal">
                <p>毎月の積立金額、運用利回り、積立期間をそれぞれ入力し、<br>「計算」ボタンをクリックしてください。</p>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">毎月の積立金額</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control">
                    </div>
                    <label class="control-label">万円</label>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">運用利回り(年)</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control">
                    </div>
                    <label class="control-label">％</label>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">積立期間</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                    <select name="" class="form-control">
                        <option value="">▼</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    </div>
                    <label class="control-label">年</label>
                </div>
                <button class="btn btn-success btn-block-75" id="calculate-future">計算</button>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
            <h3>最終積立金額</h3>
            <label class="calculatedValue"  id="calculatedValue-future">{2000万円}</label>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
