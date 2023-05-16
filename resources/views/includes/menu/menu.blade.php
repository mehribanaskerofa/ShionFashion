<div class="main-menu  d-none d-lg-block">
    <nav>
        <ul id="navigation">
            @foreach($menuList as $subMenu)
                @if(!$subMenu->parent_id)
                    <li @if($menuList->where('parent_id',$subMenu->id)->count()) class="dropdown" @endif >
                        <a href="{{$subMenu->url}}">{{$subMenu->title}}</a>

                        @if($menuList->where('parent_id',$subMenu->id)->count())
                        @include('includes.menu.submenu',compact('menuList','subMenu'))
                        @endif

                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>


{{--<div class="main-menu  d-none d-lg-block">--}}
{{--    <nav>--}}

{{--        <ul id="navigation" >--}}
{{--            @foreach($menuList as $subMenu)--}}
{{--                @if(!$subMenu->parent_id){--}}
{{--                <li @if($menuList->where('parent_id',$subMenu->id)->count()) class="dropdown" @endif >--}}
{{--                    <a href="{{$subMenu->url}}">{{$subMenu->title}}</a>--}}

{{--                    @if($menuList->where('parent_id',$subMenu->id)->count()){--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        @foreach($menuList as $subMenu2)--}}
{{--
{{--                            <li  @if($menuList->where('parent_id',$subMenu2->id)->count()) class="dropdown" @endif>--}}
{{--                                <a href="{{$subMenu2->url}}">{{$subMenu2->title}}</a>--}}

{{--                                @if($menuList->where('parent_id',$subMenu2->id)->count()){--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    @foreach($menuList as $subMenu3)--}}

{{--                                        <a href="{{$subMenu3->url}}">{{$subMenu3->title}}</a>--}}

{{--                                @endforeach--}}

{{--                            </li>--}}
{{--                            }--}}
{{--                            @endforeach--}}
{{--                    </ul>--}}
{{--                    }--}}
{{--                </li>--}}
{{--                }--}}
{{--                @endforeach--}}
{{--        </ul>--}}

{{--    </nav>--}}
{{--</div>--}}
