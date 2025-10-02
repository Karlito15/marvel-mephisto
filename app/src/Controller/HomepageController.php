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

    #[Route(path: '{_locale<%app.supported_locales%>}/avions.php', name: 'avions')]
    public function avions(): Response
    {
        // Variables
        $title = $this->translator->trans('text.avions');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/chiens.php', name: 'chiens')]
    public function chiens(): Response
    {
        // Variables
        $title = $this->translator->trans('text.chiens');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/emblemes.php', name: 'emblemes')]
    public function emblemes(): Response
    {
        // Variables
        $title = $this->translator->trans('text.emblemes');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/films.php', name: 'films')]
    public function films(): Response
    {
        // Variables
        $title = $this->translator->trans('text.films');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/fruits.php', name: 'fruits')]
    public function fruits(): Response
    {
        // Variables
        $title = $this->translator->trans('text.fruits');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/pilotes.php', name: 'pilotes')]
    public function pilotes(): Response
    {
        // Variables
        $title = $this->translator->trans('text.pilotes');
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

    #[Route(path: '{_locale<%app.supported_locales%>}/series.php', name: 'series')]
    public function series(): Response
    {
        // Variables
        $title = $this->translator->trans('text.series');
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
