<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Pet Shop</title>
	<meta  charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
	
</head>

<body>
			<?php include "koneksi.php"; ?>
	  		<?php session_start();?>
			<?php include "header_admin.php"; ?>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							<div class="about">
							<ul>
							<li>
							  <?php
include 'koneksi.php';

//membuat nama file
$file	  =	$database.'_'.date("DdMY").'_'.time().'.sql';

?>


	<title>Backup Database</title>
	


<script>
function pastikan(text){
	confirm('Apakah Anda yakin akan '+text+'?')
}
</script>

<div class="container">

<form action="" method="post" name="postform" enctype="multipart/form-data" >
<table>
	<br>
	<br>
	<div class="asd">
	<tr>
		<td><label for="backup">Backup database</label></td>
	</tr>
	<tr>
		<td><input type="submit" name="backup"  onClick="return pastikan('Backup database')" value="Proses Backup" /></td>
	</tr>
	</div>
	<div class="asd">
	<tr>
		<td><label for="backup">File Backup Database (*.sql)</label></td>
	</tr>
	<tr>
		<td><input type="file" name="datafile" size="30" id="gambar" /></td>
	</tr>
	<tr>
		<td><input type="submit" onclick="return pastikan('Restore database')" name="restore" value="Restore Database" /></td>
	</tr>
	</div>
</table>
</form>

<?php

//Download file backup ============================================
if(isset($_GET['nama_file']))
{
	$file = $back_dir.$_GET['nama_file'];
	
	if (file_exists($file))
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;

	} 
	else 
	{
		echo "file {$_GET['nama_file']} sudah tidak ada.";
	}
	
}

//Backup database =================================================
if(isset($_POST['backup']))
{
	backup($file);
	echo 'Backup database telah selesai <a style="cursor:pointer" href="?nama_file='.$file.'" title="Download">Download file database</a>';
	
	echo "<pre>";
	print_r($return);
	echo "</pre>";
}
else
{
	unset($_POST['backup']);
}

//Restore database ================================================
if(isset($_POST['restore']))
{
	restore($_FILES['datafile']);
	
	echo "<pre>";
	print_r($lines);
	echo "</pre>";
}
else
{
	unset($_POST['restore']);
}

?>
</div>

<?php

function restore($file) {
	global $rest_dir;
	
	$nama_file	= $file['name'];
	$ukrn_file	= $file['size'];
	$tmp_file	= $file['tmp_name'];
	
	if ($nama_file == "")
	{
		echo "Fatal Error";
	}
	else
	{
		$alamatfile	= $rest_dir.$nama_file;
		$templine	= array();
		
		if (move_uploaded_file($tmp_file , $alamatfile))
		{
			
			$templine	= '';
			$lines		= file($alamatfile);

			foreach ($lines as $line)
			{
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				$templine .= $line;

				if (substr(trim($line), -1, 1) == ';')
				{
					mysql_query($templine) or print('Query gagal \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');

					$templine = '';
				}
			}
			echo "<center>Berhasil Restore Database, silahkan di cek.</center>";
		
		}else{
			echo "Proses upload gagal, kode error = " . $file['error'];
		}	
	}
	
}

function backup($nama_file,$tables = '')
{
	global $return, $tables, $back_dir, $database ;
	
	if($tables == '')
	{
		$tables = array();
		$result = @mysql_list_tables($database);
		while($row = @mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}else{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	$return	= '';
	
	foreach($tables as $table)
	{
		$result	 = @mysql_query('SELECT * FROM '.$table);
		$num_fields = @mysql_num_fields($result);
		
		//menyisipkan query drop table untuk nanti hapus table yang lama
		$return	.= "DROP TABLE IF EXISTS ".$table.";";
		$row2	 = @mysql_fetch_row(mysql_query('SHOW CREATE TABLE  '.$table));
		$return	.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = @mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';

				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = @addslashes($row[$j]);
					$row[$j] = @ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	$nama_file;
	
	$handle = fopen($back_dir.$nama_file,'w+');
	fwrite($handle, $return);
	fclose($handle);
}
?>
</li>
   							</ul>
						  </div>
						</div>
						
						
					    <div id="sidebar">
						
						
						        
								
								<?php include "admin_cari.php"; ?>
								
                               	<?php include "shoping_guide.php"; ?>
				   
				  				<?php include "iklan.php"; ?>
				  
			
			</div>
			
			<div id="footer">
			        <?php include "footer.php"; ?>
			</div>
			
	

</body>
</html>
