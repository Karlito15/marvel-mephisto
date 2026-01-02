<?php

namespace App\Controller;

use Blurp\Service\YAMLService;
use Blurp\Trait\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(name: 'app.homepage.', options: ['expose' => false], schemes: ['http', 'https'], format: 'html', utf8: true)]
final class HomepageController extends AbstractController
{
    use ControllerTrait;

    #[Route(path: '{_locale<%app.supported_locales%>}/index.php', name: 'index')]
    public function index(): Response
    {
        // Variables
        $title      = $this->translator->trans('text.homepage');

        return $this->render('@App/contents/index.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/avions.php', name: 'avion')]
    public function avion(): Response
    {
        // Variables
        $title = $this->translator->trans('text.avion');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'avion.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/chiens.php', name: 'chien')]
    public function chien(): Response
    {
        // Variables
        $title = $this->translator->trans('text.chien');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'chien.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/emblemes.php', name: 'embleme')]
    public function embleme(): Response
    {
        // Variables
        $title = $this->translator->trans('text.embleme');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'embleme.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/films.php', name: 'film')]
    public function film(): Response
    {
        // Variables
        $title = $this->translator->trans('text.film');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'film.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/fruits.php', name: 'fruit')]
    public function fruit(): Response
    {
        // Variables
        $title = $this->translator->trans('text.fruit');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'fruit.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pasta.php', name: 'pasta')]
    public function pasta(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pasta');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'pasta.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pays.php', name: 'pays')]
    public function pays(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pays');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'pays.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pilotes.php', name: 'pilote')]
    public function pilote(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pilote');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'pilote.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/hip-hop.php', name: 'hip-hop')]
    public function hiphop(): Response
    {
        // Variables
        $title = $this->translator->trans('text.hip-hop');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'hiphop.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/series.php', name: 'serie')]
    public function serie(): Response
    {
        // Variables
        $title = $this->translator->trans('text.serie');
        $service = new YAMLService();

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => $service::YamlToArray($this->getDirectory() . DIRECTORY_SEPARATOR . 'serie.yaml'),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '/', name: 'noLocale')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app.homepage.index', ['_locale' => 'fr'], Response::HTTP_PERMANENTLY_REDIRECT);
    }
}
