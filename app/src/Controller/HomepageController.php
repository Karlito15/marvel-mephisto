<?php

namespace App\Controller;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml as Symfony;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route(name: 'app.homepage.', options: ['expose' => false], schemes: ['http', 'https'], format: 'html', utf8: true)]
final class HomepageController extends AbstractController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {
    }

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
        $file  = 'avion.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/chiens.php', name: 'chien')]
    public function chien(): Response
    {
        // Variables
        $title = $this->translator->trans('text.chien');
        $file  = 'chien.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/emblemes.php', name: 'embleme')]
    public function embleme(): Response
    {
        // Variables
        $title = $this->translator->trans('text.embleme');
        $file  = 'embleme.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/films.php', name: 'film')]
    public function film(): Response
    {
        // Variables
        $title = $this->translator->trans('text.film');
        $file  = 'film.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/fruits.php', name: 'fruit')]
    public function fruit(): Response
    {
        // Variables
        $title = $this->translator->trans('text.fruit');
        $file  = 'fruit.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pasta.php', name: 'pasta')]
    public function pasta(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pasta');
        $file  = 'pasta.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pays.php', name: 'pays')]
    public function pays(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pays');
        $file  = 'pays.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/pilotes.php', name: 'pilote')]
    public function pilote(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pilote');
        $file  = 'pilote.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/hip-hop.php', name: 'hip-hop')]
    public function hiphop(): Response
    {
        // Variables
        $title = $this->translator->trans('text.hip-hop');
        $file  = 'rappeur.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '{_locale<%app.supported_locales%>}/series.php', name: 'serie')]
    public function serie(): Response
    {
        // Variables
        $title = $this->translator->trans('text.serie');
        $file  = 'serie.yaml';

        return $this->render('@App/contents/card.html.twig', [
            'controller_name' => $title,
            'container'       => 'container-fluid',
            'breadcrumb'      => ['level1' => $this->translator->trans('text.homepage'), 'level2' => $title],
            'data'            => self::reader($this->getDirectory() . $file),
            'documentation'   => null,
            'column'          => 3,
        ]);
    }

    #[Route(path: '/', name: 'noLocale')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app.homepage.index', ['_locale' => 'fr'], Response::HTTP_PERMANENTLY_REDIRECT);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    private function getDirectory(): string
    {
        return $this->container->get('twig')->getGlobals()['folders']['yaml'];
    }

    /**
     * Parses a YAML file into a PHP value.
     *
     * @param string $filepath  The path to the YAML file to be parsed
     * @param int $flags        A bit field of PARSE_* constants to customize the YAML parser behavior
     * @return mixed            The YAML converted to a PHP value
     */
    private static function reader(string $filepath, int $flags = 0): array
    {
        $return = [];
        try {
            $return = Symfony::parseFile($filepath, $flags);
        } catch (ParseException $exception) {
            throw new ParseException($exception->getMessage());
        } finally {
            return $return;
        }
    }
}
