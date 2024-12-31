<?php

namespace App\Services;

use BenjaminHoegh\ParsedownExtended\ParsedownExtended;

class MarkdownService
{
    protected $parsedown;

    public function __construct(ParsedownExtended $parsedown)
    {
        $this->parsedown = $parsedown->config()->set('math', [
            'inline' => [
                'delimiters' => [
                    ['left' => '$', 'right' => '$'],
                ],
            ],
            'block' => [
                'delimiters' => [
                    ['left' => '$$', 'right' => '$$'],
                ],
            ],
        ]);
    }

    public function parse($content)
    {
        return $this->parsedown->text($content);
    }
}
