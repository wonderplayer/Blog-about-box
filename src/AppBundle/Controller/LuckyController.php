<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count)
    {
        $numbers = array();
		for ($i=0; $i < $count; $i++){
			$numbers[] = rand(0,100);
			//iiiiiiii
		}
		 $numbersList = implode(', ', $numbers);
        return new Response(
            '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
        );
    }
}
