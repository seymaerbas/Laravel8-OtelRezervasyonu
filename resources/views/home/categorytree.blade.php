
@foreach($children as $subcategory)
    <ul class="list-link">
        @if(count($subcategory->children))
            <a href="#services" class="dropdown-menu-lg-right">{{$subcategory->title}} <span class="fa fa-angle-down" aria-hidden="true"></span></a>
            <ul class="list-link">
                @include('home.categorytree',['children'=> $subcategory->children])
            </ul>

        @else
                <a href="#" class="dropdown-menu-lg-right">{{$subcategory->title}} <span class="fa fa-angle-down" aria-hidden="true"></span></a>
        @endif

    </ul>
@endforeach

