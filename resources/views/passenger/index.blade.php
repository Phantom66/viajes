<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pasajero</title>
  </head>
  <body>

      <h1>
        Viajeros:

      </h1></br>

      <table style="width:50%">


      <tr >
        <th colspan="2">#</th>
        <th>Cliennte</th>
        <th>Numero de Identificacion</th>
        <th>
          Pais Destino
        </th>
      </tr>

      @foreach ($passenger as $newPassenger)
        <tr>
          <td colspan="2">
            {{ $newPassenger->id}}
          </td>
          <td>
            {{ $newPassenger->name}}
          </td>
          <td>
            {{ $newPassenger->number_identification}}
          </td>
          <td>
            {{ $newPassenger->passengerCountry->name_countries}}
          </td>
        </tr>





      @endforeach

      </table>
  </body>
</html>
