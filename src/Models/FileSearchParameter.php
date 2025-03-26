<?php

namespace AssistantEngine\OpenFunctions\FileSearch\Models;

use AssistantEngine\OpenFunctions\FileSearch\Contracts\FilterInterface;
use AssistantEngine\OpenFunctions\FileSearch\Models\Ranking\RankingOptions;

class FileSearchParameter
{
    public array $vectorStoreIds = [];
    public ?int $maxNumResults = null;
    public ?FilterInterface $filter = null;
    public ?RankingOptions $rankingOptions = null;
}