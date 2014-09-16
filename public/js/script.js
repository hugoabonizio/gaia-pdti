$(document).ready(function(){
	$('.textarea').wysihtml5();

	$('#save_content').click(function(){
		$('.button_text').text('Carregando...');
		var attrs = $('#page').data('pagename').split(',');
		var value = $('.textarea').val();
		var data = new Object();
		
		for (i in attrs) {
			data[attrs[i]] = $('#' + attrs[i]).val();
		}

		$.ajax({
			url: base_url + 'update',
			data: decodeURIComponent($.param(data)),
			success: function(){
				$('.button_text').text('Salvar documento');
				$.notify('Documento salvo com sucesso!', 'success');
			}
		});
	});
});
