<!-- resources/views/people/child.blade.php -->
<li>{{ $person->name }}
    @if($person->children->count() > 0)
        <ul>
            @foreach($person->children as $child)
                @include('child', ['person' => $child])
            @endforeach
        </ul>
    @endif
</li>
