create bulk insert query for this table
table name: master.user_roles
field: 
- user_id: number
- role_id: number


INSERT INTO master.user_profiles (user_id, position, sub_department_id)
VALUES 
  (1774, 'Manager', 27),
  (2183, 'Manager', 27),
   (1774, 'Manager', 28),
  (2183, 'Manager', 28),
   (1774, 'Manager', 29),
  (2183, 'Manager', 29),
   (1774, 'Manager',30),
  (2183, 'Manager', 30)
  

  INSERT INTO master.user_roles (user_id, role_id)
  VALUES 
    (1444, 68),
    (2194, 68),
    (2206, 68),
    (2106, 68),
    (2107, 68),
    (2183, 68),
    (1774, 68)
    
