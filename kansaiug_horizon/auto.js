ccmValidateBlockForm = function() {
	
	if ($('select[name=width]').val() == '' || $('select[name=width]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 長さ');
	}

	if ($('select[name=size]').val() == '' || $('select[name=size]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 太さ');
	}

	if ($('select[name=color]').val() == '' || $('select[name=color]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 色');
	}

	if ($('select[name=height]').val() == '' || $('select[name=height]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 高さ');
	}
	return false;
}
