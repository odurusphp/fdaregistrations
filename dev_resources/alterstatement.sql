DELIMITER $$

ALTER ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customeralldata` AS 
SELECT
  `marketplace`.`customers`.`cid`                            AS `cid`,
  `marketplace`.`customers`.`companyname`                    AS `companyname`,
  `marketplace`.`customers`.`domain`                         AS `domain`,
  `azr`.`hasazure`                                        AS `hasazure`,
  `ofc`.`hasoffice`                                       AS `hasoffice`,
  `marketplace`.`customers`.`commid`                         AS `commid`,
  `marketplace`.`customers`.`status`                         AS `status`,
  `marketplace`.`customers`.`customerid`                     AS `customerid`,
  `marketplace`.`customers`.`discount`                       AS `discount`,
  `marketplace`.`customers`.`googlediscount`                 AS `googlediscount`,
  `marketplace`.`customers`.`azurediscount`                  AS `azurediscount`,
  `marketplace`.`customers`.`dynamicsdiscount`               AS `dynamicsdiscount`,
  `marketplace`.`customers`.`type`                           AS `type`,
  `marketplace`.`customers`.`apienabled`                     AS `apienabled`,
  `marketplace`.`customertenants`.`tenantid`                 AS `tenantid`,
  `marketplace`.`antispamcustomers`.`antispamname`           AS `antispam`,
  `marketplace`.`bitdefendercustomers`.`bitdefendername`     AS `bitdefendername`,
  `marketplace`.`adreportcustomers`.`adreportname`           AS `adreport`,
  `marketplace`.`clientmanagercustomers`.`clientmanagername` AS `clientmanagerid`,
  `marketplace`.`monitoringcustomers`.`monitoringname`       AS `hostname`,
  `marketplace`.`paymentcustomers`.`paymentname`             AS `paymentname`,
  GROUP_CONCAT(`marketplace`.`googlecustomers`.`googleid` SEPARATOR ', ') AS `googleid`
FROM ((((((((((`marketplace`.`customers`
            LEFT JOIN `marketplace`.`customertenants`
              ON ((`marketplace`.`customers`.`cid` = `marketplace`.`customertenants`.`cid`)))
           LEFT JOIN `marketplace`.`antispamcustomers`
             ON ((`marketplace`.`customers`.`cid` = `marketplace`.`antispamcustomers`.`cid`)))
          LEFT JOIN `marketplace`.`bitdefendercustomers`
            ON ((`marketplace`.`customers`.`cid` = `marketplace`.`bitdefendercustomers`.`cid`)))
         LEFT JOIN `marketplace`.`adreportcustomers`
           ON ((`marketplace`.`customers`.`cid` = `marketplace`.`adreportcustomers`.`cid`)))
        LEFT JOIN `marketplace`.`clientmanagercustomers`
          ON ((`marketplace`.`customers`.`cid` = `marketplace`.`clientmanagercustomers`.`cid`)))
       LEFT JOIN `marketplace`.`monitoringcustomers`
         ON ((`marketplace`.`customers`.`cid` = `marketplace`.`monitoringcustomers`.`cid`)))
      LEFT JOIN `marketplace`.`paymentcustomers`
        ON ((`marketplace`.`customers`.`cid` = `marketplace`.`paymentcustomers`.`cid`)))
     LEFT JOIN `marketplace`.`googlecustomers`
       ON ((`marketplace`.`customers`.`cid` = `marketplace`.`googlecustomers`.`cid`)))
    LEFT JOIN (SELECT DISTINCT
                 `marketplace`.`tenantoffers`.`tenantid`                     AS `tenantid`,
                 'true'                                                   AS `hasazure`
               FROM `marketplace`.`tenantoffers`
               WHERE (`marketplace`.`tenantoffers`.`offername` LIKE '%azure%')) `azr`
      ON ((`azr`.`tenantid` = `marketplace`.`customertenants`.`tenantid`)))
   LEFT JOIN (SELECT DISTINCT
                `marketplace`.`tenantoffers`.`tenantid`                     AS `tenantid`,
                'true'                                                   AS `hasoffice`
              FROM `marketplace`.`tenantoffers`
              WHERE (NOT((`marketplace`.`tenantoffers`.`offername` LIKE '%azure%')))) `ofc`
     ON ((`ofc`.`tenantid` = `marketplace`.`customertenants`.`tenantid`)))
GROUP BY `marketplace`.`customers`.`cid`$$

DELIMITER ;