<?php

// autoloader :
//namespace :

// identifiant de classes (namespace
    namespace AppBundle\Controller;
    //autoloader
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;


    class ExoResponseController extends Controller
    {
        /**
         * @Route("/", name="homepage")
         */
        public function indexAction(Request $request)
        {
            // replace this example code with whatever you need
            return $this->render('default/index.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            ]);
        }


// ROUTEUR :
//        1 - Lien entre l'url et une rouute'
//        2 - Appelle la méthode (Action de Controller)
        /**
         * @route("/dump", name="dump")
         */
        public function blogAction()
        {
            var_dump('hello blog');
            die;
        }

        /**
         * @Route("/poker", name="poker")
         */
        public function pokerAction()
        {
            $age = 17;
            if ($age > 18) {
                var_dump('Bienvenue');
                die;

            } else {
                var_dump('Rentre chez ta mère');
                die;
            }
        }

        /**
         * @Route("/response", name="response")
         */
        public function responseAction()
        {
            return new Response("
                <div>   
                     <p>
                        ceci est une réponse html valide
                        </p>
                </div>");
        }

        /**
         * @Route("/html", name="html")
         */
        public function htmlAction()
        {   //render : prendre un file htm ou twig et le renvoyer en réponse http
            return $this->render("@App/Default/demohtml.html.twig");
        }


        /**
         * @Route("/pokerhtm", name="pokerhtm")
         */
        public function pokerAction2()
        {
            $age = 18;
            if ($age >= 18) {
                return $this->render("@App/Default/poker.html");

            } else {
                return $this->render("@App/Default/pokermineur.html");
            }
        }


        /**
         * @Route("/blog", name="blog_params")
       */
//                               class Request  variable $request (contient l'objet 'new request')
        public function paramsUrlAction(Request $request)

        {
//        return $this->render("@App/Default/form.html");
            // methode php pour recupérer les données d'un parametre GET (ex: ?id=valeur)
            //                                                                 key

//        $id = $_GET['id']; (methode php)

            // $_GET parameters
            // ou
            // $_POST parameters

//        recupere l'id renseignée dans l'url

// ex:
// 'http://localhost:8000/web/app_dev.php/blog?id=david
//                                          ou id='robert'
            $id = $request->query->get('id');
//            2e variable
            $cat = $request->query->get('cat');
            $host =$request->getHost();
            var_dump($id . ' ' . $cat);
            ?>
            <br><br>
<?php
//          recupérer 'localhost'
            var_dump($host);
            die;

        }

        /**
         * @Route("/get_request", name="get_request")
         */
        public function paramsUrlAge(Request $request)
        {
            $age = $request->query->get('age');

            if ($age >= 18) {
                return $this->render("@App/Default/poker.html");

            } else {
                return $this->render("@App/Default/pokermineur.html");
            }
        }
        /**
         * @Route("/response2", name="response2")
         */
        public function responseAction2(Request $request)
        {
            $age = $request->query->get('age');
            $cat = $request->query->get('cat');


            if ($age >= 18) {
                $cat = "Bravo tu as toutes tes dents !";
                return new Response($cat);


            } else {
                $cat = "Trop jeune";
                return new Response($cat);
            }

        }


    }



