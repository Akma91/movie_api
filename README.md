Registracija i login za dobiti/učitati token:

/dashboard

API rute:

<ul>
<li>api/movies/title/{title}<l/i>
api/movie/{reference_code}
api/movies/category/{category}
<ul>

API token naziva 'api_token' se šalje POST metodom kao parametar forme

Ograničenje API requestova na 1000 je napravljeno pomoću middlewarea 'IsTokenExceeded'

Logika dohvaćanja se zbog jednostavnosti nazali unutar ruta u routes/api.php (kontroleri nisu korišteni)
