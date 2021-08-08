<?php

declare(strict_types=1);

class TemplateEngine
{
    public function render(string $layoutPath, string $contentPath): string
    {
        $layout = file_get_contents($layoutPath); // layout path, e.g. views/layouts/main.html
        $content = file_get_contents($contentPath); // view path for HTML we want to embed into layout

        $html = str_replace('%content%', $content, $layout);

        return $html;
    }
}