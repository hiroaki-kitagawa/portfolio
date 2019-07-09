<h2>さんの支出配分</h2>
<form action="{{ action('Admin\SpendingController@create') }}" method="post" enctype="multipart/form-data">
    <spending></spending>
  {{ csrf_field() }}
</form>

<spending-chart></spending-chart>
