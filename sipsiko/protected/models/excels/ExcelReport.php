<?php

class ExcelReport {

    protected $_model;
    public $cellTemplateHead;
    public $cellTemplateBody;
    public $cellHead;
    public $cellBody;

    public function __construct() {
        $this->_model = new PHPExcel();

        $this->cellTemplateHead = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                ),
            ),
            'font' => array(
                'size' => 12,
                'bold' => true,
                'color' => array('argb' => 'FFFFFF'),
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('argb' => '000000'),
            ),
        );

        $this->cellTemplateBody = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                ),
            ),
            'font' => array(
                'size' => 12
            ),
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
            ),
        );
    }

    public static function model($className = __CLASS__) {
        $model = new $className(null);
        return $model;
    }

    public function setCellTemplateHead($template) {
        $this->cellTemplateHead = $template;
    }

    public function getCellTemplateHead() {
        return $this->cellTemplateHead;
    }

    public function setCellTemplateBody($template) {
        $this->cellTemplateBody = $template;
    }

    public function getCellTemplateBody() {
        return $this->cellTemplateBody;
    }

    public function setCellHead($head = array()) {
        $this->cellHead[] = $head;
    }

    public function getCellHead() {
        return $this->cellHead;
    }

    public function setCellBody($body = array()) {
        $this->cellBody[] = $body;
    }

    public function getCellBody() {
        return $this->cellBody;
    }

    public function getSheet($sheet = 0) {
        if ($sheet == 0) {
            return $this->_model->getActiveSheet();
        } else {
            return $this->_model->setActiveSheetIndex($sheet);
        }
    }

    public function setCell($col, $row, $value, $sheet = 0) {
        $this->getSheet($sheet)
            ->setCellValueByColumnAndRow($col, $row, $value);
    }

    public function setStyle($col, $row, $style, $sheet = 0) {
        $this->getSheet($sheet)
            ->getStyleByColumnAndRow($col, $row)
            ->applyFromArray($style);
    }

    public function setAutoWidthColumn($col, $sheet = 0) {
        $this->getSheet($sheet)
            ->getColumnDimensionByColumn($col)
            ->setAutoSize(true);
    }

    public function render($fileName = "Excel Report") {
        $rows = CMap::mergeArray($this->cellHead, $this->cellBody);
        $iteratorRow = 0;
        foreach ($rows as $columns) {
            $iteratorRow++;
            $iteratorColumn = 0;
            foreach ($columns as $value) {
                $this->setCell($iteratorColumn, $iteratorRow, $value);
                $this->setStyle($iteratorColumn, $iteratorRow, $this->getCellTemplateBody());
                $this->setAutoWidthColumn($iteratorColumn);
                $iteratorColumn++;
            }
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '.xls"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($this->_model, 'Excel5');
        $writer->save('php://output');
        exit;
    }

}

?>