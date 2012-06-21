--------------------------------------------------------------------------

	RESEARCH ASSISTANT MODULE
	Beta 1

--------------------------------------------------------------------------

 * LICENSE
 * INTRODUCTION
 * INSTALLING
 * USAGE
 * DATABASE SCHEMA

===============================================================================
LICENSE

PhpGedView: Genealogy Viewer
Copyright (C) 2002 to 2007  Neumont University and Others

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the file GPL.txt included with this software for more
detailed licensing information.

===============================================================================
INTRODUCTION

This Research Assistant module adds functionality to the PhpGedView application
which will help you to manage and collaborate on your genealogical research.
With this module you can create and assign research tasks, record the results
of your research online, and share the results with others.  When you have
completed your research you can automatically convert the research into
genealogical data when you complete a research task.

The Research Assistant integrates directly with PhpGedView so that your data
and your research are always associated together.  You will be able to look 
back and see both successful and unsuccessful research.

The Research Assistant module also simplifies data entry and promotes proper 
source citation of data by allowing you to work from a source centric view.  
When entering data you have the option of choosing a source specific entry 
form, such as a census extraction form.  When you enter data, you can attach
it to multiple people so that you don't have to enter the same data on multiple
forms.  And data that you enter through the Research Assistant is always cited 
with a source.  

This version of the Research Assistant is still in a beta phase.  There is 
still much work to be done on the module, but it is usable now in its current
phase.  With this release there will also be future upgrade paths so that data
you enter in this version of the research assistant will not be lost with
future upgrades.

===============================================================================
INSTALLING

1. Requires a running of PhpGedView v4.0 or higher
2. Extract the files and copy them to the "modules" directory in your 
   PhpGedView installation
3. For PhpGedView 4.0.x, move the files from 4.0compat folder into the main 
   PhpGedView directory
4. After logging in you should see a new "Research Assistant" icon in your
   main PhpGedView menu bar.
5. Click on the "Research Assistant" icon to build the database tables and
   setup the Research Assistant

See the USAGE information below for more information on how to get started 
using the research assistant module.

===============================================================================
USAGE

--Tasks
 The Research Assistant is centered on the research Task.  A research Task is 
 similar to a TODO item and tracks a particular genealogical research 
 assignement that needs to be done.  An example task title may be, "Find Joe's 
 Birth record in the Ottowa county Birth Records".

 Tasks may be assigned to specific PhpGedView users.  By assigning tasks to 
 users everyone knows what research they should be working on, and who is 
 working on other research tasks.
 
 Tasks are also assigned to a source and to a set of individuals in your data.
 with the Research Assistant module installed, you will see a new Research
 Assistant tab on the individual page in PhpGedView and a new tasks section on
 the source data page.

--Folders
 Tasks are also organized into folders.  You may create and organize your 
 folders however you like.  You will probably want to organize your online
 folders similarly to you how you organize hard copies of your research. Many
 researchers organize their folders by family line, surname, or geographic 
 locations.

--Research Assistant Individual Tab
 The Reserach Assistant tab on the individual page is designed to help you see 
 what research needs to be done for that person. From this tab you can create a
 new task manually, or automatically create a task from one of the missing 
 items.
 
 The missing items table shows you possible holes in this person's data.  In 
 the future it will use artificial intelligence techniques to provide possible 
 clues to help you find the missing information.
 
 The "Auto Search" section allows you to quickly search for the details of this
 person on common genealogical sites such as Ancestry.com and FamilySearch.org.
 In this section you choose the site you would like to search, and then select
 the information you would like to search for.
 
 There is also a comments section where users can discuss the data and research
 about this individual.
 
--Forms
  When you are ready to complete a task, you will be asked to choose a data 
  entry form.  The available forms are selected from the "forms" directory.
  
  Select the "No Form" option if you just want to add a note about your results
  and not add any data.
  
  Select the "Generic Form" option to enter a generic source citation and then
  provide fact information for the people attached to that task.
  
  The other form options are source specific.  There are several US census 
  forms for example.  You may create your own forms by copying one of the 
  provided forms and modifying it.
  
  Once you have selected a form and entered the required source citatoin 
  information, you will then be asked to create any new facts that you learned
  from your research.  A census record for example, contains a wealth of fact
  information, such as birth and occupation, that you may want to add to the 
  individuals you researched.  Any facts that you add through the research 
  assistant will automatically have the source citation's added.  Anytime
  someone attempts to edit the fact data in PGV, you will be taken back to the 
  research assistant to edit the data.  This ensures that the data will be 
  updated for all records that it is linked to.
  
--Auto Generate Tasks
  With this option you can automatically convert _TODO GEDCOM tags into 
  research assistant tasks.  You will be given the option of editing the tasks
  before they are added and of choosing the ones you want added.

===============================================================================
DATABASE SCHEMA

CREATE TABLE `pgv_individualtask` (
  `it_t_id` int(11) NOT NULL,
  `it_i_id` varchar(255) NOT NULL,
  `it_i_file` int(11) NOT NULL,
  PRIMARY KEY  (`it_t_id`,`it_i_id`,`it_i_file`)
)

CREATE TABLE `pgv_probabilities` (
  `pr_id` int(11) NOT NULL,
  `pr_f_lvl` varchar(200) NOT NULL,
  `pr_s_lvl` varchar(200) default NULL,
  `pr_rel` varchar(200) NOT NULL,
  `pr_matches` int(11) NOT NULL,
  `pr_count` int(11) NOT NULL,
  `pr_file` int(11) default NULL,
  PRIMARY KEY  (`pr_id`)
)

CREATE TABLE `pgv_taskfacts` (
  `tf_id` int(11) NOT NULL default '0',
  `tf_t_id` int(11) default NULL,
  `tf_factrec` text,
  `tf_people` varchar(255) default NULL,
  PRIMARY KEY  (`tf_id`)
)

CREATE TABLE `pgv_tasks` (
  `t_id` int(11) NOT NULL,
  `t_fr_id` int(11) NOT NULL,
  `t_title` varchar(255) NOT NULL,
  `t_description` text NOT NULL,
  `t_startdate` int(11) NOT NULL,
  `t_enddate` int(11) default NULL,
  `t_results` text,
  `t_form` varchar(255) default NULL,
  `t_username` varchar(45) default NULL,
  PRIMARY KEY  (`t_id`)
)

CREATE TABLE `pgv_tasksource` (
  `ts_t_id` int(11) NOT NULL,
  `ts_s_id` varchar(255) NOT NULL,
  `ts_page` varchar(255) default NULL,
  `ts_date` varchar(50) default NULL,
  `ts_text` text,
  `ts_quay` varchar(50) default NULL,
  `ts_obje` varchar(20) default NULL,
  `ts_array` text,
  PRIMARY KEY  (`ts_s_id`,`ts_t_id`)
)

CREATE TABLE `pgv_user_comments` (
  `uc_id` int(11) NOT NULL,
  `uc_username` varchar(45) NOT NULL,
  `uc_datetime` int(11) NOT NULL,
  `uc_comment` varchar(500) NOT NULL,
  `uc_p_id` varchar(255) NOT NULL,
  `uc_f_id` int(11) NOT NULL,
  PRIMARY KEY  (`uc_id`)
)
