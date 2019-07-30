{{-- <h2>{{ $user->name }}さんの貯蓄・投資配分</h2> --}}
<h2>{{ \Auth::user()->name }}さんの貯蓄・投資配分</h2>
{{-- <investment :investments="{{ $investments }}"></investment> --}}
<investment :investments="{{ $investments }}"></investment>
