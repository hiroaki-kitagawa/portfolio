<template>
    <div class="tab-pane fade in active" id="sim-period">
        <div class="col-md-6 col-sm-6">
            <form class="form-horizontal">
                <p>毎月の積立金額、運用利回り、目標金額をそれぞれ入力し、<br>「計算」ボタンをクリックしてください。</p>
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
                    <label class="col-md-4 col-sm-4 col-xs-12 control-label">目標金額</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control">
                    </div>
                    <label class="control-label">万円</label>
                </div>
                <button class="btn btn-success btn-block-75" id="calculate-period">計算</button>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
            <h3>積立期間</h3>
            <label class="calculatedValue" id="calculatedValue-period">{19.8}年</label>
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
