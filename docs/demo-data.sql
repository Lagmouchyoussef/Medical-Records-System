-- MediFolio demo data
-- Dates are relative to NOW(), so the dashboard always looks alive.
-- Usage:  mysql -u root medifolio < docs/demo-data.sql

INSERT INTO patient (name, illness, assigned_doctor, visit_date) VALUES
 ('Sarah Bennett',  'Seasonal flu', 'Dr. Carter', DATE_ADD(NOW(), INTERVAL 2 DAY)),
 ('Daniel Moore',   'Hypertension', 'Dr. Hughes', DATE_ADD(NOW(), INTERVAL 3 DAY)),
 ('Emma Collins',   'Diabetes',     'Dr. Carter', DATE_ADD(NOW(), INTERVAL 5 DAY)),
 ('Liam Parker',    'Seasonal flu', 'Dr. Hughes', DATE_ADD(NOW(), INTERVAL 9 DAY)),
 ('Olivia Reed',    'Asthma',       'Dr. Nguyen', DATE_ADD(NOW(), INTERVAL 15 DAY)),
 ('Noah Turner',    'Hypertension', 'Dr. Carter', DATE_ADD(NOW(), INTERVAL 30 DAY)),
 ('Ava Mitchell',   'Migraine',     'Dr. Nguyen', DATE_SUB(NOW(), INTERVAL 13 DAY)),
 ('Lucas Evans',    'Diabetes',     'Dr. Hughes', DATE_SUB(NOW(), INTERVAL 20 DAY)),
 ('Mia Robinson',   'Seasonal flu', 'Dr. Nguyen', DATE_SUB(NOW(), INTERVAL 35 DAY)),
 ('Ethan Walker',   'Back pain',    'Dr. Carter', DATE_SUB(NOW(), INTERVAL 55 DAY)),
 ('Isabella Hall',  'Asthma',       'Dr. Hughes', DATE_SUB(NOW(), INTERVAL 76 DAY)),
 ('James Young',    'Hypertension', 'Dr. Nguyen', DATE_SUB(NOW(), INTERVAL 103 DAY)),
 ('Grace Allen',    'Allergy',      'Dr. Carter', DATE_SUB(NOW(), INTERVAL 118 DAY));

INSERT INTO message (name, email, message, sent_at) VALUES
 ('Nadia Foster', 'nadia@example.com', 'Hello, I would like to reschedule my appointment on Thursday.', DATE_SUB(NOW(), INTERVAL 1 HOUR)),
 ('Peter Shaw',   'peter@example.com', 'Could you send me my latest test results?',                     DATE_SUB(NOW(), INTERVAL 1 DAY)),
 ('Laura King',   'laura@example.com', 'Is the clinic open on Saturday morning?',                        DATE_SUB(NOW(), INTERVAL 6 DAY)),
 ('Tom Baker',    'tom@example.com',   'Thank you for the quick follow-up last week.',                   DATE_SUB(NOW(), INTERVAL 22 DAY)),
 ('Anna Ward',    'anna@example.com',  'I need a copy of my vaccination record.',                        DATE_SUB(NOW(), INTERVAL 46 DAY)),
 ('Henry Cole',   'henry@example.com', 'Please update my phone number on file.',                         DATE_SUB(NOW(), INTERVAL 65 DAY));

INSERT INTO feedbacks (name, email, feedback, sent_at) VALUES
 ('Oliver Adams', 'oliver@example.com', 'Excellent reception and very attentive staff.',  DATE_SUB(NOW(), INTERVAL 1 DAY)),
 ('Chloe Brooks', 'chloe@example.com',  'Short waiting time and clear explanations.',     DATE_SUB(NOW(), INTERVAL 9 DAY)),
 ('Jack Morgan',  'jack@example.com',   'The online booking could be easier to find.',    DATE_SUB(NOW(), INTERVAL 34 DAY)),
 ('Ruby Hayes',   'ruby@example.com',   'Very professional doctor, highly recommended.',  DATE_SUB(NOW(), INTERVAL 81 DAY));
