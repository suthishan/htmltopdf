<script type="text/javascript">
	function chkFile() {
		frm_csv.submit();
	}
	function chkUpFrm(){
		var fileLength=document.getElementById("file_csv");
		var extensions = /(\.csv)$/i;
		if(fileLength.value==''){
			alert('Please Choose File  first');
			return false;			
		}else{
			if(!extensions.exec(fileLength.value)){
				alert('Please Choose CSV file only');
				return false;			
			}else{
				if(confirm('Are you sure you want to Upload this Document?')){
					return true;
				}else{
					return false;
				}
			}
		}
		
	}

</script>

<?php 

if(!empty($this->session->flashdata('msg')['count'])){
	foreach ($this->session->flashdata('msg')['count'] as $key => $value) {
		echo "<div class='success'><span>".$value."</span></div>";
	}
}

if(!empty($this->session->flashdata('msg')['error'])){
	foreach ($this->session->flashdata('msg')['error'] as $key => $value) {
		echo "<div class='error'><span>".$value."</span></div>";
	}
}
if(!empty($this->session->flashdata('msg')['success'])){
	foreach ($this->session->flashdata('msg')['success'] as $key => $value) {
		echo "<div class='success'><span>".$value."</span></div>";
	}	
}
?>
<div style="margin:10px;padding:10px;" >
	<form action="" method="post" id="frm_csv" name="frm_csv" enctype="multipart/form-data" >
		<div class="tCenter marginT100">
			<select name="sel_month" id="sel_month">
				<?php for($i=12;$i>=1;$i--){
					$month=strtotime(date("Y-m-01",strtotime("-$i month",strtotime(date('d-m-Y')))));
					?>
					<option value="<?php echo $month;?>"><?php echo date('F-Y',$month);?></option>
				<?php }?>
			</select>
			<input type="file" name="file_csv" id="file_csv">
			<input type="submit" value="Submit" name="bt_csvupload" id="bt_csvupload" class="button bgGreen" onclick="return chkUpFrm();">
			<a class="button bgBlue" href="<?php echo base_url();?>import-csv">Reset</a>
		</div>
	</form>	
	<br>	
	<center>Click <a href='assets/download_file/sample-pay-slip.csv'  target='_blank'>here</a> to download sample csv file.</center>
</div>