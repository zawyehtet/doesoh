( function( api ) {

	// Extends our custom "noor" section.
	api.sectionConstructor['noorlite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );