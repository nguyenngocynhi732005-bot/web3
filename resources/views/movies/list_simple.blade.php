<h1>{{ $title }}</h1>
<ul>
    @foreach($movies as $movie)
        <li>
            {{ $movie->movie_name }} - {{ $movie->release_date }}
            ( 
                @if($type == 'budget') 
                    {{ number_format($movie->budget) }} USD
                @elseif($type == 'vote')
                    {{ $movie->vote_average }} điểm
                @else 
                    {{ $movie->runtime }} phút
                @endif 
            )
        </li>
    @endforeach
</ul>