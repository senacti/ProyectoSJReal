<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<form action="{{ route('guest.store') }}" class="w-4/5 border-gray-100 rounded-sm" method="post">
    @csrf
    {{--  Campos: Nombre, apellido, documento, nro documento, origen (nacionalidad), telefono  --}}
    <ul class="flex flex-col gap-2 mx-auto my-2">
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="name_guest">Nombre:</label>
            <input id="name_guest" name="name_guest" type="text">
        </li>
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="lastname_guest">Apellido:</label>
            <input id="lastname_guest" name="lastname_guest" type="text">
        </li>
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="doc_guest">Tipo de documento:</label>
            <select id="doc_guest" name="doc_guest">
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="pasaporte">Pasaporte</option>
                <option value="CE">CE</option>
            </select>
        </li>
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="num_doc_guest">Número de doc.</label>
            <input id="num_doc_guest" name="num_doc_guest" type="text">
        </li>
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="origin_guest">Origen:</label>
            <input id="origin_guest" name="origin_guest" type="text">
        </li>
        <li class="flex flex-row border-gray-200 rounded-sm gap-x-2">
            <label for="phone_guest">Celular:</label>
            <input id="phone_guest" name="phone_guest" type="text">
        </li>
        <li>
            <input type="submit" value="Enviar">
        </li>
    </ul>
</form>
</body>
</html>

