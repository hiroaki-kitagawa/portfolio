<h2>{{ \Auth::user()->name }}さんの支出配分</h2>
<p>{{$param}}</p>
<spending :param="{{ $param }}"></spending>
