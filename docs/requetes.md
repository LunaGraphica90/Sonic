# Requêtes SQL utiles au projet SONIC

## Trier les personnages par ordre alphabétique

```sql
SELECT *
FROM `character`
ORDER BY `name`
```

## Récupérer toutes les informations des personnages de Sonic, affichées par ordre alphabétique selon le nom du personnage et avec ses relations

```sql
SELECT `character`.*, `type`.`name` AS `type_name`, `type`.`id` AS `ID_TYPE`
FROM `character`
INNER JOIN `type` ON `character`.`type_id` = `type`.`id` 
ORDER BY `character`.`name`
```