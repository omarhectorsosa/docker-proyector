var slideshow = remark.create({
    sourceUrl: './presentacion.md',
    // Set the slideshow display ratio
    // Default: '4:3'
    // Alternatives: '16:9', ...
    ratio: '16:9',

    // Navigation options
    navigation: {
      // Enable or disable navigating using scroll
      // Default: true
      // Alternatives: false
      scroll: true,

      // Enable or disable navigation using touch
      // Default: true
      // Alternatives: false
      touch: false,

      // Enable or disable navigation using click
      // Default: false
      // Alternatives: true
      click: false,   
   }
 });