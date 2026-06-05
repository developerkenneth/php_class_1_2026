-- INSERT 
INSERT INTO `users`(`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]');

-- SELECT
SELECT * FROM `users` WHERE `name`= "john doe";
SELECT * FROM `users`;

-- DELETE
DELETE FROM `users` WHERE `id` = ?;