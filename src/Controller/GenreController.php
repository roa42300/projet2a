<?php
namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\HttpFoundation\Request;
    use App\Entity\Genre;

class GenreController extends AbstractController
{
    /**
     * @Route("/genre", name="genre")
     */
    public function index(): Response
    {
        return $this->render('genre/index.html.twig', [
            'controller_name' => 'GenreController',
        ]);
    }

    /**
     * @Route("/insertGenre", name="insertGenre")
     */
    public function insertGenre(): Response
    {
        return $this->render('genre/insertGenre.html.twig', [
            'controller_name' => "Formulaire de création d'un genre",
        ]);
    }

    /**
     * @Route("/insertGenreBdd", name="insertGenreBdd")
     */
    public function insertGenreBdd(Request $request, EntityManagerInterface $manager): Response
    {
        $Genre = new Genre();
        $Genre->setType($request->request->get('nom'));
        $manager->persist($Genre);
        $manager->flush();


        return $this->render('genre/insertGenre.html.twig', [
            'controller_name' => "Ajout en base de données.",
        ]);
    }
    /**
     * @Route("/deleteGenre/{id}", name="deleteGenre")
     */
    public function deleteGenre(Request $request, EntityManagerInterface $manager, Genre $id): Response
    {

        $manager->remove($id);
        $manager->flush();

        return $this->redirectToRoute('listeGenre');
    }
}