ccmValidateBlockForm = function() {
	
	if ($('select[name=field_1_select_value]').val() == '' || $('select[name=field_1_select_value]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 横幅');
	}

	if ($('select[name=field_2_select_value]').val() == '' || $('select[name=field_2_select_value]').val() == 0) {
		ccm_addError('要求された選択肢がありません: サイズ');
	}

	if ($('select[name=field_3_select_value]').val() == '' || $('select[name=field_3_select_value]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 配置');
	}

	if ($('select[name=field_4_select_value]').val() == '' || $('select[name=field_4_select_value]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 色');
	}


	return false;
}
