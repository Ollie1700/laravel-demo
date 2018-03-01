
@foreach ($pastes as $paste)

    <p>
        <a href="{{ url($paste->slug) }}">
            {{ $paste->created_at }} -
            {{ substr($paste->content, 0, 50) . '...' }}
        </a>
    </p>

@endforeach
