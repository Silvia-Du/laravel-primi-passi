<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Primi passi con Laravel</title>
</head>
<body>


    <h1>{{ $title }}</h1>

    <h4>Nmae:{{ $daisy['name'] }}</h4>
    <h4>Type:{{ $daisy['type'] }}</h4>

    @if ($daisy['age'] > 5)
    <h4 class="adult">{{ $daisy['age'] }}</h4>
    <p>Daisy is a adult</p>

    @elseif($daisy['age'] < 5 && $daisy['age'] > 2)
    <h4 class="joung">{{ $daisy['age'] }}</h4>
    <p>Daisy is a juong dog!</p>

    @else
    <h4 class="puppies">{{ $daisy['age'] }}</h4>
    <p>Daisy is a puppie</p>
    @endif

    <ul>His favourite game:
        @foreach ($daisy['favourite_game'] as $game)

        <li>{{ $game }}</li>

        @endforeach
    </ul>






</body>
</html>
