<h1>Risultati Serie A di Basket</h1>
<ol>
  <?php

  // Snack 1
  // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  // Olimpia Milano - Cantù | 55-60

  $matches = [
    [
      'team1' => 'Cantù',
      'team2' => 'Trieste',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Milano',
      'team2' => 'Sassari',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Pesaro',
      'team2' => 'Treviso',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Trentino',
      'team2' => 'Bologna',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Brescia',
      'team2' => 'Brindisi',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Varese',
      'team2' => 'Venezia',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Reggio Emilia',
      'team2' => 'Cremona',
      'score1' => 80,
      'score2' => 90
    ],
    [
      'team1' => 'Roma',
      'team2' => 'Virtus Bologna',
      'score1' => 80,
      'score2' => 90
    ]
  ];
  // var_dump($matches);

  // foreach ($matches as $match) {
  //   echo "<li>".$match['team1']." - ".$match['team2']." | ".$match['score1']."-".$match['score2']."</li>";
  // }

  $keys = array_keys($matches);
    // var_dump($keys); die();
    for ($i=0;$i<count($keys);$i++) {
        $key = $keys[$i];
        $match = $matches[$key];
        echo $match['team1'] . ' - ' . $match['team2']
            . ' | ' . $match['score1'] . '-' . $match['score2']
            . '<br>';
    }

  ?>
</ol>
