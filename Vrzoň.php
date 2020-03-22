<html>
   <head>
      <title>Leaguer of Legends</title>
       <link rel="stylesheet" type="text/css" href="css/css.css">
   </head>
   <body bgcolor="aqua">

       <h1>Popis</h1>
       <p>Odehrává se v summoners rift</p>
       <h2>Mapa</h2>
       <p>Je tam voda dzungle a hlina<br>
       </p>
      <b>hodnoceni 2/10</b>
      <i>Hra je opravdu nic moc</i>
           <p><span style="color:red"> posledni dobou velky ping </span></p>
           <p> <img src="obrazek1.jpg" height="215" width="460"/></p>
           <a href="https://eune.leagueoflegends.com/en-us/">Hlavni stranka minecraftu</a>
       <br>
           <a href="https/www.seznam.cz/">seznam</a>

       <ol>
             <li> turret </li>
             <li> nexus </li>
             <li> monioni </li>
       </ol>
             <hr>

       <ul>
                 <li>Predmety</li>
                 <li>Loot</li>
                 <li>Nepratele</li>
       </ul>

       <dl>
           <dd>Skin1</dd> Katarina 
           <dd>Skin2</dd> Ashe

       </dl>
       <table border="100">

           <tr>
               <td width="100">Delka hry</td>
               <td width="30">Predmety</td>
               <td width="20">farma</td>
           </tr>
           <tr>
               <td width="20">Doba hratelnosti je dokud neznicnite nexus</td>
               <td width="200">Jsou zde predmety ktere se kupuji</td>
               <td width="20">cim jsi lepsi tim hrajes proti lepsim hracum</td>
           </tr>
       </table>
       <a href="https/www.ssemi.cz/" target="_blank"><img src="obrazek2.jpg" height="225" width="225"></a>
       <form method="get" action="index.html">
           <input type="text" name="firstname" value="Vase jmeno">
           <input type="sumbit" value="Kolik mate hodin?"><br>
           <input type="text" size="10" name="textik" value="">Prezdivka<br>
           <input type="password" size="10" name="heslo" value="">Heslo<br>
           <input type="radio"  value="prvni">zena
           <input type="radio"  value="druha">muz<br>
           <input type="checkbox" name="souhlas" value="0">souhlas
           <input type="checkbox" name="souhlas" value="0">nesouhlas<br>
           <input type="sumbit" onclick="location.href='http/gmail.com';" value="gmail" /><br>
           <input type="file" name="cokoliv">
           <select size="2">
               <option value="odesilana_hodnota">Diky za vyplneni</option>
           </select>
       </form>

   </body>

    <?PHP

       echo "Ahoj";
       echo "<br>";

       print_r ("Ahoj&quot;
       echo "<br>";


       var_dump ("Ahoj&quot;
       echo "<br>";

       echo  "\$nazdarek";
       echo "<br>";

       echo "<a href=\"index.php\"> Domovska stranka </a>";
       echo "<br>";

       $a = 20;
       $b = 30;
       $c = 89;

       var_dump($a === $b);
       echo "<br>";
       var_dump($a === $c);
       echo "<br>";
       var_dump($a == $b);
       echo "<br>";
       var_dump($a == $c);
       echo "<br>";
       var_dump($a.$c);
       echo "<br>";
       var_dump($a+$c);
       echo "<br>";
       var_dump($a || $b);
       echo "<br>";

       $cena1 = 12;
       $cena2 = 13;

       if ($cena1 > $cena2) {
           echo "je vetsi";
       }else{
           echo "je mensi";
       }

       echo "<br>";


    $cislo1 = 50;
    $cislo2 = 20;
    if ($cislo2 > $cislo1){
        echo "je vetsi";
    }else{
        echo "neni vetsi";
    }
    echo "<br>";

    $cislo3 = 20;
    $cislo4 = 64;
    $cislo5 = 29;
    if ($cislo4 != $cislo5)
        if ($cislo4 > $cislo5)
            echo "je vetsi";
        echo "<br>";

        $zelenina = array("rajce", "brambory", "brambory", 'kvetak', 'celer', 'petrzel','paprika', 'cesnek','lilek','kapie&apos;
        echo "<br>";
        var_dump($zelenina);
        echo"<br>";
       
        echo "<br>";

        foreach ($zelenina as $key => $value){
            echo $value."<br>";

        }
        echo "<br>";
        echo "<table border=1>";
         foreach($zelenina as $key => $value) {
             echo "<tr><td>$key</td>
               <td>$value</td>
               </tr>";
         }
         echo "</table>";
         $count  = 10;
         $count2 = 5;

         echo "<br>";

         echo "<table border='1'>";

         for ($index = 1; $index < $count+1; $index++){
             echo "<tr>";
              for ($index2 = 1; $index2 < $count2+1; $index2++){
                 echo "<td>".$index."-".$index2."</td>";
                 echo "<td>".$index."</td>";

             }
             echo "</tr>";


         }
         echo "</table>"


        ?>

<?php

     
class Zdroj {
    public $napeti;


    public function getNapeti(){


    }


      }

      $zdroj = new Zdroj ();
      $zdroj -> napeti = 12;
      $zdroj -> getNapeti();
     var_dump ($zdroj);



     class User {
          private $firstname;
          private $lastname;
          private $ulice;
          private $fullname;
          public $phone;
          public $email;



          public function __construct($data){
              $this->firstname = $data['firstname'];
              foreach ($data as $key => $value){
                  $this -> $key = $value;
              }


          }
     }
     



    $data ['firstname'] = "bara";
    $data ['lastname'] = "novakova";


     $user = new User($data);
     $user ->phone = 911;
    


     var_dump($user);