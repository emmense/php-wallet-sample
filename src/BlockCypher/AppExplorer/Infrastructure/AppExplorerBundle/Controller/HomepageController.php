<?php

namespace BlockCypher\AppExplorer\Infrastructure\AppExplorerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Translation\TranslatorInterface;

class HomepageController extends AppExplorerController
{
    /**
     * @param EngineInterface $templating
     * @param TranslatorInterface $translator
     */
    public function __construct(
        EngineInterface $templating,
        TranslatorInterface $translator
    )
    {
        parent::__construct($templating, $translator);
    }

    public function homeAction()
    {
        $data = array(
            'is_home' => true,
            'messages' => array(),
            'coin_symbol' => '',
            'user' => array('is_authenticated' => true),
        );

        $template = $this->getBaseTemplatePrefix() . ':Homepage:home.html';

        return $this->templating->renderResponse($template . '.' . $this->getEngine(), $data);
    }

    public function highlightsAction()
    {
        $data = array(
            'is_home' => false,
            'messages' => array(),
            'coin_symbol' => '',
            'user' => array('is_authenticated' => true),
        );

        $template = $this->getBaseTemplatePrefix() . ':Homepage:highlights.html';

        return $this->templating->renderResponse($template . '.' . $this->getEngine(), $data);
    }
}





