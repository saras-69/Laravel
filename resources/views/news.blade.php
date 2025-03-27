<!DOCTYPE html>
<html>
<head>
    <title>Dynamic News Feed</title>
    <style>
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <h1>Dynamic News Feed</h1>
    <nav>
        <ul>
            <li><a href="{{ url('news/technology') }}">Technology</a></li>
            <li><a href="{{ url('news/politics') }}">Politics</a></li>
            <li><a href="{{ url('news/sports') }}">Sports</a></li>
            <li><a href="{{ url('news/entertainment') }}">Entertainment</a></li>
        </ul>
    </nav>

    @if ($category)
        <h2>{{ ucfirst($category) }} News</h2>
        <ul>
            @foreach ($news as $item)
                <li>
                    <h3>{{ $item['title'] }}</h3>
                    <p>Category: {{ $item['category'] }}</p>
                    @if (isset($item['article']))
                        <p>{{ $item['article'] }}</p>
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>Please select a category to view news.</p>
    @endif
</body>
</html>