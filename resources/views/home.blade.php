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

    <header class="debug p-3 text-center pt-5">
        <h1>{{ $title }}</h1>
    </header>
    <div class="container">

        <div class=" main debug mt-3 d-flex justify-content-center">
            {{-- img --}}
            <img class="m-3" src="{{ $daisy['image'] }}" alt="">

            {{-- main data  --}}
            <div class="data debug p-4">
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
        </main>


    </div>
    <div class="_nav container debug mt-3 py-3">
        <ul class="d-flex mb-0 debug justify-content-center">
            <li><a href="http://127.0.0.1:8000/about">About</a></li>
            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        </ul>
    </div>








</body>
</html>
