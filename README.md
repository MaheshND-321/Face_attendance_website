# Face Recognition Attendance Management System

Welcome to the README file for the Face Recognition Attendance Management System project! This project aims to provide an efficient solution for managing student attendance using face recognition techniques. The system uses Haarcascade Classifier and LBPH (Local Binary Patterns Histograms) model for face recognition. Students can register by entering their USN (University Serial Number), and the system captures 100 sample photos of each student's face for training. Once registered, the system is ready to mark attendance by recognizing students' faces and storing attendance records in a CSV file. The project utilizes PHP along with the XAMPP server to store various student details like name, age, USN, marks, and attendance records.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Management](#database-management)
- [Contributing](#contributing)
- [License](#license)

## Project Overview

The Face Recognition Attendance Management System project offers a user-friendly platform for managing student attendance through face recognition technology. The use of Haarcascade Classifier and LBPH model ensures accurate face recognition. Students can register by providing their USN, and the system captures multiple sample photos to train the recognition model. Once trained, the system can automatically mark attendance by recognizing students' faces and storing attendance records in a CSV file. PHP and XAMPP are used to manage student details and attendance records.

## Features

The Face Recognition Attendance Management System project includes the following features:

- **User Registration**: Students can register by entering their USN.

- **Face Registration**: The system captures 100 sample photos of each registered student's face for training the recognition model.

- **Face Recognition**: The trained model can mark attendance by recognizing students' faces in real time.

- **Attendance Tracking**: Attendance records are stored in a CSV file with USN, name, date, and time.

- **Student Details Management**: PHP and XAMPP are used to manage student details like name, age, USN, marks, and attendance records.

## Installation

To set up the Face Recognition Attendance Management System project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/attendance-system.git
   ```

2. Navigate to the project directory:
   ```bash
   cd attendance-system
   ```

3. Install the required dependencies for face recognition (OpenCV, etc.).

4. Configure the CSV file path for storing attendance records.

5. Set up the XAMPP server and import the provided database structure.

6. Place the PHP files in the appropriate XAMPP server directory for student details management.

7. Run the system and access it through your web browser.

## Usage

1. Launch the system using your web browser.

2. Register students by providing their USN.

3. Capture sample photos of students' faces for training.

4. Once trained, the system can mark attendance by recognizing students' faces.

5. Attendance records will be stored in the configured CSV file.

## Database Management

The student details and attendance records are managed using PHP and XAMPP. The provided PHP files should be placed in the XAMPP server directory, and the database structure should be imported into the XAMPP MySQL database.

## Contributing

We welcome contributions to the Face Recognition Attendance Management System project! If you want to contribute, please follow the standard contribution guidelines:

1. Fork the repository.

2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature/your-feature-name
   ```

3. Make your changes and commit them with descriptive commit messages.

4. Push your changes to your forked repository.

5. Create a pull request to the main repository's `develop` branch, explaining your changes.

## License

This project is licensed under the [MIT License](LICENSE).

---

Feel free to explore, use, and contribute to the Face Recognition Attendance Management System project. If you encounter any issues or have suggestions, please create an issue on the repository. Happy coding! 🚀
