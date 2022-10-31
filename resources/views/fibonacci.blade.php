<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('fibonacci') }}"  method="post">
    @csrf
        <input type="number" required name="n" value="{{isset($n) ? $n : 0 }}" min="1" max="30">
        @error('n')
        <div>
            {{$message}}
        </div>
        @enderror
        <button type="submit">
            Calcular
        </button>
    </form>
        @isset($fibo)
        <section>
            Los "{{ $n }}" primeros numeros de la serie Fibonacci son : {{ $fibo }}
        </section>
        @endisset
    
</body>
</html>