<li class="dropdrown">
    <a class="dropdrown-toggle" href="{!! $item->url !!}" {{ !empty($sub_menu)?'data-toggle="dropdown"':'' }}>
        <i class="{!! $item->icon !!}"></i> {!! $item->item_name  !!} {!! !empty($sub_menu)?'<span class="caret"></span>':null !!}
    </a>
    {!! $sub_menu !!}
</li>