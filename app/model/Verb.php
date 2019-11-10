<?php


namespace app\model;


use app\database\tables\VerbsTable;
use base\interfaces\Model;

class Verb implements Model
{
    private $firstForm;
    private $secondForm;
    private $thirdForm;
    private $translate;
    private $transcription;

    private $firstFormExample;
    private $secondFormExample;
    private $thirdFormExample;

    private $firstFormTranslate;
    private $secondFormTranslate;
    private $thirdFormTranslate;

    /**
     * Verb constructor.
     * @param $firstForm string
     * @param $secondForm string
     * @param $thirdForm string
     * @param $translate string
     * @param $transcription
     * @param $firstFormExample string
     * @param $secondFormExample string
     * @param $thirdFormExample string
     * @param $firstFormTranslate string
     * @param $secondFormTranslate string
     * @param $thirdFormTranslate string
     */
    public function __construct($firstForm, $secondForm, $thirdForm, $translate, $transcription, $firstFormExample, $secondFormExample, $thirdFormExample, $firstFormTranslate, $secondFormTranslate, $thirdFormTranslate)
    {
        $this->firstForm = $firstForm;
        $this->secondForm = $secondForm;
        $this->thirdForm = $thirdForm;
        $this->translate = $translate;
        $this->transcription = $transcription;
        $this->firstFormExample = $firstFormExample;
        $this->secondFormExample = $secondFormExample;
        $this->thirdFormExample = $thirdFormExample;
        $this->firstFormTranslate = $firstFormTranslate;
        $this->secondFormTranslate = $secondFormTranslate;
        $this->thirdFormTranslate = $thirdFormTranslate;
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
    public function getTranslate()
    {
        return $this->translate;
    }

    /**
     * @return mixed
     */
    public function getTranscription()
    {
        return $this->transcription;
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

    public function save()
    {
        $table = new VerbsTable();
        $table->insert($this);
    }
}