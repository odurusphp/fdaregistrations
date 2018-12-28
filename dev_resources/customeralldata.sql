CREATE 
VIEW `customeralldata` AS
    SELECT 
        `allofit`.`cid` AS `cid`,
        `allofit`.`companyname` AS `companyname`,
        `allofit`.`domain` AS `domain`,
        `allofit`.`hasazure` AS `hasazure`,
        `allofit`.`hasoffice` AS `hasoffice`,
        `allofit`.`commid` AS `commid`,
        `allofit`.`customerid` AS `customerid`,
        `allofit`.`discount` AS `discount`,
        `allofit`.`googlediscount` AS `googlediscount`,
        `allofit`.`azurediscount` AS `azurediscount`,
        `allofit`.`dynamicsdiscount` AS `dynamicsdiscount`,
        `allofit`.`type` AS `type`,
        `allofit`.`status` AS `status`,
        `allofit`.`apienabled` AS `apienabled`,
        `allofit`.`tenantid` AS `tenantid`,
        `allofit`.`antispam` AS `antispam`,
        `allofit`.`bitdefendername` AS `bitdefendername`,
        `allofit`.`adreport` AS `adreport`,
        `allofit`.`clientmanagerid` AS `clientmanagerid`,
        `allofit`.`hostname` AS `hostname`,
        `allofit`.`paymentname` AS `paymentname`,
        `allofit`.`googleid` AS `googleid`
    FROM
        (SELECT 
            `selfcare`.`customers`.`cid` AS `cid`,
                `selfcare`.`customers`.`companyname` AS `companyname`,
                `selfcare`.`customers`.`domain` AS `domain`,
                `azr`.`hasazure` AS `hasazure`,
                `ofc`.`hasoffice` AS `hasoffice`,
                `selfcare`.`customers`.`commid` AS `commid`,
                `selfcare`.`customers`.`customerid` AS `customerid`,
                `selfcare`.`customers`.`discount` AS `discount`,
                `selfcare`.`customers`.`googlediscount` AS `googlediscount`,
                `selfcare`.`customers`.`azurediscount` AS `azurediscount`,
                `selfcare`.`customers`.`dynamicsdiscount` AS `dynamicsdiscount`,
                `selfcare`.`customers`.`type` AS `type`,
                `selfcare`.`customers`.`status` AS `status`,
                `selfcare`.`customers`.`apienabled` AS `apienabled`,
                `selfcare`.`customertenants`.`tenantid` AS `tenantid`,
                `selfcare`.`antispamcustomers`.`antispamname` AS `antispam`,
                `selfcare`.`bitdefendercustomers`.`bitdefendername` AS `bitdefendername`,
                `selfcare`.`adreportcustomers`.`adreportname` AS `adreport`,
                `selfcare`.`clientmanagercustomers`.`clientmanagername` AS `clientmanagerid`,
                `selfcare`.`monitoringcustomers`.`monitoringname` AS `hostname`,
                `selfcare`.`paymentcustomers`.`paymentname` AS `paymentname`,
                GROUP_CONCAT(`selfcare`.`googlecustomers`.`googleid`
                    SEPARATOR ', ') AS `googleid`
        FROM
            ((((((((((`selfcare`.`customers`
        LEFT JOIN `selfcare`.`customertenants` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`customertenants`.`cid`)))
        LEFT JOIN `selfcare`.`antispamcustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`antispamcustomers`.`cid`)))
        LEFT JOIN `selfcare`.`bitdefendercustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`bitdefendercustomers`.`cid`)))
        LEFT JOIN `selfcare`.`adreportcustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`adreportcustomers`.`cid`)))
        LEFT JOIN `selfcare`.`clientmanagercustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`clientmanagercustomers`.`cid`)))
        LEFT JOIN `selfcare`.`monitoringcustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`monitoringcustomers`.`cid`)))
        LEFT JOIN `selfcare`.`paymentcustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`paymentcustomers`.`cid`)))
        LEFT JOIN `selfcare`.`googlecustomers` ON ((`selfcare`.`customers`.`cid` = `selfcare`.`googlecustomers`.`cid`)))
        LEFT JOIN (SELECT DISTINCT
            `selfcare`.`tenantoffers`.`tenantid` AS `tenantid`,
                'true' AS `hasazure`
        FROM
            `selfcare`.`tenantoffers`
        WHERE
            (`selfcare`.`tenantoffers`.`offername` LIKE '%azure%')) `azr` ON ((`azr`.`tenantid` = `selfcare`.`customertenants`.`tenantid`)))
        LEFT JOIN (SELECT DISTINCT
            `selfcare`.`tenantoffers`.`tenantid` AS `tenantid`,
                'true' AS `hasoffice`
        FROM
            `selfcare`.`tenantoffers`
        WHERE
            (NOT ((`selfcare`.`tenantoffers`.`offername` LIKE '%azure%')))) `ofc` ON ((`ofc`.`tenantid` = `selfcare`.`customertenants`.`tenantid`)))
        GROUP BY `selfcare`.`customers`.`cid`) `allofit`
    WHERE
        ISNULL(`allofit`.`status`)