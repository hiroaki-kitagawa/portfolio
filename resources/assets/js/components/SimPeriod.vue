<template>
    <div class="tab-pane fade" id="sim-period">
        <div class="col-md-6 col-sm-6">
            <form class="form-horizontal">
                <p>毎月の積立金額、運用利回り、目標金額をそれぞれ入力し、<br>「計算」ボタンをクリックしてください。</p>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">毎月の積立金額</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control" v-model="tsumitate">
                    </div>
                    <label class="control-label">万円</label>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">運用利回り(年)</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control" v-model="annualRate">
                    </div>
                    <label class="control-label">％</label>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">目標金額</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control" v-model="futureValue">
                    </div>
                    <label class="control-label">万円</label>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
            <h3>積立期間</h3>
            <label class="calculatedValue">{{calculatedValue}}年</label>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'sim-period',
        data() {
        return {
            tsumitate: '', // 積立金額
            annualRate: '', // 年利回り
            kikan: '', // 期間
            futureValue: '', // 将来価値
            }
        },
        computed: {
            calculatedValue: function ()
            {
                let t = this.tsumitate * 10000; // 積立金額
                let r = this.annualRate / 100 / 12; // 一月あたりの利率に変換
                let n = 0;
                let FV = this.futureValue * 10000; // 将来価値

                // 積立期間
                n = Math.log((r * FV + t) / t) / Math.log(1 + r);
                n = Math.ceil(n / 12 * 10) / 10;
                // n = n.toFixed(1);
                return isNaN(n) ? 0 : n // 計算前のNull値は0で表示
            }
        }
    }
</script>
