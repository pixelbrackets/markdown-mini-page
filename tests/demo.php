<?php

require __DIR__ . '/../vendor/autoload.php';

$markdownContent = '# Markdown Demo

Emphasis, aka italics, with *asterisks* or _underscores_.

Strong emphasis, aka bold, with **asterisks** or __underscores__.

Combined emphasis with **asterisks and _underscores_**.

Strikethrough uses two tildes. ~~Scratch this.~~

Inline `code` has `back-ticks around` it.

- First item
- Second item
- Third item

Made with [pixelbrackets/markdown-mini-page](https://gitlab.com/pixelbrackets/markdown-mini-page)';

$markup = (new \Pixelbrackets\MarkdownMiniPage\MarkdownMiniPage())
    ->setContent($markdownContent)
    ->getMarkup();
echo $markup;
