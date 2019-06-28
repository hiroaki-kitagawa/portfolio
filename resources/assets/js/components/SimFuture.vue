<template>
    <div class="tab-pane fade in active" id="sim-future">
        <div class="col-sm-9">
        <h3>将来の積立予測</h3>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">毎月積立金額</label>
                <div class="col-sm-4">
                    <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control">
                </div>
                <label class="control-label">円</label>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">想定年利</label>
                <div class="col-sm-3">
                    <input type="number" min="1" step="any" pattern="(^\d+(\.|\,)\d{2}$)" class="form-control">
                </div>
                <label class="control-label">％</label>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">毎月積立期間</label>
                <div class="col-sm-3">
                <select name="" class="form-control">
                    <option value="">▼</option>
                    <option value="1">1年</option>
                    <option value="2">2年</option>
                    <option value="3">3年</option>
                    <option value="4">4年</option>
                    <option value="5">5年</option>
                    <option value="6">6年</option>
                    <option value="7">7年</option>
                    <option value="8">8年</option>
                    <option value="9">9年</option>
                    <option value="10">10年</option>
                    <option value="11">11年</option>
                    <option value="12">12年</option>
                    <option value="13">13年</option>
                    <option value="14">14年</option>
                    <option value="15">15年</option>
                    <option value="16">16年</option>
                    <option value="17">17年</option>
                    <option value="18">18年</option>
                    <option value="19">19年</option>
                    <option value="20">20年</option>
                    <option value="21">21年</option>
                    <option value="22">22年</option>
                    <option value="23">23年</option>
                    <option value="24">24年</option>
                    <option value="25">25年</option>
                    <option value="26">26年</option>
                    <option value="27">27年</option>
                    <option value="28">28年</option>
                    <option value="29">29年</option>
                    <option value="30">30年</option>
                </select>
                </div>
                <label class="control-label">年</label>
            </div>
        </form>

        <button class="btn btn-success btn-user-style">計算</button>
        </div>
        <div class="col-sm-3">
            <h3>最終積立金額</h3>
            <label>{2000万円}</label>
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
