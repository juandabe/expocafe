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


    $query1 = "SELECT     DSE.NUME_LOTE, E.CODIGO, E.RAZON_SOCIAL, DSE.REMESA, DSE.SACOS, DSE.BODEGA, DSE.FECHA, DSE.FECHA_PLAN, DATEDIFF(day, CONVERT(datetime, 
                      DSE.FECHA_PLAN, 111), GETDATE()) AS DIAS_EN_BODEGA
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

    if($conn_expocafe->query("TRUNCATE permanencia"))
      echo "truncate Ok";

    while($row = odbc_fetch_array($resultado))
    {
            $row['NUME_LOTE'] = odbc_result($resultado, 1);
            $row['CODIGO'] = odbc_result($resultado, 2);
            $row['RAZON_SOCIAL'] = odbc_result($resultado, 3);
            $row['REMESA'] = odbc_result($resultado, 4);
            $row['SACOS'] = odbc_result($resultado, 5);
            $row['BODEGA'] = odbc_result($resultado, 6);
            $row['FECHA'] = odbc_result($resultado, 7);
            $row['FECHA_PLAN'] = odbc_result($resultado, 8);
            $row['DIAS_EN_BODEGA'] = odbc_result($resultado, 9);

            $query="INSERT INTO permanencia (id,lote,id_exportador,razon_social,remesa,sacos,bodega,fecha,fecha_plan,dias_en_bodega)
                        VALUES ('', '".$row['NUME_LOTE']."','".$row['CODIGO']."','".$row['RAZON_SOCIAL']."','".$row['REMESA']."','".$row['SACOS']."','".$row['BODEGA']."',
                          '".$row['FECHA']."','".$row['FECHA_PLAN']."','".$row['DIAS_EN_BODEGA']."')";

            if ($conn_expocafe->query($query) === FALSE)
            {
              echo "Sync Faild!";
              return;
            }
    }
    Echo "Sync Done!";

    $conn_expocafe->close();

?>