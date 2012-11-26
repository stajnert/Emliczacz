<?php
namespace Em\EmliczaczBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $evaluations = $em->getRepository('EmEmliczaczBundle:Evaluation')->fetchActiveEvaluations();
        $types = $em->getRepository('EmEmliczaczBundle:Type')->fetchActiveTypes();
        
        if ($request->isMethod('POST')) {
            $postEvaluations = $request->request->get('evaluation');
            $postTypes = $request->request->get('type');
        
             $licznik = 0;
             
             foreach ($postEvaluations as $i => $e) {
                 $licznik += $e*$postTypes[$i];
             }
             
             return new Response(round($licznik/array_sum($postTypes),2), 200, array('Content-Type' => 'text/html'));
        }
        
        return $this->render('EmEmliczaczBundle:Main:index.html.twig', array('evaluations' => $evaluations, 'types' => $types));
    }
}