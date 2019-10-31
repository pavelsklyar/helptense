<?php


namespace app\model;


use app\database\tables\VerbsTable;
use base\interfaces\Model;

class Verb implements Model
{
    private $firstForm;
    private $secondForm;
    private $thirdForm;
    private $gerund;

    private $firstFormExample;
    private $secondFormExample;
    private $thirdFormExample;
    private $gerundExample;

    private $firstFormTranslate;
    private $secondFormTranslate;
    private $thirdFormTranslate;
    private $gerundTranslate;

    /**
     * Verb constructor.
     * @param $firstForm string
     * @param $secondForm string
     * @param $thirdForm string
     * @param $gerund string
     * @param $firstFormExample string
     * @param $secondFormExample string
     * @param $thirdFormExample string
     * @param $gerundExample string
     * @param $firstFormTranslate string
     * @param $secondFormTranslate string
     * @param $thirdFormTranslate string
     * @param $gerundTranslate string
     */
    public function __construct($firstForm, $secondForm, $thirdForm, $gerund, $firstFormExample, $secondFormExample, $thirdFormExample, $gerundExample, $firstFormTranslate, $secondFormTranslate, $thirdFormTranslate, $gerundTranslate)
    {
        $this->firstForm = $firstForm;
        $this->secondForm = $secondForm;
        $this->thirdForm = $thirdForm;
        $this->gerund = $gerund;
        $this->firstFormExample = $firstFormExample;
        $this->secondFormExample = $secondFormExample;
        $this->thirdFormExample = $thirdFormExample;
        $this->gerundExample = $gerundExample;
        $this->firstFormTranslate = $firstFormTranslate;
        $this->secondFormTranslate = $secondFormTranslate;
        $this->thirdFormTranslate = $thirdFormTranslate;
        $this->gerundTranslate = $gerundTranslate;
    }

    /**
     * @return string
     */
    public function getFirstForm()
    {
        return $this->firstForm;
    }

    /**
     * @return string
     */
    public function getSecondForm()
    {
        return $this->secondForm;
    }

    /**
     * @return string
     */
    public function getThirdForm()
    {
        return $this->thirdForm;
    }

    /**
     * @return string
     */
    public function getGerund()
    {
        return $this->gerund;
    }

    /**
     * @return string
     */
    public function getFirstFormExample()
    {
        return $this->firstFormExample;
    }

    /**
     * @return string
     */
    public function getSecondFormExample()
    {
        return $this->secondFormExample;
    }

    /**
     * @return string
     */
    public function getThirdFormExample()
    {
        return $this->thirdFormExample;
    }

    /**
     * @return string
     */
    public function getGerundExample()
    {
        return $this->gerundExample;
    }

    /**
     * @return string
     */
    public function getFirstFormTranslate()
    {
        return $this->firstFormTranslate;
    }

    /**
     * @return string
     */
    public function getSecondFormTranslate()
    {
        return $this->secondFormTranslate;
    }

    /**
     * @return string
     */
    public function getThirdFormTranslate()
    {
        return $this->thirdFormTranslate;
    }

    /**
     * @return string
     */
    public function getGerundTranslate()
    {
        return $this->gerundTranslate;
    }

    public function save()
    {
        $table = new VerbsTable();
        $table->insert($this);
    }
}