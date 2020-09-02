<h1>Risultati Serie A di Basket</h1>
<ol>
  <?php

  // Snack 1
  // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  // Olimpia Milano - Cantù | 55-60

  $matches = [
    'match1' => ['Cantù', 'Trieste', 80, 90],
    'match2' => ['Milano', 'Sassari', 101, 67],
    'match3' => ['Pesaro', 'Treviso', 99, 88],
    'match4' => ['Trentino', 'Bologna', 87 , 85],
    'match5' => ['Brescia', 'Brindisi', 80, 102],
    'match6' => ['Varese', 'Venezia', 101, 67],
    'match7' => ['Reggio Emilia', 'Cremona', 99, 83],
    'match8' => ['Roma', 'Virtus Bologna', 92, 67]
  ];
  // var_dump($matches);

  foreach ($matches as $match) {
    echo "<li>".$match[0]." - ".$match[1]." | ".$match[2]."-".$match[3]."</li>";
  }

  ?>
</ol>
