( function( api ) {

	// Extends our custom "lz-cleaning-services" section.
	api.sectionConstructor['lz-cleaning-services'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );