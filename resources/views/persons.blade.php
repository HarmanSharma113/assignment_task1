<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Hierarchy</title>
</head>
<body>
    <ul>
        @foreach($people as $person)
        {{-- @dd($person->children); --}}
            <li>{{ $person->name }}
                @if($person->children->count() > 0)
                    <ul>
                        @foreach($person->children as $child)
                            @include('child', ['person' => $child])
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
