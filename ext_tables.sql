#
# alter tt_content table
#
CREATE TABLE tt_content (
    layout varchar(128) not null default '',
    tx_plate_ttc_additions_links int(11) unsigned DEFAULT '0',
    tx_plate_ttc_additions_icon varchar(255) not null default '',
    tx_plate_ttc_additions_flexform mediumtext,
    tx_plate_ttc_additions_input mediumtext,
    tx_plate_ttc_additions_check1 tinyint,
    tx_plate_ttc_additions_check2 tinyint,
    tx_plate_ttc_additions_check3 tinyint,
    tx_plate_ttc_additions_input2 mediumtext,
    tx_plate_ttc_additions_input3 mediumtext,
    tx_plate_ttc_additions_input4 mediumtext,
);
# alter tx_plate_ttc_additions_links table
#
CREATE TABLE tx_plate_ttc_additions_links (
  header tinytext,
  layout tinytext,
  description text,
  typolink varchar(4096),
  linkstyle tinyint(4) unsigned DEFAULT '0' NOT NULL,
  image int(11) unsigned DEFAULT '0' NOT NULL,
  tx_plate_ttc_additions_icon varchar(255) not null default '',
  tx_plate_ttc_additions_method mediumtext,
  parentid int(11) DEFAULT '0' NOT NULL,
  parenttable text,
  role varchar(255) DEFAULT '' NOT NULL,
);
