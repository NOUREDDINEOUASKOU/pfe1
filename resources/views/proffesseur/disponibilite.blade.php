<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Tableau ajoute heure</title>
</head>
<style>
      body{
        background: rgb(104,98,233);
        background: -moz-linear-gradient(90deg, rgba(104,98,233,1) 0%, rgba(21,115,134,1) 32%, rgba(51,175,144,1) 82%, rgba(0,255,252,1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(104,98,233,1) 0%, rgba(21,115,134,1) 32%, rgba(51,175,144,1) 82%, rgba(0,255,252,1) 100%);
        background: linear-gradient(90deg, rgba(104,98,233,1) 0%, rgba(21,115,134,1) 32%, rgba(51,175,144,1) 82%, rgba(0,255,252,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#6862e9",endColorstr="#00fffc",GradientType=1);
    }
    /* Center the title */
    h1 {
      text-align: center;
    }

    /* Add some padding to the success message */
    .text-success {
      padding: 10px;
    }

    /* Style the table */
    table {
      border-collapse: collapse;
      width: 60%;
    margin-left: 5%;
    margin-right: 5%;

      margin: auto;
      font-size: 16px;
      background-color: #fff;
      color: #333;
      border: 1px solid #ccc;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    /* Style the checkboxes */
    input[type="checkbox"] {
      margin-right: 1%;
      vertical-align: middle;
    }

    /* Style the submit button */
    .btn-primary {
        background-color: #007bff;
      border-color: #007bff;
      color: #fff;
      padding: 8px 16px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 1%;
    }

    .btn-primary:hover {
      background-color: #0011ff;
      border-color: #4a6e96;
      color: #fff;
    }

    /* Style the success message */
    .text-success {
      background-color: #d4edda;
      color: #155724;
      border-color: #c3e6cb;
      border-radius: 4px;
      margin-bottom: 20px;
    }
    button[type="submit"] {

  display: block;
  margin: auto;
}

  </style>

<body>

  <h1>Tableau de desponibilité:</h1>

  @if(session('success'))
      <div class="text-success p-3 text-center w-100">
          {{ session('success') }}
      </div>
  @endif
  <form method="POST" action="{{ route('desponibilites.store') }}">
    @csrf
    <table>

      <thead>
        <tr>
          <th>les jours</th>
          <th>Temps a choisir</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Lundi</td>
          <td>
            <input type="checkbox" name="Lundi[]" value="8-10" id="t"  style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="Lundi[]" value="10-12" id="l" style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="Lundi[]" value="14-16" id="j" style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="Lundi[]" value="16-18" id="r" style="margin-right: 10px;">16:00---18:00
          </td>
        </tr>
        <tr>
            <td>Mardi</td>
            <td>
              <input type="checkbox" name="Mardi[]" value="8-10" id="t"style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mardi[]" value="10-12" id="l"style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mardi[]" value="14-16" id="j"style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mardi[]" value="16-18" id="r"style="margin-right: 10px;">16:00---18:00
            </td>
          </tr>
          <tr>
            <td>mercredi</td>
            <td>
              <input type="checkbox" name="Mercredi[]" value="8-10" id="t"style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mercredi[]" value="10-12" id="l"style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mercredi[]" value="14-16" id="j"style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Mercredi[]" value="16-18" id="r"style="margin-right: 10px;">16:00---18:00
            </td>
          </tr>
          <tr>
            <td>jeudi</td>
            <td>
              <input type="checkbox" name="Jeudi[]" value="8-10" id="t"style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Jeudi[]" value="10-12" id="l"style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Jeudi[]" value="14-16" id="j"style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Jeudi[]" value="16-18" id="r"style="margin-right: 10px;">16:00---18:00
            </td>
          </tr>
          <tr>
            <td>Vendredi</td>
            <td>
              <input type="checkbox" name="Vendredi[]" value="8-10" id="t"style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Vendredi[]" value="10-12" id="l"style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Vendredi[]" value="14-16" id="j"style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Vendredi[]" value="16-18" id="r"style="margin-right: 10px;">16:00---18:00
            </td>
          </tr>
          <tr>
            <td>Samudi</td>
            <td>
              <input type="checkbox" name="Samudi[]" value="8-10" id="t"style="margin-right: 10px;">08:00---10:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Samudi[]" value="10-12" id="l"style="margin-right: 10px;">10:00---12:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Samudi[]" value="14-16" id="j"style="margin-right: 10px;">14:00---16:00 &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="checkbox" name="Samudi[]" value="16-18" id="r"style="margin-right: 10px;">16:00---18:00
            </td>
          </tr>
      </tbody>
    </table>
    <br>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>

  </form>

  </table>

</body>
</html>
