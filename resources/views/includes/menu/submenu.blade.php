    <ul class="dropdown-menu">
        @foreach($menuList->where('parent_id',$subMenu->id) as $subMenu2)
                <li  @if($menuList->where('parent_id',$subMenu2->id)->count()) class="dropdown" @endif>
                    <a href="{{$subMenu2->url}}">{{$subMenu2->title}}</a>

                    @if($menuList->where('parent_id',$subMenu2->id)->count())
                    @include('includes.menu.submenu',compact('menuList','subMenu2'))
                    @endif

                </li>
        @endforeach
    </ul>
