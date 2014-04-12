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
            $list[] = $detail->description . '<hr>';
        }
        return implode('', $list);
    }

}

?>