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
        <th>
          Pago
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
          <td>
            {{--
                Debido que la relación del modelo es de uno a muchos, me trae
                los datos en un array bidimensional, en este caso de que un
                usuario solo ha realizado un pago, en el caso de que un usuario
                realice varios pago debo presentarlo para que la me muestre los
                diferentes pago dentro del mismo array
            --}}

              @foreach ($newPassenger->passengerPay as $pago )

                <strong>Abono:
                  </strong>{{ $pago->total }}
              @endforeach



          </td>
        </tr>

      @endforeach


      </table>
  </body>
</html>
