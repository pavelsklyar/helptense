<?php

namespace app\model;

use base\model\Model;

class Verb extends Model
{
    private $firstForm;
    private $secondForm;
    private $thirdForm;
    private $translate;
    private $transcription;

    private $firstFormExampleSingle;
    private $firstFormExampleMultiple;
    private $firstFormExampleNegative;

    private $secondFormExampleSingle;
    private $secondFormExampleMultiple;
    private $secondFormExampleNegative;

    private $thirdFormExampleSingle;
    private $thirdFormExampleMultiple;
    private $thirdFormExampleNegative;

    /**
     * Verb constructor.
     * @param $firstForm
     * @param $secondForm
     * @param $thirdForm
     * @param $translate
     * @param $transcription
     */
    public function __construct($firstForm, $secondForm, $thirdForm, $translate, $transcription)
    {
        $this->firstForm = $firstForm;
        $this->secondForm = $secondForm;
        $this->thirdForm = $thirdForm;
        $this->translate = $translate;
        $this->transcription = $transcription;
    }

    public function setExamples($firstFormExampleSingle, $firstFormExampleMultiple, $firstFormExampleNegative, $secondFormExampleSingle, $secondFormExampleMultiple, $secondFormExampleNegative, $thirdFormExampleSingle, $thirdFormExampleMultiple, $thirdFormExampleNegative)
    {
        $this->firstFormExampleSingle = $firstFormExampleSingle;
        $this->firstFormExampleMultiple = $firstFormExampleMultiple;
        $this->firstFormExampleNegative = $firstFormExampleNegative;
        $this->secondFormExampleSingle = $secondFormExampleSingle;
        $this->secondFormExampleMultiple = $secondFormExampleMultiple;
        $this->secondFormExampleNegative = $secondFormExampleNegative;
        $this->thirdFormExampleSingle = $thirdFormExampleSingle;
        $this->thirdFormExampleMultiple = $thirdFormExampleMultiple;
        $this->thirdFormExampleNegative = $thirdFormExampleNegative;
    }

    /**
     * @return mixed
     */
    public function getFirstForm()
    {
        return $this->firstForm;
    }

    /**
     * @return mixed
     */
    public function getSecondForm()
    {
        return $this->secondForm;
    }

    /**
     * @return mixed
     */
    public function getThirdForm()
    {
        return $this->thirdForm;
    }

    /**
     * @return mixed
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
     * @return mixed
     */
    public function getFirstFormExampleSingle()
    {
        return $this->firstFormExampleSingle;
    }

    /**
     * @return mixed
     */
    public function getFirstFormExampleMultiple()
    {
        return $this->firstFormExampleMultiple;
    }

    /**
     * @return mixed
     */
    public function getFirstFormExampleNegative()
    {
        return $this->firstFormExampleNegative;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleSingle()
    {
        return $this->secondFormExampleSingle;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleMultiple()
    {
        return $this->secondFormExampleMultiple;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleNegative()
    {
        return $this->secondFormExampleNegative;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleSingle()
    {
        return $this->thirdFormExampleSingle;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleMultiple()
    {
        return $this->thirdFormExampleMultiple;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleNegative()
    {
        return $this->thirdFormExampleNegative;
    }

    /**
     * @param $postData
     * @return Verb
     */
    public static function load($postData)
    {
        $obj = new self();
        // ...

        return $obj;
    }
}