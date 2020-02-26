<?php
    function insercionDirecta($A,$n)
    {
        for ($i = 1; $i < $n; $i++)
        {
          $v = $A[$i];
          $j = $i - 1;
          while ($j >= 0 && $A[$j] > $v)
          {
            $A[$j + 1] = $A[$j];
            $j--;
          }

          $A[$j + 1] = $v;
        }
        return $A;
    }
    function main()
    {
      echo "James Estiven Cordoba";
        $VectorA=array(5,4,3,2,1);
        echo "Vector desordenado: ";
        for($i=0;$i<sizeof($VectorA);$i++)
        {
          echo $VectorA[$i]."\n";
        }
        echo "<br>";
        $VectorB=insercionDirecta($VectorA,sizeof($VectorA));
        echo "Vector ordenado: ";
        for($i=0;$i<sizeof($VectorB);$i++)
        {
          echo $VectorB[$i]."\n";
        }
    }
    main();
?>