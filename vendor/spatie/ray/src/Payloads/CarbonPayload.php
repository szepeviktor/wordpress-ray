<?php

namespace Spatie\WordPressRay\Spatie\Ray\Payloads;

use Spatie\WordPressRay\Carbon\Carbon;

class CarbonPayload extends Payload
{
    protected ?Carbon $carbon;

    protected string $format;

    public function __construct(?Carbon $carbon, string $format = 'Y-m-d H:i:s')
    {
        $this->carbon = $carbon;

        $this->format = $format;
    }

    public function getType(): string
    {
        return 'carbon';
    }

    public function getContent(): array
    {
        return [
            'formatted' => $this->carbon ? $this->carbon->format($this->format) : null,
            'timestamp' => $this->carbon ? $this->carbon->timestamp : null,
            'timezone' => $this->carbon ? $this->carbon->timezone->getName() : null,
        ];
    }
}
