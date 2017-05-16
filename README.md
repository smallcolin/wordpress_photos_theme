# wordpress_photos_theme
Theme used in CMS 1 Final project for ITHS.  The same version of this theme is used at the domain, http://smallcolinphotos.se

## Instructions (in progress)
```
1.  Install wordpress as normal
2.  Add this theme to the folder ../wp-content/themes

Admin Panel
1.  Activate "Photos Theme"
2.  In Appearance/Widgets, remove all widgets from "My Sidebar" except from Archives & Categories (in Categories check the box, "Show post counts")
3.  In Appearance/Menus, create a menu named, "Nav Bar".  Check the boxes "Automatically add new top-level pages to this menu" & "Header Menu".  Click on "Save Menu"
4.  In Plugins, activate "Advance Custom Fields".
5.  Go down to the newly created side option, "Custom Fields".  In Tools, import in the "acf-export-2017-01-10.json" file.
6.  Go back to Plugins/Add New.  Find, install & activate the plugin, "Ninja Forms".
7.  Go down to the newly created side option, "Ninja Forms".  In Import/Export, import in the "any_questions_ninja_forms.nff"V file found in the Extras folder.

First up is your options
1.  Go to Options in your admin panel
      •  Upload a logo (if you have one)
      •  Enter some footer details.  eg. About, Contact, Social Media links & Copyright
      •  Choose where to link some internal button links on your site.  eg Blog(Gear) & Video
      
Time to Create Some Content…
In Pages, create the following…
   •  Splash
   •  Photos
   •  Gear
   •  About
   •  Video
   •  Contact
   •  (Don't forget to delete the "Sample Page")
   
Once these pages are created go to Settings/Reading.  Change the Static Pages to Splash(Front-Page) & Gear(Blog Posts).  Save changes.

1. Splash
  -  Select the Splash section
  -  Fill in all the details.
  -  Load up more than 1 photo for a nice change of scenery throughout the day
  
2.  Photos
  -  Choose "Full Width Page" in the Template option
  -  Select your first ACF section.  To show all your galleries on this page the best option is to select Columns.
  -  Fill in the information & upload some cover photos for your galleries.
  -  I would recommend only using columns & Testimonial sections on this page for maximum effect
```

## Required
```
01 Wordpress (latest version)
02 Advanced Custom Fields (full version)
03 Photographs (Lots of them)
