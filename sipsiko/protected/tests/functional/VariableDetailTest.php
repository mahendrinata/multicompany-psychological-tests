<?php

class VariableDetailTest extends WebTestCase
{
    public $fixtures = array(
        'variableDetails' => 'VariableDetail',
    );

    public function testShow()
    {
        $this->open('?r=variableDetail/view&id=1');
    }

    public function testCreate()
    {
        $this->open('?r=variableDetail/create');
    }

    public function testUpdate()
    {
        $this->open('?r=variableDetail/update&id=1');
    }

    public function testDelete()
    {
        $this->open('?r=variableDetail/view&id=1');
    }

    public function testList()
    {
        $this->open('?r=variableDetail/index');
    }

    public function testAdmin()
    {
        $this->open('?r=variableDetail/admin');
    }
}
