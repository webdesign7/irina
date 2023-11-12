@twillBlockTitle('Contact details')
@twillBlockIcon('text')

<x-twill::input :required="true" name="address" label="Address" placeholder="Enter your address" />
<x-twill::input :required="true" name="email" label="Email address" placeholder="Enter your email here" />
<x-twill::input :required="true" name="phone" label="Phone number" placeholder="Enter your phone number" />

<x-twill::repeater
    type="social-media-links"
/>
