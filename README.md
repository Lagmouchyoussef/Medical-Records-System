
<div align="center">

  ![Symfony](https://img.shields.io/badge/Symfony-000000?style=for-the-badge&logo=symfony&logoColor=white)
  ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
  ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
  ![License](https://img.shields.io/badge/License-MIT-green.svg)

  # Medical Records Management System

  A comprehensive web application designed to streamline medical record management, patient tracking, and administrative communication.

  [Live Demo](#) • [Report Bug](#) • [Request Feature](#)

</div>

---

## 🎥 System Demonstration

<!-- LOCAL VIDEO PLAYER -->
<!-- Ensure the file 'PHP.mp4' is uploaded to the root of your repository -->

<div align="center">
  <video width="800" controls style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
    <source src="PHP.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

---

## 📖 Project Overview

This project serves as a centralized platform for healthcare administration, enabling efficient management of patient data, medical history, and correspondence.

### 🎓 Development Context

> "This project represents a foundational milestone in my journey as a Symfony developer. It was built to demonstrate my proficiency in core architectural patterns (MVC), database management with Doctrine, and the implementation of secure, data-driven web applications."

## 📋 Extended Description

The **Medical Records Management System** is a full-stack web solution designed to modernize the administrative workflow of a healthcare facility. By replacing traditional paper-based filing with a digital ecosystem, the application ensures data integrity, accessibility, and streamlined communication between patients and providers.

### System Architecture & Workflow

The application is built upon the **Symfony Framework**, adhering to the Model-View-Controller (MVC) architectural pattern. This separation of concerns ensures that the business logic (managing patient data) is cleanly decoupled from the presentation layer (user interface), resulting in maintainable and scalable code.

#### 1. Patient Data Management
At the core of the system is the **Patient Module**. This module is designed to handle complex data relationships, storing not just basic demographics but also critical medical context.
*   **Clinical Context:** For each patient entry, the system records specific medical details such as the diagnosed **Illness** and the assigned **Doctor**, creating a direct link between the patient and the caregiver.
*   **Appointment Scheduling:** The inclusion of a **Next Visit** date field transforms the system into a scheduling tool, allowing staff to monitor upcoming consultations and manage daily workflows efficiently.
*   **CRUD Operations:** The interface provides a complete set of Create, Read, Update, and Delete (CRUD) capabilities, ensuring that patient records can be corrected or archived as the medical situation evolves.

#### 2. Quality Assurance via Feedback
To maintain high service standards, the system includes a dedicated **Feedback Module**. This feature allows the administration to capture patient satisfaction data.
*   It records the patient's perspective along with a timestamp (**Sending Date**), providing a historical log of service quality.
*   Administrators have the authority to **Modify** or **Suppress** feedback, allowing for the management of inappropriate content or the resolution of reported issues.

#### 3. Centralized Communication Hub
The system bridges the gap between the public and the administration through a dual-layer communication interface:

*   **Frontend Submission:** A user-friendly **Contact Us** form allows visitors to securely send inquiries. The form captures structured data (**Full Name**, **Email**, and **Message**), ensuring that the administration has all necessary context to reply.
*   **Backend Inbox:** On the administrative side, a **Received Messages** dashboard aggregates these submissions.
*   **User Experience (UX) Design:** Special attention was paid to the "Empty State." When no messages are present, the interface displays a clear, guiding message: *"No messages received. Messages will appear here once received."* This prevents user confusion and enhances the perceived polish of the application.

---

## ✨ Key Features

The application is divided into three primary modules: **Patient Management**, **Feedback System**, and **Communication**.

### 🏥 1. Patient Management
A robust interface for handling patient records with full CRUD capabilities.

*   **Dashboard View:** Displays a comprehensive data table including:
    *   `Patient ID`
    *   `Patient Name`
    *   `Illness` (Current condition/diagnosis)
    *   `Attending Doctor`
    *   `Next Visit` (Scheduled appointment date)
*   **Actions:** Administrators can `Edit` patient details or `Delete` records directly from the dashboard.

### 💬 2. Feedback & Review System
Allows administrators to monitor and manage patient feedback.

*   **Data Overview:** Lists feedback entries with the following attributes:
    *   `ID`
    *   `Name`
    *   `Email`
    *   `Feedback Content`
    *   `Sending Date`
*   **Management:** Options to `Modify` content or `Remove` feedback entries.

### 📩 3. Contact & Messaging Module
Handles external communication via a public-facing form and an internal inbox.

*   **Public Contact Form:**
    *   `Full Name`: Sender's identification.
    *   `Email Address`: Reply-to address.
    *   `Message`: Text area for inquiries.
*   **Administrative Inbox:**
    *   Displays received messages with columns: `ID`, `Sender`, `Email`, `Message`, `Date Sent`.
    *   **State Handling:** Implements a dynamic empty state: *"No messages received. Messages will appear here once received."*

---

## 🛠️ Tech Stack

This application is built using industry-standard tools:

*   **Backend Framework:** Symfony 6 (PHP)
*   **Database:** MySQL with Doctrine ORM
*   **Frontend:** Twig Templates, HTML5, Bootstrap 5
*   **Form Handling:** Symfony Form Component
*   **Server:** Apache/Nginx (local development via Symfony CLI)

---

## 🚀 Getting Started

To run this project locally, please follow these instructions:

### Prerequisites

*   PHP >= 8.1
*   Composer
*   MySQL Server
*   Symfony CLI (Optional)

### Installation Steps

1.  **Clone the repository**
    ```bash
    git clone https://github.com/Lagmouchyoussef/Medical-Records-System.git
    ```

2.  **Install dependencies**
    ```bash
    composer install
    ```

3.  **Configure Environment**
    *   Open `.env` and update the `DATABASE_URL` string with your database credentials.
    ```env
    DATABASE_URL="mysql://root:password@127.0.0.1:3306/medical_db?serverVersion=8.0"
    ```

4.  **Setup Database**
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:schema:update --force
    ```

5.  **Run Server**
    ```bash
    symfony server:start
    ```
    Navigate to `http://localhost:8000` in your browser.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

## 📧 Contact

**Lagmouch Youssef**

*   GitHub: [@Lagmouchyoussef](https://github.com/Lagmouchyoussef)

---

<div align="center">
  <sub>Built with ❤️ using Symfony</sub>
</div>
```
