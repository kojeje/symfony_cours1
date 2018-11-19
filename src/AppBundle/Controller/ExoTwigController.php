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
    {
        /**
         * @Route("/vartwig", name="twig_var")
         */
       public function variablesTwigAction()
        {
//            var_dump("Bla");die;
          return $this->render(
            "@App/ExoTwig/var.html.twig",
            ["test"=>"jerome"]
          );
        }
    }