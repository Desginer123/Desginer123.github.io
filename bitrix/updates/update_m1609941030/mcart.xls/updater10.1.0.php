<?
use Bitrix\Main\Application;
$conn = Application::getConnection();
$res = $conn->queryScalar(
    "
SELECT Count(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'mcart_xls_profile' AND COLUMN_NAME = 'SKU_CODE'
"
);
if ($res < 1)
{
    $conn->queryExecute(
        'ALTER TABLE `mcart_xls_profile` ADD `SKU_CODE` TEXT NULL DEFAULT NULL AFTER `ONLY_UPDATE` '
    );
}
$updater->CopyFiles("install/modules", "modules");
?>