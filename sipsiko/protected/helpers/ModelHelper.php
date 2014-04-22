<?php

class ModelHelper {

    public static function getListTestVariable($data, $total = false) {
        $list = '';
        $sum = 0;
        foreach ($data as $row) {
            $sum += $row->value;
        }
        foreach ($data as $row) {
            if (!$total) {
                $list .= CHtml::tag('li', array(), $row->variable->name . ' (' . round($row->value / $sum * 100, 2) . '%)');
            } else {
                $list .= CHtml::tag('li', array(), $row->variable->name . ' (' . $row->value . ' point - ' . round($row->value / $sum * 100, 2) . '%)');
            }
        }
        if (!$total) {
            return CHtml::tag('ol', array(), $list);
        } else {
            return '<span>Total Point : ' . $sum . ' </span>' . CHtml::tag('ol', array(), $list);
        }
    }

    public static function getBooleanLabel($data) {
        if ($data) {
            return CHtml::tag('span', array('class' => 'label label-success'), 'Yes');
        } else {
            return CHtml::tag('span', array('class' => 'label label-danger'), 'No');
        }
    }

    public static function getVariableDetail($data) {
        $list = array();
        foreach ($data as $detail) {
            $list[] = '<h5><strong>' . $detail->name . '</strong></h5>' . $detail->description;
        }
        return implode('', $list);
    }

    public static function getResultVariableDetail($results) {
        $list = array();
        foreach ($results as $result) {
            $list[] = '<h3><strong>' . $result->description . '</strong></h3><hr>';
            $list[] = self::getVariableDetail($result->variable_details);
        }
        return implode('', $list);
    }

    public static function getConclusion($results) {
        $list = array();
        foreach ($results as $result) {
            foreach ($result->variable_details as $variable_detail) {
                $list[$variable_detail->slug] = $variable_detail->name;
            }
        }
        foreach ($list as $key => $val) {
            $list[$key] = CHtml::tag('li', array(), $val);
        }
        return CHtml::tag('ul', array(), implode('', $list));
    }

    public static function getAnswerList($answers) {
        $list = array();
        foreach ($answers as $answer) {
            $list[] = CHtml::tag('li', array(), $answer->description . ' <br><strong><span class="text-info">[' . $answer->variable->name . ']</span> <span class="text-success">[Status : ' . $answer->status . ']</span> <span class="text-warning">[Point : ' . $answer->value . ']</span></strong>');
        }
        return CHtml::tag('ul', array(), implode('', $list));
    }

}

?>