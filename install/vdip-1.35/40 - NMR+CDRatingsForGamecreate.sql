ALTER TABLE `wD_Games` ADD `minNoCD` SMALLINT( 5 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `wD_Games` ADD `minNoNMR` SMALLINT( 5 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `wD_Backup_Games` ADD `minNoCD` SMALLINT( 5 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `wD_Backup_Games` ADD `minNoNMR` SMALLINT( 5 ) UNSIGNED NOT NULL DEFAULT '0';
UPDATE `wD_vDipMisc` SET `value` = '40' WHERE `name` = 'Version';