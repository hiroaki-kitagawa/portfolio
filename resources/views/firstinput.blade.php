@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('BasicInfo') }}</div>

                <div class="panel-body">
                    <p>手取収入（月額）と貯蓄・投資額（月額）を入力して、「次へ」ボタンを押してください。</p>
                    <form class="form-horizontal" method="POST" action="{{ route('firstinput') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fixed_income') ? ' has-error' : '' }} d-flex justify-content-center">
                            <label for="fixed_income" class="col-xs-4 col-md-4 control-label">{{ __('FixedIncome') }}</label>

                            <div class="col-xs-4 col-md-4 clear-fix">
                                <input id="fixed_income" type="number" class="form-control" name="fixed_income" value="{{ old('fixed_income') }}" required autofocus>

                                @if ($errors->has('fixed_income'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixed_income') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="float-none control-label">円</label>
                        </div>

                        <div class="form-group{{ $errors->has('save_invest') ? ' has-error' : '' }}">
                            <label for="save_invest" class="col-xs-4 col-md-4 control-label">{{__('SaveInvest') }}</label>

                            <div class="col-xs-4 col-md-4">
                                <input id="save_invest" type="number" class="form-control" name="save_invest" value="{{ old('save_invest') }}" required>

                                @if ($errors->has('save_invest'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('save_invest') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="float-none control-label">円</label>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-6 col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{__('Next')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
