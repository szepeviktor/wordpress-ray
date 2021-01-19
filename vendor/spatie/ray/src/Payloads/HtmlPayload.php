<?php

namespace Spatie\WordPressRay\Spatie\Ray\Payloads;

class HtmlPayload extends Payload
{
    protected string $html;

    public function __construct(string $html = '')
    {
        $this->html = $html;
    }

    public function getType(): string
    {
        return 'custom';
    }

    public function getContent(): array
    {
        return [
            'content' => $this->html,
            'label' => 'HTML',
        ];
    }
}