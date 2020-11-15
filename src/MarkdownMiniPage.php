<?php
namespace Pixelbrackets\MarkdownMiniPage;

use Pixelbrackets\Html5MiniTemplate\Html5MiniTemplate;

class MarkdownMiniPage extends Html5MiniTemplate
{
    /**
     * The linked stylesheet - Use »setStylesheet('')« to unset
     *
     * @var string
     */
    protected $stylesheet = 'gfm';

    /**
     * Process all changes like custom content
     *
     * @return string
     */
    protected function parseMarkup()
    {
        $this->content = (new \Parsedown())->text($this->content);
        return parent::parseMarkup();
    }
}
