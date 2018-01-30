<ul>
  @foreach($selected_values as $selected_value)
    <li><a href="{{ $selected_value->makeUrl() }}/{{$selected_value->id}}">{{ $selected_value->title }}</a></li>
  @endforeach
</ul>