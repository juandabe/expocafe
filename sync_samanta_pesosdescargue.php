<?php
    
    // Se crea la conexión a la base de datos
    $connection_samanta = "DRIVER={SQL Server};SERVER=192.168.35.100;DATABASE=SAMANTA";
    $connection_expocafe = "192.168.35.213";
    $username = "juandabe";
    $password = "123";
    $dbname = "expocafe_trial";

    // Create connection
    $conn_expocafe = new mysqli($connection_expocafe, $username, $password, $dbname);

    // Check connection
    if ($conn_expocafe->connect_error) {
        die("Connection failed: " . $conn_expocafe->connect_error);
    }
      echo "Connected successfully";


    $conn_samanta = odbc_connect($connection_samanta,"sa","c0pc2013");

    if ($conn_samanta) {
        echo "Connection established.";
    } else{
        die("Connection could not be established.");
    }


    $query1 = "SELECT     DSE.NUME_LOTE, DSE.FECHAHORA, DSE.TARA, DSE.SACOS, DSE.KILOS, DSE.EMPAQUE, E.CODIGO
    FROM         DOCUMENTOS DSE INNER JOIN
                          EXPORTADORES E ON DSE.EXPO_LOTE = E.CODIGO
    WHERE     (DSE.REMESA NOT IN
                              (SELECT     REMESA
                                FROM          DOCUMENTOS DE
                                WHERE      (FECHA_PLAN >= '2015/01/01') AND (TIPO = '03') AND (REMESA IN
                                                           (SELECT     REMESA
                                                             FROM          INVREMESAS INVR
                                                             WHERE      (ULTIMO >= '2015/01/01') AND (KILOS_FUERA_BODEGA > 0))))) AND (DSE.FECHA_PLAN >= '2015/01/01') AND 
                          (DSE.TIPO = '01')";

    //Exeecuta la consulta
    $resultado = odbc_exec($conn_samanta, $query1);

    if($conn_expocafe->query("TRUNCATE pesosdescargue"))
      echo "truncate Ok";

    while($row = odbc_fetch_array($resultado))
    {
            $row['NUME_LOTE'] = odbc_result($resultado, 1);
            $row['FECHAHORA'] = odbc_result($resultado, 2);
            $row['TARA'] = odbc_result($resultado, 3);
            $row['SACOS'] = odbc_result($resultado, 4);
            $row['KILOS'] = odbc_result($resultado, 5);
            $row['EMPAQUE'] = odbc_result($resultado, 6);
            $row['CODIGO'] = odbc_result($resultado, 7);


            $query="INSERT INTO pesosdescargue (id,lote,id_exportador,tara,kilos,sacos,fecha,tipo_empaque)
                        VALUES ('', '".$row['NUME_LOTE']."','".$row['CODIGO']."','".$row['TARA']."','".$row['KILOS']."','".$row['SACOS']."','".$row['FECHAHORA']."',
                          '".$row['EMPAQUE']."')";

            if ($conn_expocafe->query($query) === FALSE)
            {
              echo "Sync Faild!";
              return;
            }
    }
    Echo "Sync Done!";

    $conn_expocafe->close();