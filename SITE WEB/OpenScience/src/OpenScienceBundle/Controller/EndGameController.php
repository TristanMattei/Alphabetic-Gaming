<?php

namespace OpenScienceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OpenScienceBundle\Entity\Mots;
use Symfony\Component\HttpFoundation\Request;

class EndGameController extends Controller
{
	//private $partieEntity = $this->getDoctrine()->getManager()->getRepository('OpenScienceBundle:Partie');
	//private $MotsEntity;
	
	public function indexAction(){
		
		return $this->render('OpenScienceBundle:EndGame:index.html.twig', array(
				// ...
		));
	}
    public function firstAction()
    {
    	$MotsEntity = $this->getDoctrine()->getManager()->getRepository('OpenScienceBundle:Mots');
    	$bool = rand(0,1);
    	$lang;
    	if($bool == 0)
    		$lang = "fr";
    	else 
    		$lang = "en";
    		
   		$listeMots = $MotsEntity->findBy(array('langue' => $lang));
   		//var_dump($listeMots[0]);
   		$arrayMots = array();
   		$stringID="";
   		$nbr = 0;
   		$arrayNbr= array();
   		while ($nbr != 5){
   			$test = rand(0,count($listeMots)-1);
   			if(!in_array($test, $arrayNbr)){
   				array_push($arrayNbr, $test);
   				$nbr++;
   			}
   		}
   		
   		for ($i = 0 ; $i < 5 ; $i++){
   			array_push($arrayMots, $listeMots[$arrayNbr[$i]]->getMots());
   			$stringID=$stringID.$listeMots[$arrayNbr[$i]]->getId().',';
   		}

   		
        return $this->render('OpenScienceBundle:EndGame:first.html.twig', array(
            "motsSel" => $arrayMots, "id" =>$stringID, 
        ));
    }

    public function secondAction(Request $request)
    {
    	$arrayMotsRem = array();
    	$arrayMots = array();
    	$arrayDef=array();
    	array_push($arrayMotsRem, $request->request->get('motA'));
    	array_push($arrayMotsRem, $request->request->get('motB'));
    	array_push($arrayMotsRem, $request->request->get('motC'));
    	array_push($arrayMotsRem, $request->request->get('motD'));
    	array_push($arrayMotsRem, $request->request->get('motE'));
    	$stringID = $request->request->get('id');
    	$MotsEntity = $this->getDoctrine()->getManager()->getRepository('OpenScienceBundle:Mots');
    	
    	$stringID =explode(",", $stringID);
    	unset($stringID[count($stringID)-1]);
    	//var_dump($stringID);
    	
    	foreach ($stringID as $i){
    		//var_dump(intval($i));
    		array_push($arrayMots,$MotsEntity->find(intval($i) )->getMots() );
    		array_push($arrayDef,$MotsEntity->find(intval($i) )->getDefinition() );
    	}
    	
    	$arrayMotsSav = $arrayMots;
    	$mot =0;
    	foreach ($arrayMotsRem as $string){
	    	for($i = 0 ; $i < strlen($string) ; $i=$i+2){
	    		$arrayMots[$mot][intval($string[$i])] = '-';
	    	}
	    	$mot++;
    	}
    	
    	
        return $this->render('OpenScienceBundle:EndGame:second.html.twig', array(
            "mots" =>$arrayMots,"def"=>$arrayDef,"id"=>$request->request->get('id'),"sav"=>$arrayMotsSav
        ));
    }

    public function thirdAction(Request $request)
    {
    	$arrayMotsSol = array();
    	$arrayMots = array();
    	array_push($arrayMotsSol, trim($request->request->get('motA')));
    	array_push($arrayMotsSol, trim($request->request->get('motB')));
    	array_push($arrayMotsSol, trim($request->request->get('motC')));
    	array_push($arrayMotsSol, trim($request->request->get('motD')));
    	array_push($arrayMotsSol, trim($request->request->get('motE')));
    	$stringID = $request->request->get('id');
    	
    	$MotsEntity = $this->getDoctrine()->getManager()->getRepository('OpenScienceBundle:Mots');
    	
    	$stringID =explode(",", $stringID);
    	unset($stringID[count($stringID)-1]);

    	foreach ($stringID as $i){
    		array_push($arrayMots,$MotsEntity->find(intval($i) )->getMots() );
    	}
    	
    	
    	
        return $this->render('OpenScienceBundle:EndGame:third.html.twig', array(
            "sol"=>$arrayMotsSol,"mots"=>$arrayMots
        ));
    }

}
