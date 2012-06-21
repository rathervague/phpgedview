The punBB forum module was donated to the project by Patrick Kellum. It adds 
the punBB forum program to PhpGedView allowing punBB to operate in a PGV 
environment.  It requires PhpGedView version 3.3 beta 3 or higher setup in 
database mode such as MySQL or SQLite.

To add the punBB module copy the included "modules" directory to your 
PhpGedView installation.  To activate the module use the url:
module.php?mod=punbb&pgvaction=install

When activating the module, you will be asked to fill out your database 
connection parameters again and create a forum administrator.

To link to the forums, use the url: 
module.php?mod=punbb