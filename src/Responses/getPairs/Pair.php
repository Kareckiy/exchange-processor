<?php

namespace ExchangeProcessor\Responses\getPairs;

class Pair
{
    private string $pairName;
    private string $firstCoinName;
    private string $secondCoinName;

    public function __construct(string $pairName, string $firstCoinName, string $secondCoinName)
    {
        $this->pairName = $pairName;
        $this->firstCoinName = $firstCoinName;
        $this->secondCoinName = $secondCoinName;
    }

    public function getPairName(): string
    {
        return $this->pairName;
    }

    public function getFirstCoinName(): string
    {
        return $this->firstCoinName;
    }

    public function getSecondCoinName(): string
    {
        return $this->secondCoinName;
    }
}
