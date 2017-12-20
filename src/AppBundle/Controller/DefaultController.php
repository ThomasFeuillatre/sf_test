<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("AppBundle:Article");
        $all = $repository->findAllHome();
        $listArticle = $repository->findById(1);

//        $em = $this->getDoctrine()->getManager();
//        $article = new Article();
//        $article->setTitle("Super article");
//        $article->setContent("Contenu article");
//
//        $em->persist($article);
//        $em->flush();

        return $this->render('default/index.html.twig', [
                    'message' => 'coucou',
                    'listArticle' => $listArticle
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }

}
