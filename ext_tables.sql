#
# Table structure for table 'tx_chessmanager_domain_model_team'
#
CREATE TABLE tx_chessmanager_domain_model_team (
   team varchar(255) DEFAULT '' NOT NULL,
   note text NOT NULL,
);

#
# Table structure for table 'tx_chessmanager_domain_model_player'
#
CREATE TABLE tx_chessmanager_domain_model_player (
   name varchar(255) DEFAULT '' NOT NULL,
   dwz varchar(6) DEFAULT '' NOT NULL,
   phone varchar(20) DEFAULT '' NOT NULL,
   status TINYINT(1) NOT NULL DEFAULT '0',
);

