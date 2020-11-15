<?php

use Pixelbrackets\MarkdownMiniPage\MarkdownMiniPage;
use PHPUnit\Framework\TestCase;

class MarkdownMiniPageTest extends TestCase
{
    public function testMarkdownNotEmpty()
    {
        $template = new \Pixelbrackets\MarkdownMiniPage\MarkdownMiniPage();
        $template->setContent('Hello _Markdown_ World!');
        $document = $template->getMarkup();
        $this->assertNotEmpty($document);
        $this->assertStringContainsString('Hello <em>Markdown</em> World', $document);
        $this->assertStringContainsString('gfm.min.css', $document);
    }

    public function testOverrideDefaultStylesheet()
    {
        $template = new \Pixelbrackets\MarkdownMiniPage\MarkdownMiniPage();
        $template->setStylesheet('');
        $template->setContent('Hello _Markdown_ World!');
        $document = $template->getMarkup();

        $this->assertStringNotContainsString('gfm.min.css', $document);
    }
}
