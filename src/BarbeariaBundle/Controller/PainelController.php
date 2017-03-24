<?php



namespace BarbeariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PainelController extends Controller 
{
    /**
     * @Route("/painel")
     */
    public function indexAction()
    {
        return $this->render('BarbeariaBundle:Painel:index.html.twig');
    }
}
