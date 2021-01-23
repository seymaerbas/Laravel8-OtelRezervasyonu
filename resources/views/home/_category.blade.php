@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<li>
    <!-- First Tier Drop Down -->
    <label for="drop-2" class="toggle toogle-2">Categories <span class="fa fa-angle-down" aria-hidden="true"></span>
    </label>
    <a href="#">Categories <span class="fa fa-angle-down" aria-hidden="true"></span></a>
    <input type="checkbox" id="drop-2" />
    <ul>
        @foreach($parentCategories as $rs)
            <li>
                <a href="#services" class="drop-text">{{$rs->title}} <span class="fa fa-angle-down" aria-hidden="true"></span></a>

                @if(count($rs->children))
                    @include('home.categorytree',['children' => $rs->children])
                @endif

            </li>
        @endforeach
    </ul>
</li>
