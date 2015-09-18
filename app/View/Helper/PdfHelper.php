<?php
App:import('Vendor', 'TCPDF', array('file' => 'tcpdf/tcpdf.php'));
/**
 * Description of PdfHelper
 *
 * @author jecheverri
 */
class PdfHelper extends AppHelper{
    var $core;
    function PdfHelper() {
        $this->core = new TCPDF();
    }
}
