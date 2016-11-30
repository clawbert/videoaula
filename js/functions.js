$(document).ready(function() {
	

	function add_janelas(id, nome) {
		var html_add = '<div class="janela" id="jan_"><div class="topo" id=""><span>Clawbert Barbosa</span><a href="javascript:void(0);" id="fechar">X</a></div><div id="corpo"><div class="mensagens"><ul class="listar"></ul></div><input type="text" class="mensagem" id="" maxlength="255"></div></div>';
		$('#janelas').append(html_add);
	}

	$('.comecar').live('click', function() {
		var id = $(this).attr('id');
		var nome = $(this).attr('nome');

		$(this).removeClass('comecar');
		return false;
	})
})