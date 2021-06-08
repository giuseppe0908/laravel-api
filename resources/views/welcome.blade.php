<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
      <div id="root">
        <ul>
          <li v-for="faker in fakers">
            <h4>@{{faker.name}}</h4>
            <p>@{{faker.price}}</p>
            <p>@{{faker.description}}</p>
          </li>
        </ul>
      </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
