@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#spending-tab" data-toggle="tab">支出</a></li>
                        <li><a href="#investment-tab" data-toggle="tab">貯蓄・投資</a></li>
                        <li><a href="#money-sim" data-toggle="tab">資産運用シュミレーション</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                    <div class="tab-pane active" id="spending-tab">
                        @include('spending')
                    </div>
                    <div class="tab-pane" id="investment-tab">
                        @include('investment')
                    </div>
                    <div class="tab-pane" id="money-sim">
                        @include('sim')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
