<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">

                        <h1 class="text-center my-4">
                            Laravel Model Controller
                        </h1>

                        <div class="cards-container d-flex justify-content-between flex-wrap">
                            @foreach ($movies as $movie)
                                <div class="card col-6 col-sm-3 my-margin" style="width: 18rem;">
                                    <div class="card-header">
                                        <span>
                                            {{ $movie->id }}. 
                                        </span>
                                        <span>
                                            {{ $movie->title }}
                                        </span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Original title:  {{ $movie->original_title }}
                                        </li>
                                        <li class="list-group-item">
                                            Nationality:  {{ $movie->nationality }}
                                        </li>
                                        <li class="list-group-item">
                                            Date:  {{ $movie->date }}
                                        </li>
                                        <li class="list-group-item">
                                            Vote:  {{ $movie->vote }}
                                        </li>
                                    </ul>
                                </div> 
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
