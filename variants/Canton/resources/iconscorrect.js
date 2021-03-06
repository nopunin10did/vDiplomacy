function IconsCorrect(variantName,countryName) {
	MyOrders.map(function(OrderObj) {
			OrderObj.setUnitIconArea = function(newIcon) {
				if( newIcon == this.currentUnitIcon ) return;
		
				if( this.currentUnitIcon != false )
					$('orderID'+this.id).removeClassName(this.currentUnitIcon.toLowerCase());
		
				$('orderID'+this.id).addClassName(newIcon.toLowerCase());
				this.currentUnitIcon=newIcon;
		
				this.unitIconArea.update('<img src="variants/'+variantName+'/resources/'+newIcon.toLowerCase()+countryName+'.png" alt="'+newIcon+'" />');
			};
		});
}

