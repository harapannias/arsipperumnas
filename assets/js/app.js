$('.datepicker').datepicker({
	dateFormat: "yy-mm-dd",
	changeMonth: true,
	changeYear: true,
	yearRange: "c-100:c+5",
});

$('#btnCari').click(function(){
	var nik = $('#nik_keluar').val();
	$.ajax({
		type : 'POST',
		url : "proses/cari_penduduk_by_nik.php",
		data : {"nik":nik},
		dataType : 'json',
		success: function (data){
			$('#id_penduduk').val(data.id_penduduk);
			$('#nomor_kk').val(data.nomor_kk);
			$('#nama').val(data.nama_penduduk);
			$('#jenis_kelamin').val(data.jenis_kelamin);
			$('#tempat_lahir').val(data.tempat_lahir);
			$('#tanggal_lahir').val(data.tanggal_lahir);
			$('#agama').val(data.agama);
			$('#pekerjaan').val(data.pekerjaan);
			$('#pendidikan').val(data.pendidikan);
			$('#hubungan_keluarga').val(data.hubungan_keluarga);
		}
	});
});

$('#pkeluar_select_id_keluarga').change(function(){
	clearDataPendudukPindah();
	if($(this).val().length !== 0){
		$.ajax({
			type : 'POST',
			url : "proses/cari_keluarga_by_no_kk.php",
			data : {"no_kk": $(this).val()},
			dataType : 'json',
			success: function (data){
				console.log(data);
				$("#pkeluar_select_nik").attr('disabled', false);
				$("#pkeluar_select_nik > option").remove();
				$("#pkeluar_select_nik").append('<option value="">Pilih NIK</option>');
				$.each(data, function(i, d) {
					$("#pkeluar_select_nik").append('<option value="' + d.nik + '">' + d.nik + '</option>');
				});
			}
		});
	}else{
		$("#pkeluar_select_nik > option").remove();
		$("#pkeluar_select_nik").attr('disabled', true);
	}
});

$("#pkeluar_select_nik").change(function(){
	if($(this).val().length !== 0){
		$.ajax({
			type : 'POST',
			url : "proses/cari_penduduk_by_nik.php",
			data : {"nik": $(this).val()},
			dataType : 'json',
			success: function (data){
				$('#id_penduduk').val(data.id_penduduk);
				$('#nomor_kk').val(data.nomor_kk);
				$('#nama').val(data.nama_penduduk);
				$('#jenis_kelamin').val(data.jenis_kelamin);
				$('#tempat_lahir').val(data.tempat_lahir);
				$('#tanggal_lahir').val(data.tanggal_lahir);
				$('#agama').val(data.agama);
				$('#pekerjaan').val(data.pekerjaan);
				$('#pendidikan').val(data.pendidikan);
				$('#hubungan_keluarga').val(data.hubungan_keluarga);
			}
		});
	}else{
		clearDataPendudukPindah();
	}
});

function clearDataPendudukPindah(){
	$('#id_penduduk').val(null);
	$('#nomor_kk').val(null);
	$('#nama').val(null);
	$('#jenis_kelamin').val(null);
	$('#tempat_lahir').val(null);
	$('#tanggal_lahir').val(null);
	$('#agama').val(null);
	$('#pekerjaan').val(null);
	$('#pendidikan').val(null);
	$('#hubungan_keluarga').val(null);
}