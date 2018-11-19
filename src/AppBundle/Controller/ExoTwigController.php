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
    use Symfony\Component\HttpFoundation\Request;

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
                    'posts' =>
                        [
                           [   'id'=>1,
                               'titre' => 'Bla1',
                               'contenu' =>'Lorem1 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                               'resume' => 'Lorem1 ipsum dolor sit amet,'
                           ],
                           [   'id'=>2,
                               'titre' => 'Bla1',
                               'contenu' =>'Lorem2 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                               'resume' => 'Lorem2 ipsum dolor sit amet,'
                           ],
                           [   'id'=>3,
                               'titre' => 'Bla1',
                               'contenu' =>'Lorem3 ipsum dolor sit amet, consectetur adipisicing elit. A animi consequatur cum eos est exercitationem expedita hic, libero obcaecati officia possimus quas quis, saepe, tenetur vel? Fugit molestias quis suscipit.',
                               'resume' => 'Lorem3 ipsum dolor sit amet,'
                           ]
                        ]

                ]
            );
        }

//    Boucle
        /**
         * @Route("/id_twig", name="twig_id")
         */

        public function idTwigAction(Request $request)

        {
            $id = $request->query->get('id');
            $posts = [
                [
                    'id'=>1,
                    'titre' => 'Bla1',
                    'content' =>'Lorem1 ipsum dolor sit amet, consectetur adipisicing elit.
                         A animi consequatur cum eos est exercitationem expedita hic,
                          libero obcaecati officia possimus quas quis, saepe, tenetur vel?
                           Fugit molestias quis suscipit.',
                    'resume' => 'Lorem1 ipsum dolor sit amet,'
                ],
                [
                    'id'=>2,
                    'titre' => 'Bla2',
                    'content' =>'Lorem2 ipsum dolor sit amet, consectetur adipisicing elit.
                         A animi consequatur cum eos est exercitationem expedita hic,
                          libero obcaecati officia possimus quas quis, saepe, tenetur vel?
                           Fugit molestias quis suscipit.',
                    'resume' => 'Lorem2 ipsum dolor sit amet,'
                ],
                [
                    'id'=>3,
                    'titre' => 'Bla3',
                    'content' =>'Lorem3 ipsum dolor sit amet, consectetur adipisicing elit.
                         A animi consequatur cum eos est exercitationem expedita hic,
                          libero obcaecati officia possimus quas quis, saepe, tenetur vel?
                           Fugit molestias quis suscipit.',
                    'resume' => 'Lorem3 ipsum dolor sit amet,'
                ]
            ];


            return $this->render(
                "@App/ExoTwig/id_Twig.html.twig",
                [
                    'post' => $posts[$id]
                ]

//
            );
        }

    
    }   
