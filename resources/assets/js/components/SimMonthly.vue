<template>
    <div class="tab-pane fade" id="sim-monthly">
        <dl>
            <dt>名前：</dt>
            <dd> <input type="text" name="username" /> </dd>
        </dl>

        <dl>
            <dt>Email：</dt>
            <dd> <input type="text" name="mail" /> </dd>
        </dl>

        <dl>
            <dt>年齢：</dt>
            <dd> <input type="text" name="age" /> </dd>
        </dl>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
