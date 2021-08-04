<?php

declare(strict_types=1);

class TemplateEngine
{
    public function render(string $layoutPath, string $contentPath): string
    {
        $layout = file_get_contents($layoutPath);
        $content = file_get_contents($contentPath);

        $html = str_replace('%content%', $content, $layout);

        return $html;
    }
}