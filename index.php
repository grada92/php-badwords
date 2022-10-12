<!--Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
--->

<h1>Paragrafo:</h1>

<?php 
$variabile = 'Ho odiato ogni minuto di allenamento, ma mi sono detto, "Non smettere. Soffri ora e vivi il resto della tua vita come un campione.'; // Paragrafo INIZIALE
$badword = $_GET['word'];

$testocensurato = str_replace($badword,"***",$variabile); // Nuovo Paragrafo Censurato
?>


<h1>
<?php echo $variabile ?>
</h1>

<p>La lunghezza del testo è di: <?= strlen($variabile); ?> caratteri.</p> <!--lunghezza paragrafo-->

<h2>Parola da Censurare :</h2> <!---FORM-->
<form action="index.php" method="get"> 
   word: <input type="text" name="word">
   <input type="submit"> 


</form>

<p>Parola da Censurare :  <?php  echo $badword;?></p> <!--Stampo parola da censurare-->

<h1>Paragrafo Censurato:</h1>

<h2>
    
   <?php echo $testocensurato ?> <!--Stampo Nuovo Paragrafo-->

</h2>
 

<p>La lunghezza del testo è di: <?= strlen($testocensurato); ?> caratteri.</p>