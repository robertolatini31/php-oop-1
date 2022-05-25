<!-- create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

 <?php
 
    class Movie {

        public $title;
        public $time;
        public $director;

        function __construct($title, $time, $director){
             $this->SetTitle($title);
             $this->SetTime($time);
             $this->SetDirector($director);

        }

        public function SetTitle($title){
            $this->title = $title;
        }

        public function SetTime($time){
            $this->time = $time;
        }

        public function SetDirector($director){
            $this->director = $director;
        }
    }


    $gladiator = new Movie('Il Gladiatore', '155 min', 'Ridley Scott');
    $matrix = new Movie('Matrix', '136 min', 'Andy e Larry Wachowski');
    var_dump($gladiator, $matrix);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-1</title>
</head>
<body>
    <div class="movie_card">
        <h2>
            <?= $gladiator->title ?>
        </h2>
        <p>
            <?= $gladiator->time ?>
        </p>
        <h5>
            <?= $gladiator->director ?>
        </h5>
    </div>
    <!-- /.card -->
    <div class="movie_card">
        <h2>
            <?= $matrix->title ?>
        </h2>
        <p>
            <?= $matrix->time ?>
        </p>
        <h5>
            <?= $matrix->director ?>
        </h5>
    </div>
    <!-- /.card -->
</body>
</html>