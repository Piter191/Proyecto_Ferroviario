<?php

date_default_timezone_set('America/Santiago');

function hora()
{
    $hora=date('H:i:s');
    return $hora;
}

function fecha()
{
    $fecha_es=date('d-m-Y');
    return $fecha_es;
}

//Convierte fecha formaro dd-mm-yyyy a yyyy-mm-dd
function fecha_base_datos($fecha)
{
    $dia=substr($fecha,0,2);
    $mes=substr($fecha,3,2);
    $anho=substr($fecha,6,4);

    $f=$anho."-".$mes."-".$dia;
    return $f;
}

////Convierte fecha formaro yyyy-mm-dd a dd-mm-yyyy  
function fecha_espanol($fecha)
{
    $anho=substr($fecha,0,4);
    $mes=substr($fecha,5,2);
    $dia=substr($fecha,8,2);

    $f=$dia."-".$mes."-".$anho;
    return $f;
}

function conectar()
{
    $con=mysqli_connect("localhost","root","VMorales21","geotren");
    return $con;
}

function valida_rut($r)
{
	$r=strtoupper(ereg_replace('\.|,|-','',$r));
	$sub_rut=substr($r,0,strlen($r)-1);
	$sub_dv=substr($r,-1);
	$x=2;
	$s=0;
	for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
	{
		if ( $x >7 )
		{
			$x=2;
		}
		$s += $sub_rut[$i]*$x;
		$x++;
	}
	$dv=11-($s%11);
	if ( $dv==10 )
	{
		$dv='K';
	}
	if ( $dv==11 )
	{
		$dv='0';
	}
	if ( $dv==$sub_dv )
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>
