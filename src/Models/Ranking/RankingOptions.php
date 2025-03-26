<?php

namespace AssistantEngine\OpenFunctions\FileSearch\Models\Ranking;

class RankingOptions
{
    /**
     * The ranker to use for the file search.
     * One of "auto" or "default-2024-11-15".
     */
    public string $ranker = 'auto';

    /**
     * The score threshold for the file search (0 to 1).
     * Numbers closer to 1 return only the most relevant results.
     */
    public float $scoreThreshold = 0;

    public function toArray(): array
    {
        return [
            'ranker' => $this->ranker,
            'score_threshold' => $this->scoreThreshold,
        ];
    }
}