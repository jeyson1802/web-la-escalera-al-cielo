INSERT INTO web_la_escalera_al_cielo.users (id, name, email, email_verified_at, password, two_factor_secret, two_factor_recovery_codes, remember_token, current_team_id, profile_photo_path, created_at, updated_at) VALUES (1, 'Jeyson Junior Ventura Aguilar', 'jeysonv.sis@gmail.com', null, '$2y$10$q.KhnM1Rp4N1CdP/YvIkJeHjga30ibFJjxng1LUkYRoD3p0T6etnK', null, null, null, null, null, '2021-06-27 20:53:33', '2021-06-27 20:53:33');

INSERT INTO web_la_escalera_al_cielo.model_has_roles (role_id, model_type, model_id) VALUES (1, 'App\\Models\\User', 1);