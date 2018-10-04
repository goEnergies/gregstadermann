# **BLIS - Pittman - Get Manasssas Dispatching Initiative**

## Overview

The goal of this training session is simple: train manassas dispatchers Jerry Griffith and John Miller on BLIS dispatching. Then verify that they can dispatch loads autonomously. Dispatching autonomously means that the dispatchers know how to _**create, update and delete**_ all prerequites for a dispatch including clients, sites tanks, loading numbers, and drivers.

-   [ ] Added roles and permissions for Jerry and John to dispatch.
-   [ ] Explained the nature of the client, sites and tanks relationship: a client HAS MANY sites while a site HAS ONE client. A site then HAS MANY tanks while a tank HAS ONE site. After expalining this relationship (and entering a few test clients, their sites and tanks) I saw the lightbulb turn on in Jerry's head - he now understands the structure and relationship of the above.
-   [ ] Manassas region has a new driver and Ed had all his paperwork (medicals, license, etc). So we went through creating a driver from scratch: explained that a driver consists of two parts and needs a user to attach to.
-   [ ] After I created a user, Jerry created the driver and attached him to the correct user account. Once driver was created we added driver medical, a medical examiner, a driver license, a tractor, trailer and a terminal card.
-   [ ] Showed dispatchers how to upload scans of physical paperwork for drivers and then uploaded all paperwork for the new driver (driver license, medical exam cert, and driving record)
-   [ ] Ed and I had dispatchers sit at the keyboard by themselves and create many dispatches. When they ran into a problem aka (no sites or no tanks, etc) showed dispatchers how to use on-page forms to add sites and tanks.
-   [ ] Also showed them best practices/tips & tricks for working in BLIS (aka opening up a second window or tabs so they don't lose data on form)
-   [ ] Went through process of correctly creating loading numbers.

## Loading Numbers

Loading numbers entered by Manassas staff were incorrectly added. Bulk Supplier and Supplier fields often backwards. Need to remove bad loading numbers while keeping the good ones for Charlotte region.

### Possible fixes

-   Use audit trail table to find who entered
-   Find column on loading number table that is unique to manassas region: delete all loading numbers that have terminal_id mapped to Apex, Buckeye, Sunoco, Zenith Arch, Center, Yorktown-Plains, First Energy, IMTT

## Manassas Region Filter Missing Drivers

-   **FIXED** - Just need to add terminal cards in manassas region for missing drivers.
-   **Add link to driver terminal cards from driver view page**

## Toggle filter button not working

Filter button working every EXCPET visual dispatch screen.

## Fix KAG import

KAG import is somewhat working - after downloading .xls from KAG workbench you can import using the KAG import tools. After importing and fixing any mapping, you can "convert to dispatch". This function is what is broken - it is adding all the orders into a **single** dispatch.

## Change bulk supplier label on dispatch form to customer account

## Create a dispatching workflow best practices guide
