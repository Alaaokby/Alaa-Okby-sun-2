<?php
function getNumMatches()
{
    $array=["alaa","diaa","alaa","diaa","yassin"];
    $match=0;
    for($i=0;$i<count($array);$i++)
    {
        for($n=$i+1;$n<count($array);$n++)
        {
            if ($array[$i]==$array[$n])
            {
                $match+=1;
            }

        }

    }
    echo $match;

}


echo "<br>";

function getPriceWithDiscount($price)
{
    if ($price>=1000)
    {
        $newPrice=$price*0.95;
    } else
    {
        $newPrice=$price*0.9;
    }
    return $newPrice;
}