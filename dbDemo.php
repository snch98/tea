<?php 
// todo: display all data here\

// хуйня с шестеренкой
// таблица tea_varieties
// вкладка SQL
// скрипт внизу
/*
INSERT INTO `tea_varieties` (`variety_id`, 
`variety_name`, `cost_per_unit`, `unit`, `kind_id`, `origin_id`, `description`) VALUES 
(NULL, 'Keemun Tea', '9', 'kg', '1', '1', 'Winey, fruity, floral, with a hint of smokiness.' ), 
(NULL, 'Darjeeling Tea', '13', 'kg', '1', '2', 'Delicate, floral, muscatel, sometimes with a slightly astringent note.' ),
(NULL, 'Assam Tea', '15', 'kg', '1', '2', 'Bold, brisk, malty, sometimes with a hint of caramel.' ),
(NULL, 'Darjeeling Tea', '13', 'kg', '1', '2', 'Delicate, floral, muscatel, sometimes with a slightly astringent note.' ),
(NULL, 'Assam Tea', '15', 'kg', '1', '2', 'Bold, brisk, malty, sometimes with a hint of caramel.' );


INSERT INTO `tea_inventory` (`id`, `tea_id`, `is_available`, `quantity_in_stock`, `last_restock_date`) VALUES 
(NULL, '3', '1', '4', current_timestamp()),
(NULL, '4', '1', '40', current_timestamp()),
(NULL, '5', '0', '0', current_timestamp()),
(NULL, '6', '0', '0', current_timestamp()),
(NULL, '7', '1', '14', current_timestamp()),
(NULL, '8', '1', '8', current_timestamp()),
(NULL, '9', '1', '4', current_timestamp()),
(NULL, '10', '1', '1', current_timestamp()),
(NULL, '11', '1', '8', current_timestamp()),
(NULL, '12', '1', '6', current_timestamp()),
(NULL, '13', '1', '32', current_timestamp()),
(NULL, '14', '0', '0', current_timestamp()),
(NULL, '15', '1', '7', current_timestamp()),
;

SELECT 
i.id, i.is_available, i.quantity_in_stock, i.last_restock_date,
v.variety_name, v.cost_per_unit, v.unit, v.kind_id, v.picture_name, v.description,
k.tea_kind,
c.country_name
FROM tea_inventory i 
JOIN tea_varieties v ON i.tea_id=v.variety_id 
JOIN kinds_of_teas k ON v.kind_id=k.id 
JOIN countries_of_origin c ON v.origin_id=c.country_id
*/
?>