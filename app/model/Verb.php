<?php

namespace app\model;

use base\model\Model;

class Verb extends Model
{
    public $first_form;
    public $second_form;
    public $third_form;
    public $translate;
    public $transcription;

    public $first_form_example_single;
    public $first_form_example_multiple;
    public $first_form_example_negative;

    public $second_form_example_single;
    public $second_form_example_multiple;
    public $second_form_example_negative;

    public $third_form_example_single;
    public $third_form_example_multiple;
    public $third_form_example_negative;

    /**
     * Verb constructor.
     * @param $first_form
     * @param $second_form
     * @param $third_form
     * @param $translate
     * @param $transcription
     */
    public function __construct($first_form, $second_form, $third_form, $translate, $transcription)
    {
        $this->first_form = $first_form;
        $this->second_form = $second_form;
        $this->third_form = $third_form;
        $this->translate = $translate;
        $this->transcription = $transcription;
    }

    public function setExamples($first_form_example_single, $first_form_example_multiple, $first_form_example_negative, $second_form_example_single, $second_form_example_multiple, $second_form_example_negative, $third_form_example_single, $third_form_example_multiple, $third_form_example_negative)
    {
        $this->first_form_example_single = $first_form_example_single;
        $this->first_form_example_multiple = $first_form_example_multiple;
        $this->first_form_example_negative = $first_form_example_negative;
        $this->second_form_example_single = $second_form_example_single;
        $this->second_form_example_multiple = $second_form_example_multiple;
        $this->second_form_example_negative = $second_form_example_negative;
        $this->third_form_example_single = $third_form_example_single;
        $this->third_form_example_multiple = $third_form_example_multiple;
        $this->third_form_example_negative = $third_form_example_negative;
    }

    /**
     * @return mixed
     */
    public function getFirstForm()
    {
        return $this->first_form;
    }

    /**
     * @return mixed
     */
    public function getSecondForm()
    {
        return $this->second_form;
    }

    /**
     * @return mixed
     */
    public function getThirdForm()
    {
        return $this->third_form;
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
        return $this->first_form_example_single;
    }

    /**
     * @return mixed
     */
    public function getFirstFormExampleMultiple()
    {
        return $this->first_form_example_multiple;
    }

    /**
     * @return mixed
     */
    public function getFirstFormExampleNegative()
    {
        return $this->first_form_example_negative;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleSingle()
    {
        return $this->second_form_example_single;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleMultiple()
    {
        return $this->second_form_example_multiple;
    }

    /**
     * @return mixed
     */
    public function getSecondFormExampleNegative()
    {
        return $this->second_form_example_negative;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleSingle()
    {
        return $this->third_form_example_single;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleMultiple()
    {
        return $this->third_form_example_multiple;
    }

    /**
     * @return mixed
     */
    public function getThirdFormExampleNegative()
    {
        return $this->third_form_example_negative;
    }
}