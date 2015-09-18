<?php
    
    try
    {
        $conn_samanta = new PDO('odbc:Driver=FreeTDS;Server=192.168.35.100;Port=1433;Database=SAMANTA;UID=sa;PWD=copc2013;');    }
    catch(PDOException $exception)
    {
    die("Unable to open database.Error message:$exception.");
    }
    echo "Successfully connected connection_samanta\n";


    // Se crea la conexión a la base de datos
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
      echo "Connected successfully conn_expocafe\n";

    exit();

    $query1 = "SELECT     DE.NUME_LOTE as LOTE, RPS.DEX AS PROFORMA, RPS.SACOS AS RPSSACOS, RPS.CONTENEDOR AS RPSCONTENEDOR, 
                          DE.KILOS AS TOTALPESO, DE.FECHA as FECHA, RPS.SEQ AS RPSSEQ, RPS.HORA AS RPSHORA, MNV.NOMBRE AS NOTONAVE, DE.SACOS AS TOTALSACOS,
                          DE.EXPO_LOTE AS EXPORTADOR
    FROM         DOCUMENTOS DE INNER JOIN
                          REPESO_SALIDA RPS ON DE.REMESA = RPS.REMESA INNER JOIN
                          MOTONAVES MNV ON DE.MOTONAVE = MNV.CODIGO
    WHERE     (DE.FECHA_PLAN >= '2015/01/01') AND (DE.TIPO = '03') AND (DE.REMESA IN
                              (SELECT     REMESA
                                FROM          INVREMESAS INVR
                                WHERE      (ULTIMO >= '2015/01/01') AND (KILOS_FUERA_BODEGA > 0))) AND (RPS.FECHA >= '2015/01/01')
    ORDER BY DE.REMESA";

    $select = $connection_samanta->prepare($query1);
    $select->execute();
    $rows = $select->fetchAll();
    $totalrows = count($rows);

    echo "Total rows: ".$totalrows."\n";

    if($conn_expocafe->query("TRUNCATE embalaje"))
        echo "truncate Ok";


    for ($i = 1; $i <= $totalrows; $i++)
    {
            $query="INSERT INTO embalaje (id,lote,id_exportador,proforma,totalkilos,rpssacos,rpscontenedor,fecha,rpsseq,rpshora,motonave,totalsacos)
                        VALUES ('', '".$rows[$i]['LOTE']."','".$rows[$i]['EXPORTADOR']."','".$rows[$i]['PROFORMA']."','".$rows[$i]['TOTALPESO']."','".$rows[$i]['RPSSACOS']."','".
                            $rows[$i]['RPSCONTENEDOR']."','".$rows[$i]['FECHA']."','".$rows[$i]['RPSSEQ']."','".$rows[$i]['RPSHORA']."','".$rows[$i]['NOTONAVE']."',
                            '".$rows[$i]['TOTALSACOS']."')";
            
            $select = $connection_samanta->prepare($query1);
            $select->execute();
    }

    echo "Done!";
