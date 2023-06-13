<main>

    <h2>MAIN</h2>

    <ul>
        @foreach( $movies as $elem )
            <li>{{$elem['title']}}</li>
        @endforeach    
    </ul>  

</main>