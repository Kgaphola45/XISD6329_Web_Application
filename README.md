# Golden Years Old Age Home Management System

## Overview

This project is a web-based management system for Golden Years Old Age Home. It provides an interface for administrators (receptionists) to manage caregivers, elderly residents, appointments, and related information.

## Features

- Dashboard with quick access to main functions
- Caregiver management (add, delete, view list)
- Elderly resident management (add, view list)
- Appointment tracking
- Prescription management
- Query handling

## Technologies Used

- PHP
- MySQL
- HTML

## Setup

1. Install a local server environment like XAMPP or WAMP.
2. Clone this repository into your web server's root directory.
3. Import the database schema named `myhmsdb`.
4. Configure the database connection in the PHP files (currently set to localhost, root user, no password).
5. Access the system through your web browser.

## Main Components

- `admin-panel1.php`: The main administrative interface
- `newfunc.php`: Contains additional functions 
- Database tables:
  - `doctb`: Stores caregiver information
  - `patreg`: Stores elderly resident information
  - `appointmenttb`: Manages appointments
  - `prestb`: Stores prescription information
  - `Relative_ToElderly`: Stores information about relatives of elderly residents

## Usage

Log in as an administrator to access the following functions:

- View and manage caregivers
- View and manage elderly residents
- Track appointments
- Manage prescriptions
- Handle queries
- Add new elderly residents and their relatives

## Security Notes

- This system contains sensitive medical information. Ensure proper security measures are in place before deploying in a production environment.
- The current setup uses plain text passwords. It's strongly recommended to implement proper password hashing before real-world use.

## Future Improvements

- Implement user authentication and role-based access control
- Enhance data validation and sanitization
- Improve the user interface for better usability
- Add reporting and analytics features

## Contributing

Contributions to improve the system are welcome. Please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License. Contact **Dev Crafters** for details.

## Team

**Dev Crafters**

- Kgaphola Emmanuel
- Kabelo Sekole
- Gabriel Moraka
