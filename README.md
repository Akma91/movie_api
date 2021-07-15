<h4>Registracija i login za dobiti/učitati token:</h4>
<ul>
<li>/dashboard</li>
</ul>

<h4>API rute:</h4>

<ul>
<li>api/movies/title/{title}</li>
<li>api/movie/{reference_code}</li>
<li>api/movies/category/{category}</li>
</ul>

<p>API token naziva 'api_token' se šalje POST metodom kao parametar forme</p>

<p>Ograničenje API requestova na 1000 je napravljeno pomoću middlewarea 'IsTokenExceeded'</p>

<p>Logika dohvaćanja se zbog jednostavnosti nazali unutar ruta u routes/api.php (kontroleri nisu korišteni)</p>
