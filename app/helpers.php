<?php

use Hidehalo\Nanoid\Client;

if (! function_exists('generatePublicId')) {
    /**
     * Generates a public ID using the specified alphabet and size.
     *
     * @param string $alphabet The set of characters to use for generating the ID. Default is '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
     * @param int $size The length of the generated ID. Default is 21.
     * @return string The generated public ID.
     */
    function generatePublicId($alphabet = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $size = 21): string
    {
        return (new Client())->formattedId($alphabet, $size);
    }
}

if (! function_exists('getTestTypeOption')) {
    /**
     * Returns the test type option based on the specified value.
     *
     * @param string $value The value to get the test type option for.
     * @return string The test type option.
     */
    function getTestTypeOption(): array
    {
        return [
            '1' => 'Post-test',
            '2' => 'Pre-test',
        ];
    }
}

if (! function_exists('parseMarkdown')) {
    /**
     * Parses the specified Markdown content.
     *
     * @param string $content The content to parse.
     * @return string The parsed content.
     */
    function parseMarkdown(string $content): string
    {
        return (new Parsedown())->text($content);
    }
}
