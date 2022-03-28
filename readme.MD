# CSS Grid for UIkit and Beaver Builder
CSS Classes to add easier use of CSS Grid with Beaver Builder.


> ## NOTICE TO REMEMBER
> 
> It's important to note that it's best to remove **ALL** padding from the modules that are in a CSS Grid column.<br>
> This makes the formatting more reliable and use of the grid gap will work best.

## 1.1 Classnames

|Classname|Use on|Purpose|
|---|---|--|
|`cssgrid`|bb column|Activate cssgrid, use modules as grid elements|
|`cssgrid-auto-height-1-1`|bb column|Activate auto height 100% on all modules in column (note: make sure to remove ALL modules padding)|
|`uk-height-1-1`|bb module|Make the module content area use 100% of it's container|
|`uk-height-1-10`|bb module|Make the module content area use (100% - 20px) of it's container height|
|`uk-height-1-20`|bb module|Make the module content area use (100% - 40px) of it's container height|
|`cssgrid-gap-small`|bb-column|12px gap between grid elements|
|`cssgrid-gap-medium`|bb-column|24px gap between grid elements|
|`cssgrid-gap-large`|bb-column|36px gap between grid elements|
|`cssgrid-cols-1`,<br>`cssgrid-cols-2`,<br>`cssgrid-cols-3`,<br>`cssgrid-cols-4`,<br>...<br>`cssgrid-cols-12`|bb column|set # of grid cols|
|`cssgrid-row-span-1`,<br>`cssgrid-rows-2`,<br>`cssgrid-rows-3`,<br>...<br>`cssgrid-rows-6`|bb column|set # of grid rows|
|`cssgrid-area-one`,<br>`cssgrid-area-two`<br>...<br>`cssgrid-area-twelve`|bb module|define cssgrid area|
|`cssgrid-col-span-1`,<br>`cssgrid-col-span-2`,<br>`cssgrid-col-span-3`,<br>...<br>`cssgrid-col-span-12`|bb module|set the colspan for a module|
|`cssgrid-row-span-1`,<br>`cssgrid-row-span-2`,<br>`cssgrid-row-span-3`,<br>...<br>`cssgrid-row-span-6|bb module|set the rowspan for a module|

The following classes can be turned on by recompiling the SCSS with the variable `$include-grid-start-end` set to `true`:

|Classname|Use on|Purpose|
|---|---|---|
|`cssgrid-col-start-1`,<br>`cssgrid-col-start-2`,<br>`cssgrid-col-start-3`,<br>...<br>`cssgrid-col-start-12`|bb module|set the column-start for a module|
|`cssgrid-col-end-1`,<br>`cssgrid-col-end-2`,<br>`cssgrid-col-end-3`,<br>...<br>`cssgrid-col-end-12`|bb module|set the column-end for a module|
|`cssgrid-row-start-1`,<br>`cssgrid-row-start-2`,<br>`cssgrid-row-start-3`,<br>...<br>`cssgrid-row-start-12`|bb module|set the row-start for a module|
|`cssgrid-row-end-1`,<br>`cssgrid-row-end-2`,<br>`cssgrid-row-end-3`,<br>...<br>`cssgrid-row-end-12`|bb module|set the row-end for a module|

## 1.2 Responsive classes

The following classes also have responsive settings

|Classname|Use on|Purpose|
|---|---|---|
|`cssgrid-gap-small@s`,<br>`cssgrid-gap-small@m`,<br>`cssgrid-gap-small@l`,<br>`cssgrid-gap-small@xl`|bb column|Use different grid gap for breakpoint|
|`cssgrid-gap-medium@s`,<br>`cssgrid-gap-medium@m`,<br>`cssgrid-gap-medium@l`,<br>`cssgrid-gap-medium@xl`|bb column|Use different grid gap for breakpoint|
|`cssgrid-gap-large@s`,<br>`cssgrid-gap-large@m`,<br>`cssgrid-gap-large@l`,<br>`cssgrid-gap-large@xl`|bb column|Use different grid gap for breakpoint|
|`cssgrid-cols-{x}@s`,<br>`cssgrid-cols-{x}@m`,<br>`cssgrid-cols-{x}@l`,<br>`cssgrid-cols-{x}@xl`|bb column|Use different cols for breakpoint (where {x} is # of cols)|
|`cssgrid-rows-{x}@s`,<br>`cssgrid-rows-{x}@m`,<br>`cssgrid-rows-{x}@l`,<br>`cssgrid-rows-{x}@xl`|bb column|Use different rows for breakpoint (where {x} is # of rows)|
|`cssgrid-col-span-{x}@s`,<br>`cssgrid-col-span-{x}@m`,<br>`cssgrid-col-span-{x}@l`,<br>`cssgrid-col-span-{x}@xl`|bb module|Use different col span for breakpoint (where {x} is # of cols)|
|`cssgrid-row-span-{x}@s`,<br>`cssgrid-row-span-{x}@m`,<br>`cssgrid-row-span-{x}@l`,<br>`cssgrid-row-span-{x}@xl`|bb module|Use different row span for breakpoint (where {x} is # of rows)|

The following classes can be turned on by recompiling the SCSS with the variable `$include-grid-start-end` set to `true`:

|Classname|Use on|Purpose|
|---|---|---|
|`cssgrid-col-start-{x}@s`,<br>`cssgrid-col-start-{x}@m`,<br>`cssgrid-col-start-{x}@l`,<br>`cssgrid-col-start-{x}@xl`|bb module|Use different col span for breakpoint (where {x} is # of cols)|
|`cssgrid-col-end-{x}@s`,<br>`cssgrid-col-end-{x}@m`,<br>`cssgrid-col-end-{x}@l`,<br>`cssgrid-col-end-{x}@xl`|bb module|Use different col span for breakpoint (where {x} is # of cols)|
|`cssgrid-row-start-{x}@s`,<br>`cssgrid-row-start-{x}@m`,<br>`cssgrid-row-start-{x}@l`,<br>`cssgrid-row-start-{x}@xl`|bb module|Use different row span for breakpoint (where {x} is # of rows)|
|`cssgrid-row-end-{x}@s`,<br>`cssgrid-row-end-{x}@m`,<br>`cssgrid-row-end-{x}@l`,<br>`cssgrid-row-end-{x}@xl`|bb module|Use different row span for breakpoint (where {x} is # of rows)|

## 1.3 Alignment classes

|Classname|Use on|Purpose|
|---|---|---|
|`cssgrid-align-start`|bb column|Vertical align to start/top|
|`cssgrid-align-end`|bb column|Vertical align to end/bottom|
|`cssgrid-align-between`|bb column|Vertical align between|
|`cssgrid-align-around`|bb column|Vertical align around|
|`cssgrid-align-start`|bb module|Vertical align to start/top|
|`cssgrid-align-end`|bb module|Vertical align to end/bottom|
|`cssgrid-align-center`|bb module|Vertical align to center|
|`cssgrid-justify-start`|bb module|Horizontal align to start/top|
|`cssgrid-justify-end`|bb module|Horizontal align to end/bottom|
|`cssgrid-justify-center`|bb module|Horizontal align to center|

## 1.4 Reponsive Breakpoints
There are 4 responsive breakpoints. If no @s, @m, @l or @xl is set, the settings will apply to all resolutions.

|breakpoint|affects|
|---|---|
|`@s`|min width 640px|
|`@m`|min width 960px|
|`@l`|min width 1200px|
|`@xl`|min width 1600px|

### **Example**

    cssgrid cssgrid-cols-1 cssgrid-cols-2@s cssgrid-cols-4@m cssgrid-gap-medium cssgrid-max-height-1-1

    Adding these classes on a Beaver Builder columns will add a
    - grid of 1 for all screens (if no additional breakpoints are set);
    - grid of 2 for screens with a min width of 640px; and a 
    - grid of 4 for screens with a min width of 960px;
    - grid gap of 24px on all screen sizes;
    - make all fl-module-content elements 100% in height
        (you will however still need to remove the padding on all individual modules);



## 2.1 Using it with grid-template-areas css property
Easiest way to use grid is through grid-template-areas. It does require some planning ahead.
- First, place your modules in a bb column;
- Assign css classes `cssgrid` to the bb column;
- Assign a custom class like `cssgrid-mytemplate` to the bb column;
- Assign css classes `cssgrid-area-one`, `cssgrid-area-two` and upwards to `cssgrid-area-twelve` to the bb modules;

Now add the following CSS to the global or page layout:

    .cssgrid-mytemplate .fl-col-content {
        grid-template-areas:
            'one'
            'two'
            'three';
    }

    /* screens wider than 640px */
    @media (min-width: 640px) {
        .cssgrid-mytemplate .fl-col-content {
            grid-template-areas:
                '. . one'
                '. two .'
                'three . .';
        }
    }

    /* screens wider than 960px */
    @media (min-width: 960px) {
        .cssgrid-mytemplate .fl-col-content {
            grid-template-areas:
                '. two . one one'
                '. two . one one'
                'three three . . .';
        }
    }

The first part will place the three modules on three seperate rows as they already were. This will be the layout for the smallest devices.

The second part is a media-query that turns it into a 3 columns, three rows layout. Depending on the contents of each individual module, it will place the create empty grid placers on the dots, and place our module assigned with class 'css-grid-area-one' on the grid area marked as 'one', the other ones marked with 'two' and 'three' respectively.

..more interesting design can be made by increasing the grid fractions and spreading the areas across multiple rows as well. Keep in mind that areas need to be unique, so they need to connect and be rectangular in size in order to work.

# 3 Inspiration

Check out these videos for mor insipration

part 1: https://youtu.be/kf_LSASkNjw

part 2: https://youtu.be/fVcGzsDuVac

part 3: https://youtu.be/F63mypuMtF0

part 4: https://youtu.be/f2nWS2MaW6o

# 4 Optional settings

To reduce filesize the col-start/col-end and row-start/row-end properties are excluded from compiling.

# 5 Changelog

|version|date|changes|
|---|---|---|
|1.2.0|28/3/2022|Moved col-start/col-end and row-start/row-end to optional status; Added optional fl-row css-grid;|
|1.1.0|27/3/2022|Fixed xl breakpoint not set correctly, added align and justify classes|
|1.0.0|27/3/2022|Initial beta version|