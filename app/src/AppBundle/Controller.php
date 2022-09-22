<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
* Simple example controller.
* @author Eugenia Pérez <info@eugeniaperez.es>
*/
class ForecastController extends Controller {
/**
* Parameterless index action.
* @return Response
*/
public function indexAction() {
return new Response('It\'s freezing cold');
}
}