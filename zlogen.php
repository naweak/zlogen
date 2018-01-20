<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Генератор зла</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
	<style>
		.cbalink{display: none;}
	</style>
</head>
<body>
	<small>Количество символов: <span>0</span></small>
	<textarea name="zlo" id="zlo" style="width:100%; height:500px;"></textarea>
	Мощность: <input type="text" name="power" id="power" value="20" /> Со ссылками 
	<select name="" id="with_links">
		<option value="0">Нет</option>
		<option value="1">Да</option>
	</select>
	<span class="gsom" style="background:gray;cursor:pointer;">ПЫЩЬ!</span>
	<p>
		<!-- оставь эту ссылку -->
		<a href="https://github.com/naweak/zlogen">Сорс генератора</a>
	</p>
	<script>
		$('span.gsom').click(function() {
			$.ajax({
				type:"GET",
				url:"ajax/zlogen.php",
				data:{
					power:$('input#power').val(),
					with_links:$('#with_links').val()
				},
				success:function(data) {
					$('textarea#zlo').val(data);
					$('small>span').html($('textarea#zlo').val().length);
				}
			});
		});
		$('textarea#zlo').keyup(function () {
			$('small>span').html($('textarea#zlo').val().length);
		});
	</script>
</body>
</html>
