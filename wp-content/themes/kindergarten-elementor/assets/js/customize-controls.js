( function( api ) {

	// Extends our custom "kindergarten-elementor" section.
	api.sectionConstructor['kindergarten-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );