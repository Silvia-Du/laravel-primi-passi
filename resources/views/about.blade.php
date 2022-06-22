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
        <h1>ABOUT</h1>
    </header>
    <main>
        <div class="container d-flex">

        {{-- Enemy --}}

            <div class="enemies debug p-4 m-2">
                <h2>Her enemies:</h2>
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
            <div class="friends debug p-4 m-2">
                <h2>Her friends:</h2>
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
            {{-- img --}}

            <img class="about-img m-2" src="{{ $daisy['about_image'] }}" alt="">
        </div>
    </main>





</body>
</html>
