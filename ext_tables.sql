#
# Table structure for table 'tx_chessmanager_domain_model_team'
#
CREATE TABLE tx_chessmanager_domain_model_team (
   team varchar(255) DEFAULT '' NOT NULL,
   note text DEFAULT '',
   sort TINYINT(4) NOT NULL DEFAULT '0',
   hidden tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_chessmanager_domain_model_player'
#
CREATE TABLE tx_chessmanager_domain_model_player (
   name varchar(255) DEFAULT '' NOT NULL,
   dwz varchar(6) DEFAULT NULL,
   phone varchar(20) DEFAULT NULL,
   status TINYINT(1) NOT NULL DEFAULT '0',
   note text DEFAULT '',
   sort TINYINT(4) NOT NULL DEFAULT '0',
   hidden tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_chessmanager_domain_model_resultteam'   float DEFAULT '0' NOT NULL,
#
CREATE TABLE tx_chessmanager_domain_model_resultteam (
   class_game TINYINT(2) DEFAULT '0' NOT NULL,
   round_game TINYINT(2) DEFAULT '0' NOT NULL,
   saison_game varchar(20) DEFAULT '' NOT NULL,
   home_team int(5) DEFAULT '0' NOT NULL,
   away_team int(5) DEFAULT '0' NOT NULL,
   home_point1 decimal(2,1) DEFAULT '0' NOT NULL,
   away_point1 decimal(2,1) DEFAULT '0' NOT NULL,
   home_point2 decimal(4,1) DEFAULT '0' NOT NULL,
   away_point2 decimal(4,1) DEFAULT '0' NOT NULL,
   date_match datetime default NULL,
);

