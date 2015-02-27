#Jssor Slider Plugin for OctoberCMS
Create a slideshow in your website using **high performance**, touch responsive sliders.

####Features
* **Touch responsive**
* **Light weight**
* **No JQuery** used
* **17 transaction effects**
* **Touchpad** scrolling
* **Multiple** slideshows on same page
* **Image fill modes**
* **Keyboard arrow key navigation**
* **Horizontal** and **vertical** drag orientation
* **Bullet** and **arrow** navigators with custom direction

#How do this work
The plugin provides `advanced` slider component to build slideshow with advance settings, through which you can create your own style sliders.

> **Note**: Put `{% styles %}` and `{% scripts %}` in your page header, if not there.

#Advanced Slider Component
Use the **advanced** component to display the slideshow for your images of any size.
The component has the following properties:
* **Slider** - Choose slideshow that is registered previously.
* **Height** - Set the height of your slideshow, default value is `400` (Note: width is dynamic).
* **Autoplay** - Whether to auto play, to enable slideshow, this option must be set to true, default value is `True`.
* **Fill Mode** - The way to fill image in slide, stretch, keep aspect ratio and put all inside slide, cover (keep aspect ratio and cover whole slide), actual size, contain for large image, actual size for small image, default value is `Stretch`.
* **Transaction Effect** - Set the slideshow transaction effect, default value is `Random`.
* **Autoplay Interval** - Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is `2000`.
* **Pause on Hover** - Whether to pause when mouse over if a slider is auto playing, Options: no pause, mouse, touch, mouse & touch, default value is `Mouse`.
* **Arrow Key Navigation** - Allows keyboard (arrow key) navigation or not, default value is `True`.
* **Slide Duration** - Specifies default duration (swipe) for slide in milliseconds, default value is `500`.
* **Drag Offset** - Minimum drag offset to trigger slide , default value is `40`.
* **Slide Spacing** - Space between each slide in pixels, default value is `0`.
* **Drag Orientation** - Orientation to drag slide, Options: no drag, horizontal, vertical, both, default value is `Horizontal`.
* **Play Orientation** - Orientation to play slide (for auto play, navigation), Options: horizontal, vertical, horizontal reverse, vertical reverse, default value is `Horizontal`.
* **Navigator Show** - Show the bullet or arrow navigator for slide, default value is `Always`.
* **Auto Center** - Align navigator to user specific location.
* **Orientation** - Horizontal and vertical orientation for bullet and arrow navigators.
* **SpacingX** - Horizontal spacing for bullet navigator, default value is `8`.
* **SpacingY** - Vertical spacing for bullet navigator, default value is `8`.
* **Steps** - Steps to go for each navigation request, default value is `1`.
* **Lanes** - Specify lanes to arrange items, default value is `1`.

The next example shows usage of `advanced` component:

	title = "Demonstration"
	url = "/"
	layout = "default"

	[advanced]
	idSlider = "9"
	height = "400"
	autoplay = "true"
	fillmode = "0"
	transaction = "1"
	autoplayinterval = "2000"
	pauseonhover = "1"
	arrowkeynavigation = "true"
	slideduration = "500"
	mindragoffset = "40"
	slidespacing = "0"
	dragorientation = "1"
	playorientation = "1"
	chancetoshow = "2"
	autocenter = "1"
	orientation = "1"
	spacingx = "8"
	spacingy = "8"
	steps = "1"
	lanes = "1"
	chancetoshowarrow = "1"
	autocenterarrow = "2"
	stepsarrow = "1"
	==
	<!-- Advance Slider -->
	<div class="container-fluid">
		{% component 'advanced' %}
	</div>
    <!-- End Advanced Slider -->

See [Live Demo](http://youtu.be/SuR4UsXcf5o) on YouTube.
