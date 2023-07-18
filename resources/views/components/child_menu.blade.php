@if ($categoryParent->categoryChildren->count())
    <ul role="menu" class="sub-menu">
        @foreach ($categoryParent->categoryChildren as $categoryChild)
            <li class="">
                <a
                    href="{{ route('category.product', [
                        'slug' => $categoryChild->slug,
                        'id' => $categoryChild->id,
                    ]) }}">{{ $categoryChild->name }}

                </a>
            </li>
            @if ($categoryChild->categoryChildren->count())
                @include('components.child_menu', ['categoryParent' => $categoryChild])
            @endif
        @endforeach
    </ul>
@endif
