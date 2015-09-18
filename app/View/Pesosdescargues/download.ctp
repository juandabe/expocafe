<?php
 $line= $pesos[0]['Pesosdescargue'];
 $this->CSV->addRow(array_keys($line));
 foreach ($pesos as $pesodescargue)
 {
      $line = $pesodescargue['Pesosdescargue'];
       $this->CSV->addRow($line);
 }
 $filename='pesosdescargue';
 echo  $this->CSV->render($filename);