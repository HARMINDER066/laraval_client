
@php
$links = json_decode($menus, true);
//  dd($links);

@endphp

                    <ul class="main-menu nav">

        @foreach ($links as $link)
            @php
                $href = Helper::getHref($link);
            @endphp


                @if (!array_key_exists("children",$link))
                    <li class="@if($href == URL::current() ) current  @endif">
                        <a class="" href="{{ $link["href"] == null ? $href : $link["href"] }}" target="{{$link["target"]}}">{{$link["text"]}}</a>
                    </li>
                @else
                <li class="has-submenu @if($href == URL::current() ) current  @endif">
                    <a class="" href="{{$href}}"  target="{{$link["target"]}}">{{$link["text"]}}</a>
                    <ul class="submenu-nav">
                        @foreach ($link["children"] as $level2)
                        @php
                            $l2Href = Helper::getHref($level2); 
                        @endphp
                            <li>
                                <a href="{{$l2Href}}"  target="{{$level2["target"]}}">{{$level2["text"]}}</a>
                                    @php
                                    
                                            if (array_key_exists("children", $level2)) {
                                                Helper::createMenu($level2);
                                            }
                                            
                                    @endphp
                            </li>
                        @endforeach
                    </ul>
                </li>
                @endif


        @endforeach 

       
           
    </ul>

