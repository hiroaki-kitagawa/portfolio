<h2>◯◯さんの貯蓄・投資配分</h2>

<form action="{{ action('Admin\SpendingController@create') }}" method="post" enctype="multipart/form-data">
  <investment></investment>
  {{ csrf_field() }}
</form>

<investment-chart></investment-chart>
