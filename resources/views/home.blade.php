<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primi passi con Laravel</title>
</head>
<body>

    <div class="container">
        <header class="debug p-3 text-center pt-5">
            <h1>{{ $title }}</h1>
        </header>

        <main class="debug mt-3 d-flex">
            {{-- img --}}
            <img class="m-3" src="{{ $daisy['image'] }}" alt="">

            {{-- main data  --}}
            <div class="data debug p-3">
                    <h3>Hey, she is {{ $daisy['name'] }}</h3>
                <h4>She is a {{ $daisy['type'] }}</h4>

                @if ($daisy['age'] > 5)
                    <h4 class="adult">She has {{ $daisy['age'] }} years!</h4>
                    <p>Daisy is a adult</p>

                @elseif($daisy['age'] < 5 && $daisy['age'] > 2)
                    <h4 class="young">She has {{ $daisy['age'] }} years!</h4>
                    <p>Daisy is a yuong dog!</p>

                @else
                    <h4 class="puppies">She has {{ $daisy['age'] }} years!</h4>
                    <p>Daisy is a puppie</p>
                @endif

                <h4>Her Favourite game:</h4>
                <ul>
                    @foreach ($daisy['favourite_game'] as $game)

                    <li>{{ $game }}</li>

                    @endforeach
                </ul>
            </div>

            {{-- Enemy --}}

            <div class="enemies debug p-3 m-2">
                <h4>Her enemies:</h4>
                <ul>
                     @foreach ($daisy['enemies'] as $key=>$type)
                    <li>>{{ $key }}
                        <ul>
                            @foreach ($type as $enemie)
                            <li>{{ $enemie }}</li>
                            @endforeach
                        </ul>

                    </li>

                    @endforeach
                </ul>
            </div>
            {{-- friends --}}
            <div class="friends debug p-3 m-2">
                <h4>Her friends:</h4>
                <ul>
                     @foreach ($daisy['friends'] as $friend)

                        @if (strlen($friend) > 5 )
                            <li class="long-text">
                                {{ $friend }}
                            </li>
                            @else
                            <li>
                                {{ $friend }}
                            </li>

                        @endif

                    @endforeach
                </ul>
            </div>

        </main>


    </div>








</body>
</html>
