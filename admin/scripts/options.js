export default function ($) {	
	if ($('.pms_options-form').length) {
		const newCat = $('#new-category');
		
		const addCategory = (category) => {
			const element = `
			<div class="cat">
			<div class="handle"><span class="dashicons dashicons-sort"></span></div>
			<input type="text" name="category[]" id="category-${category}" value="${category}"> 
			<button class="remove"  type="button"><span class="dashicons dashicons-trash"></span></button>
			</div>`;
			$('.pms_categories').append(element);
		};		
		
		newCat.on('blur keydown', e => {
			const {value} = e.target;
			console.log(value, value.length)
			if ((!e.which || e.which == 13) && value && value.length > 0) {
				e.preventDefault()
				addCategory(value);
				e.target.value = '';
			}		
		});
		
		$('.pms_categories').sortable({
			handle: ".handle"
		});
		
		$('.pms_categories').on('click', ' .remove', function() {
			$(this).parent().remove();
		});
	}
}