<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('NumeroPalabras') }}" method="post">
    @csrf
        <input type="text" name="cadena" value="{{isset($cadena) ? $cadena : NULL }}">
        @error('cadena')
        <div>
            {{$message}}
        </div>
        @enderror
        <button type="submit">
            Contar palabras
        </button>
    </form>
    @isset($cont)
    <section>
        La cadena "{{ $cadena }}" tiene: {{ $cont }} palabras
    </section>
    @endisset
</body>
</html>