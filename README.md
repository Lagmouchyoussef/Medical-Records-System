# Medical Records System

A comprehensive web application for managing medical records, built with Symfony PHP framework.

## Features

- Patient Management: Add, edit, and delete patient records
- Feedback System: Collect and manage patient feedback
- Messaging: Contact form for communication
- Responsive UI: Bootstrap-based interface

## Technologies Used

- Symfony 6.x
- PHP 8.x
- MySQL (Doctrine ORM)
- Bootstrap 5
- Twig Templates
- Font Awesome Icons

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Lagmouchyoussef/Medical-Records-System.git
   cd Medical-Records-System
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Configure environment:
   - Copy `.env` to `.env.local` and configure database settings

4. Run migrations:
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

5. Start the server:
   ```bash
   symfony server:start
   ```

## Project Structure

```
Medical-Records-System/
├── .editorconfig
├── .env
├── .env.dev
├── .env.test
├── .gitignore
├── composer.json
├── composer.lock
├── importmap.php
├── phpunit.dist.xml
├── symfony.lock
├── assets/
│   ├── app.js
│   ├── controllers.json
│   ├── stimulus_bootstrap.js
│   ├── controllers/
│   │   ├── csrf_protection_controller.js
│   │   └── hello_controller.js
│   └── styles/
│       └── app.css
├── bin/
│   ├── console
│   └── phpunit
├── config/
│   ├── bundles.php
│   ├── packages/
│   │   ├── asset_mapper.yaml
│   │   ├── cache.yaml
│   │   ├── csrf.yaml
│   │   ├── debug.yaml
│   │   ├── doctrine_migrations.yaml
│   │   ├── doctrine.yaml
│   │   ├── framework.yaml
│   │   ├── mailer.yaml
│   │   ├── messenger.yaml
│   │   ├── monolog.yaml
│   │   ├── notifier.yaml
│   │   ├── property_info.yaml
│   │   ├── routing.yaml
│   │   ├── security.yaml
│   │   ├── translation.yaml
│   │   ├── twig.yaml
│   │   ├── ux_turbo.yaml
│   │   ├── validator.yaml
│   │   └── web_profiler.yaml
│   ├── preload.php
│   ├── reference.php
│   ├── routes.yaml
│   ├── services.yaml
│   └── routes/
│       ├── framework.yaml
│       ├── security.yaml
│       └── web_profiler.yaml
├── migrations/
│   └── .gitignore
├── public/
│   ├── images/
│   │   └── logo.png
│   ├── index.php
├── src/
│   ├── Controller/
│   │   ├── Controller.php
│   │   ├── FeedbacksController.php
│   │   ├── MessageController.php
│   │   └── PatientController.php
│   ├── Entity/
│   │   ├── Feedbacks.php
│   │   ├── Message.php
│   │   └── Patient.php
│   ├── Form/
│   │   ├── FeedbacksType.php
│   │   ├── MessageType.php
│   │   └── PatientType.php
│   └── Repository/
│       ├── FeedbacksRepository.php
│       ├── MessageRepository.php
│       └── PatientRepository.php
├── templates/
│   ├── base.html.twig
│   ├── home.html.twig
│   ├── index.html.twig
│   ├── Feedbacks/
│   │   ├── _delete_form.html.twig
│   │   ├── _form.html.twig
│   │   ├── edit.html.twig
│   │   ├── index.html.twig
│   │   └── new.html.twig
│   ├── message/
│   │   ├── _delete_form.html.twig
│   │   ├── _form.html.twig
│   │   ├── contact.html.twig
│   │   ├── edit.html.twig
│   │   ├── index.html.twig
│   │   └── new.html.twig
│   └── patient/
│       ├── _delete_form.html.twig
│       ├── _form.html.twig
│       ├── edit.html.twig
│       ├── index.html.twig
│       └── new.html.twig
└── tests/
    └── bootstrap.php
```

## Usage

- Navigate to the home page for an overview
- Use the navigation bar to access Patients, Feedbacks, and Contact sections
- Add new records using the "Create" buttons
- Edit or delete existing records from the respective index pages

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is licensed under the MIT License.

## Author

Lagmouch Youssef
