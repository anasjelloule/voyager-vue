<div class="menu_footer list-group list-group-flush list-group-transparent">
    @foreach ($items as $item)
    <a class="list-group-item list-group-item-action" href="{{ $item->url }}">{{
            $item->title }}</a> @endforeach

</div>