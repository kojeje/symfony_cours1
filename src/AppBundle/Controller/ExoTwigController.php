<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 19/11/2018
     * Time: 09:49
     */

// QU'EST-CE QUE TWIG?
// *******************

//   - langage de "templating"
//   - Permet de générer du contenu html

// autoloader :
//namespace :

// identifiant de classes (namespace
    namespace AppBundle\Controller;
    //autoloader
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;

    class ExoTwigController extends Controller
//    !! la class doit avoir le meme nom que le fichier Controller !!
    {
//        ROUTE : (annotation) lie l'url et la méthode du controller
//       ******
        /**
         * @Route("/vartwig", name="twig_var")
         */

//        METHODE
//       ********
//    permet de DE RETOURNER UN FICHIER TWIG (VUE?)

       public function variablesTwigAction()
        {
//        var_dump("Bla");die;

          return $this->render(
            "@App/ExoTwig/var.html.twig",
              [
//           variable => "valeur OU string"

                "test"=>"jerome",
                "test2"=>"Ca marche!"
           ]
          );
        }

//        Condition
        /**
         * @Route("/booltwig", name="twig_bool")
         */
        public function boolTwigAction()
        {
//            var_dump("Bla2");die;
            return $this->render(
                "@App/ExoTwig/bool.html.twig",
                [
//                  variable => "valeur OU string"
                    'displaySidebar'=> true
                ]
            );
        }

//        Boucle
        /**
         * @Route("/looptwig", name="twig_loop")
         */

        public function loopTwigAction()
        {
            return $this->render(
                "@App/ExoTwig/loop.html.twig",
                [
                    'posts' => ['1', '2', '3']
                ]
            );
        }

    
    }   
