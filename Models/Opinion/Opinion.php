<?php

class Opinion  {
    private $IDOpinion;
    private $WellTeaching;
    private $Knowledge;
    private $Accessibility;
    private $Involvement;

    public function __construct($WellTeaching, $Knowledge, $Accessibility, $Involvement, $IDOpinion = 0)
    {
        $this -> WellTeaching = $WellTeaching;
        $this -> Knowledge = $Knowledge;
        $this -> Accessibility = $Accessibility;
        $this -> Involvement = $Involvement;
        $this -> IDOpinion = $IDOpinion;
    }

    public function getWellTeaching(): int
    {
        return $this -> WellTeaching;
    }

    public function getKnowledge(): int
    {
        return $this -> Knowledge;
    }

    public function getAccessibility(): int
    {
        return $this -> Accessibility;
    }

    public function getInvolvement(): int
    {
        return $this -> Involvement;
    }

    public function getIDOpinion(): int
    {
        return $this -> IDOpinion;
    }

    public function setIDOpinion(int $IDOpinion)
    {
        $this -> IDOpinion = $IDOpinion;
    }
}