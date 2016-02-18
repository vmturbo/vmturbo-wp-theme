$('document').ready(function(){
			$('.inc_hr').on('change', function(){
				var a = $('input[name=inc_emps]').val();
				var b = $('input[name=ticket_hr_count]').val();
				//var c = $('input[name=ticket_count]').val();
				var total = a*b;
				$('input[name=inc_hr_count]').val(total);
			});
			$('.hrs_maint').on('change', function(){
				var a1 = $('input[name=maint_emps]').val();
				var b1 = $('input[name=maint_hr_count]').val();
				var total = a1*b1;
				$('input[name=hrs_maint]').val(total);
			});
			$('.hrs_plan').on('change', function(){
				var a2 = $('input[name=plan_emps]').val();
				var b2 = $('input[name=plan_hr_count]').val();
				var total = a2*b2;
				$('input[name=hrs_plan]').val(total);
			});
			/*
			$('#agr_slider').slider({
				range: 'min',
				value: 20,
				step: 1,
				min: 10,
				max: 100,
				slide: function(event, ui) {
					$('input[name=growth_rate]').val(ui.value);
				}
			});
			$('input[name=growth_rate]').on('change', function(){
				var a = $('input[name=growth_rate]').val();
				$('#agr_slider').slider('value', a);
			});
			$('#scgr_slider').slider({
				range: 'min',
				value: 10,
				step: 1,
				min: 1,
				max: 100,
				slide: function(event, ui) {
					$('input[name=st_wasted]').val(ui.value);
				}
			});
			$('input[name=st_wasted]').on('change', function(){
				var a = $('input[name=st_wasted]').val();
				$('#scgr_slider').slider('value', a);
			});
			$('#stgr_slider').slider({
				range: 'min',
				value: 10,
				step: 1,
				min: 1,
				max: 100,
				slide: function(event, ui) {
					$('input[name=st_growth_rate]').val(ui.value);
				}
			});
			$('input[name=st_growth_rate]').on('change', function(){
				var a = $('input[name=st_growth_rate]').val();
				$('#stgr_slider').slider('value', a);
			});
			$('#density_imp_slider').slider({
				range: 'min',
				value: 25,
				step: 1,
				min: 10,
				max: 100,
				slide: function(event, ui) {
					$('input[name=density_imp]').val(ui.value);
				}
			});
			$('input[name=density_imp]').on('change', function(){
				var a = $('input[name=density_imp]').val();
				if (a < 10){
					$('#density_imp_slider').slider('value', 10);
					$('input[name=density_imp]').val(10);
				}else{
					$('#density_imp_slider').slider('value', a);
				}
			});	
			$('#storage_imp_slider').slider({
				range: 'min',
				value: 20,
				step: 1,
				min: 10,
				max: 100,
				slide: function(event, ui) {
					$('input[name=storage_imp]').val(ui.value);
				}
			});
			$('input[name=storage_imp]').on('change', function(){
				var a = $('input[name=storage_imp]').val();
				if (a < 10){
					$('#storage_imp_slider').slider('value', 10);
					$('input[name=storage_imp]').val(10);
				}else{
					$('#storage_imp_slider').slider('value', a);
				}
			});	
			$('#maint_imp_slider').slider({
				range: 'min',
				value: 50,
				step: 1,
				min: 10,
				max: 100,
				slide: function(event, ui) {
					$('input[name=maint_imp]').val(ui.value);
				}
			});
			$('input[name=maint_imp]').on('change', function(){
				var a = $('input[name=maint_imp]').val();
				if (a < 10){
					$('#maint_imp_slider').slider('value', 10);
					$('input[name=maint_imp]').val(10);
				}else{
					$('#maint_imp_slider').slider('value', a);
				}
			});	
			$('#infra_decrease_slider').slider({
				range: 'min',
				value: 20,
				step: 1,
				min: 10,
				max: 100,
				slide: function(event, ui) {
					$('input[name=infra_decrease]').val(ui.value);
				}
			});
			$('input[name=infra_decrease]').on('change', function(){
				var a = $('input[name=infra_decrease]').val();
				if (a < 10){
					$('#infra_decrease_slider').slider('value', 10);
					$('input[name=infra_decrease]').val(10);
				}else{
					$('#infra_decrease_slider').slider('value', a);
				}
			});	 */
		});