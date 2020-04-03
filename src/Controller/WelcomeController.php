<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html', [
            'controller_name' => 'WelcomeController',
        ]);
    }



}

?>



<?php
$l1=0;
$l2=0;
$l3=0;
$l4=0;
$l1= $_POST['liczba1'];
$l2 = $_POST['liczba2'];
$l3 = $_POST['liczba3'];
$l4 = $_POST['liczba4'];

function licz($liczba)
{

    $arr=array();

    for($n = 0; $n <= $liczba; $n++)
    {
    $arr[0]=0;
    $arr[1]=1;
    $arr[2*$n]=$arr[$n];
    $arr[(2*$n)+1]= $arr[$n] + $arr[$n+1];

       if($n == 0) $a[0]=0;
       else if ($n == 1)
       {
        $arr[2*$n]=1;
        $arr[(2*$n)+1]=2;

       }
       else
       {
       $arr[2*$n]=$arr[$n];
       $arr[(2*$n)+1]= $arr[$n] + $arr[$n+1];

       }


    }
//echo '<pre>'; print_r($arr); echo '</pre>';

//echo (max($arr). " - maks element tablicy  </br>");
 $max = (max($arr));
 echo "<tr>";
 echo " <td>".$liczba."</td><td>".$max. "</td>";
 echo "</tr>";




}


echo "<table><tr><th>INPUT</th><th>OUTPUT</th></tr>";
licz($l1);
licz($l2);
licz($l3);
licz($l4);
echo "</table>";





?>
