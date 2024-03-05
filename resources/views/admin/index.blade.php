@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gestion des emplois de temps </title>
      <head>
        <title>
    <title>Formulaire de réservation :</title>

</head>
<style>
    /* General styling */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 28px;
  margin-top: 0;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

td, th {
  padding: 8px;
  border: 1px solid #ccc;
  text-align: center;
}

th {
  background-color: #343a40;
  color: #fff;
}

/* Button styling */
.favorite.styled {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  margin-right: 10px;
}

.favorite.styled:hover {
  background-color: #0069d9;
}

.btn-secondary {
  background-color: #6c757d;
  color: #fff;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  margin-right: 10px;
}

.btn-secondary:hover {
  background-color: #5a6268;
}

/* Form styling */
form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  margin-bottom: 20px;
}

form button {
  margin-top: 10px;
}

/* Responsive styling */
@media screen and (max-width: 600px) {
  h1 {
    font-size: 24px;
  }

  table {
    font-size: 14px;
  }

  form {
    font-size: 14px;
  }
}
.favorite.styled a {
  color: #fff;
}
</style>
<body>

    <form action="traitement.php" method="post">
        <h1>page d'admin :</h1>
        <button class="favorite styled" type="button">
             <a href="/emploi">afficher les emplois</a>
        </button>

        <a href="{{ route('emploi.assign') }}">
            <button type="button" class="favorite styled">Generate emploi</button>
        </a>
<br>
<br>
<body>
<br>
<table>
    <thead>
        <tr>
            <th>nom de professeur</th>
            <th>email</th>
            <th>spécialité</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ Auth::user()->name }}</td> <!-- remplacer "prof1" par le nom d'utilisateur de la session -->
            <td>{{ Auth::user()->email }}</td>
            <td>{{ Auth::user()->speciality }}</td>
            <td>
                <button type="button" onclick="window.history.back();" class="btn btn-secondary">Modifier
                <a href="/despo"></a></button>
                <button type="button" onclick="supprimerLigne(this)" class="btn btn-secondary">Supprimer</button>
            </td>
        </tr>
    </tbody>
</table>
<script>
    function supprimerLigne(btn) {
        // Obtenez la ligne parente (tr) du bouton cliqué
        var row = btn.parentNode.parentNode;
        // Supprimez la ligne de la table
        row.remove();
    }
</script>
</form>
</body>


</html>
@endsection
