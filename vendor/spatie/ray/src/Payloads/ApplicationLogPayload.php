<?php

namespace Spatie\WordPressRay\Spatie\Ray\Payloads;

class ApplicationLogPayload extends Payload
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getType(): string
    {
        return 'application_log';
    }

    public function getContent(): array
    {
        return [
            'value' => $this->value,
        ];
    }
}
