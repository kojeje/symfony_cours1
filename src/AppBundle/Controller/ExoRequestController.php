<?php
/**
* Created by PhpStorm.
* User: jeromesuhard
* Date: 16/11/2018
* Time: 13:49
*/

// identifiant de classes (namespace
namespace AppBundle\Controller;
//autoloader
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\Tests\Fixtures\ReturnTyped;
use Symfony\Component\Routing\Annotation\Route;
class ExoRequestController extends Controller
{
    /**
     * @Route("/blog", name="blog_params")
     */
    //                               class Request  variable $request (contient l'objet 'new request')
    public function paramsUrlAction(Request $request)

    {
        // return $this->render("@App/Default/form.html");

        // methode php pour recupérer les données d'un parametre GET (ex: ?id=valeur)
        //                                                                 key
        //        $id = $_GET['id']; (methode php)

        // $_GET parameters
        // ou
        // $_POST parameters

        //recupere l'id renseignée dans l'url

        // ex:
        // 'http://localhost:8000/web/app_dev.php/blog?id=david
        //                                          ou id='robert'
        $id = $request->query->get('id');
        //2e variable
        $cat = $request->query->get('cat');
        $host = $request->getHost();
        var_dump($id . ' ' . $cat);
        ?>
            <br><br>
        <?php
        //recupérer 'localhost'
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
//************************************************************************
    /**
     * @Route("/blog/beautiful_url/{id}", name="blog_placeholder")
     */
//                ex:
//    http://localhost:8000/web/app_dev.php/blog/beautiful_url/3

//    REMPLACE

//    http://localhost:8000/web/app_dev.php/blog/beautiful_url?id=3

    public function paramsUrlPlaceholderAction($id)
    {
        var_dump($id);
        die;
    }

//************************************************************************
// -> articles=[] => id, title, content
// -> url : /article/2
// -> recupere l'article dont l'id correspond à l'url


//    /**
//     * @Route("/articles/{id}", name="article")
//     */
//    public function paramsUrlArticlesId($id == 1)
//
//    {       private $articles = [
//    1 => [
//        'id' => '1',
//        'title' => 'mon titre',
//        'content' => '
//                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
//                        A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
//                        temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
//                        Assumenda, velit?
//                '],
//
//    2 => [
//        'id' => '2',
//        'title' => 'mon titre2',
//        'content' => '
//                        Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit.
//                        A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
//                        temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
//                        Assumenda, velit?
//                '],
//
//    3 => [
//        'id' => '3',
//        'title' => 'mon titre3',
//        'content' => '
//                        Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit.
//                        A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
//                        temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
//                        Assumenda, velit?
//                '];
//];
//
//
//            return new Response();
//    }
//}
    /**
     * @Route("/article/{id}", name="Article")
     */
    public function articleAction($id)
    {
        $article = [
            1 => [

                'title' => 'mon titre',
                'content' => '
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
                                temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
                                Assumenda, velit?
                '],
            2 => [
                'title' => 'mon titre',
                'content' => '
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
                                temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
                                Assumenda, velit?
            '],
            3 => [

                'title' => 'mon titre',
                'content' => '
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
                                temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
                                Assumenda, velit?'
            ],
            4 => [
                'title' => 'mon titre',
                'content' => '
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                A ab adipisci consectetur eaque exercitationem molestiae praesentium soluta,
                                temporibus! Accusamus accusantium explicabo inventore nemo nesciunt nostrum officiis quasi vitae.
                                Assumenda, velit?'
            ],
        ];

        return new Response($article[$id]["title"] . ' ' . '<br>' . $article[$id]["content"]);
    }

    /**
     * @Route("/redirect", name= "redirect")
     */
    public function redirectAction()
    {
//            return $this->redirect('http://symfony.com/doc');

//            ou
//            $url = $this->generateUrl('blog_placeholder');
//            var_dump($url);die;
//            return $this -> redirect($url);
        return $this->redirectToRoute('pokerhtm');
    }

}

